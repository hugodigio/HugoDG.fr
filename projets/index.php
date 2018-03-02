<html>
<head>
  <?php
    $page = "Projets";
    include_once("/var/www/wgaizq/www/_utils/includes/head.php");
  ?>
</head>
<body>
  <header id="header">
  <?php include_once("/var/www/wgaizq/www/_utils/includes/header.php"); ?>
  </header>
  <div id="contenu">
    <?php
    //connexion à la base de données
    try {
        $bdd = new PDO("mysql:host=154.49.211.33;dbname=wgaizq_wp_dgs;charset=utf8","wgaizq_wp_dgs","DigioSoftwareBDDfci2x");
    } catch (PDOException $e) {
        echo("<h3 style='color: #c9302c'>Impossible de se connecter à la base de donnée ".$e->getMessage()."</h3>");
    }

      /* Si aucun type selectionné */
      if(!isset($_GET['type'])){
        echo("<h2> Projets </h2><center>");

        echo("<p> Retrouvez une partie des projets sur mon dépôt <i class='fab fa-github'></i> <a href='https://github.com/hugodigio'>github </a></p>");
        $sql = 'SELECT * FROM `Type`';
        $results = $bdd->query($sql);
        while ($row = $results->fetch()){
          $sql2 = 'SELECT count(*) FROM `Projets` WHERE id_type='.$row["id_type"].'';
          $results2 = $bdd->query($sql2);
          $row2=$results2->fetch();
          echo('
          <a href="?type='.$row[0].'"><div class="box" style="background-color: '.$row["Couleur"].'; background-image: url(\''.$row["url_image"].'\')">
            <strong><center>'.$row["nom"].'</center></strong><br>
            Nombre de projets: '.$row2[0].'
          </div></a>');
        }
        echo("</center>");
      }
      /* si un type de projet est sélectionné */
      else {
        $sql = 'SELECT * FROM `Type` WHERE id_type='.$_GET['type'];
        $results = $bdd->query($sql);
        $row = $results->fetch();
        echo("<h2> Projets ".$row["nom"]."</h2>");
        echo("<a class='bouton' href='./'> <i class='fa fa-arrow-left' aria-hidden='true'></i> Retour </a><br><br>");

        $sql = 'SELECT * FROM `Projets` WHERE id_type='.$_GET['type'];
        $results = $bdd->query($sql);
        $compteur = 0;
        while($row2 = $results->fetch()){
              $compteur++;
              $sql2 = 'SELECT * FROM `article` WHERE id_projet='.$row2['id_projet'];
              $results2 = $bdd->query($sql2);
              $row3 = $results2->fetch();
              // il faut integrer la requete au dessus dans le echo en dessous, lien <a> si article
              // existant, sinon on affiche "pas d'article disponible", plus une alerte javascript
              if($row3 != null){
                echo('<a style="text-decoration: none;" href="'.$row3[2].'">');
              }
              echo('<div class="project-line" style="background-color: '.$row["Couleur"].'">
              <h1> '.$row2["nom"].' </h1>
              <table class="project-line_statut">
                <tr><td> <strong> statut: </strong> </td><td> '.$row2["statut"].' </td></tr>
                <tr><td> <strong> version: </strong> </td><td> '.$row2["version"].' </td></tr>
              </table>
              <span class="separator"></span>
              <span class="project-line_description"> '.$row2["description"].' </span>');
              if($row3 == null){
                echo('<span style="font-size:17px; font-weight:bold;"><br/><br/><center><i class="far fa-file-excel"></i> &nbsp; Aucun article disponible</center></span>');
              } else {
                echo('<span style="font-size:17px; font-weight:bold;"><br/><br/><center><i class="far fa-file-alt"></i> &nbsp; Article disponible (cliquez pour voir)</center></span>');
              }
              echo('</div>');
              if($row3 != null){
                echo('</a>');
              }
          }
         if($compteur == 0){
          echo("<center><p> Aucun projet disponible</p></center>");
        }

      }
   ?>
  </div>
  <footer>
    <div id="footer">
      <?php include_once("/var/www/wgaizq/www/_utils/includes/footer.php"); ?>
    </div>
  </footer>
</body>
</html>
