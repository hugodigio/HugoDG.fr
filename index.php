<html>
<head>
  <?php
    $page = "CV";
    include_once("/var/www/wgaizq/www/_utils/includes/head.php");
  ?>
</head>
<body>
  <header id="header">
  <?php include_once("/var/www/wgaizq/www/_utils/includes/header.php"); ?>
  </header>
  <div class="informations">
    <img src="_utils\ressources\images\HugoDG_CV_photo.jpg"></img>
    <span class="prenom"> Hugo </span>
    <span class="nom"> Di Giovanni </span>
    <a href="_utils\ressources\fichiers\CV.pdf"> <i class="fas fa-file-pdf"></i> Télécharge au Format PDF <br/> (moins complet) </a>
    <h1> Informations </h1>
    <span class="infos_zone tel"> <i class="fas fa-phone"></i> <a href="tel:06.32.02.72.82">06 32 02 72 82</a> </span>
    <span class="infos_zone mail"> <i class="fas fa-envelope"></i> <a href="mailto:hugodigiovanni@gmail.com"> hugodigiovanni@gmail.com </a> </span>
    <span class="infos_zone situation"> <i class="fas fa-users"></i> Celibataire </span>
    <span class="infos_zone birth"> <i class="fas fa-birthday-cake"></i> 21 ans, 14 septembre 1996 </span>
    <span class="infos_zone localisation"> <i class="fas fa-map-marker"></i> Le logis neuf, Allauch France </span>
    <h1> Mes Hobbies </h1>
    <ul class='hobbies_zone'>
      <li> Jeux Vidéo </li>
      <li> Cinéma <br/> <span class="tiny_text"> Science-fiction (Star Wars, Star Trek, Marvel CU)</li>
      <li> Nouvelles technologiques </li>
      <li> Projets de développements <br/>(<a href="/projets" class="hobbies_zone"> Cliquez-ici </a>)</li>
    </ul>
  </div>
  <div class="contenu_CV">
    <h1> Etudiant <strong> ingénieur en informatique </strong> </h1>
    <h2> <i class="fas fa-briefcase fa-lg"></i> Expériences </h2>
    <div class="contenu_section">
      <ul id="experiences">
        <li>
          <span class="date"> 2018 : </span> <span class="intitule"> Stage d'école d'ingénieur en réalité virtuelle (Durée: 2 mois) </span>
          <span class="tiny_description"> Zapata Racing </span> </li>
          <p> Stage de conception et de réalisation d’un environnement 3D en réalité virtuelle, réalisé à l’aide du moteur <strong>Unreal Engine 4</strong>,
          dans le but de pouvoirconsulter et intéragir avec des produits de l’entreprise Zapata,tel que le Flyboard Air. </p>
        </li>
        <li>
          <span class="date"> 2017 : </span> <span class="intitule"> Stage d'école d'ingénieur au Service Informatique du Campus de Luminy (Durée: 1 mois) </span>
          <span class="tiny_description"> DOSI, Aix-Marseille Université </span> </li>
          <p> Mise à jour et corrections d’un logiciel libre de droits (qoq-cot). Correction de la base
          de données ainsi que de calculs réalisés en PHP permettant de générer des
          graphiques présentés à l’utilisateur. Ces graphiques effectuaient des approximations
          trop larges auparavant. </p>
        </li>
        <li>
          <span class="date"> 2016 : </span> <span class="intitule"> Stage de DUT au Service Informatique du Campus de Luminy (Durée: 2 mois) </span>
          <span class="tiny_description"> DOSI, Aix-Marseille Université </span> </li>
          <p> Développement d’un site Web PHP afin de gérer la distribution des licences de
          logiciels pour les ordinateurs de campus. Etablissement d’une base de données qui
          recense tous les logiciels du campus avec un lot d’informations les concernant, ainsi
          qu’une interface graphique dynamique en PHP permettant de libérer des licences
          pour des utilisateurs qui en ont impérativement besoin (pour un examen ou un cours) </p>
        </li>
        <li>
          <span class="date"> 2017 <i class="fas fa-arrow-left"></i> 2014 : </span> <span class="intitule"> Animateur en centre aéré l'été </span>
          <span class="tiny_description"> Diplomé du BAFA </span> </li>
          <p> Animateur durant les vacances d'été dans le centre aéré de la ville d'ALLAUCH </p>
        </li>
      </ul>
    </div>

    <h2> <i class="fas fa-chart-bar fa-lg"></i> Compétences </h2>
    <div class="contenu_section">
      <div class="progress">
        <h3> Programmation / logiciels</h3>
        <ul>
          <li> Java </li>
          <li> Android </li>
          <li> C </li>
          <li> C++ </li>
          <li> PHP </li>
          <li> HTML/CSS </li>
          <li> Python </li>
          <li> Unity 3D </li>
          <li> Unreal Engine </li>
          <li> OpenGL </li>
        </ul>
      </div>
      <div class="progress">
        <h3> Administration système </h3>
        <ul>
          <li> Windows </li>
          <li> Linux </li>
          <li> VMs </li>
        </ul>
      </div>
      <div class="progress">
        <h3> Réseau </h3>
        <ul>
          <li> Configuration </li>
          <li> Administration </li>
          <li> Conception </li>
          <li> Serveur Web </li>
        </ul>
      </div>
      <div class="progress">
        <h3> Anglais <h3>
        <table>
          <tr>
            <td> Lu, écrit et parlé </td>
            <td> Score TOEIC: 835 </td>
          </tr>
        </table>
      </div>
      <div class="progress" style="padding-bottom: 10px;">
        <h3> Bureautique <h3>
        <ul>
          <li> suite MS OFFICE </li>
        </ul>
      </div>
    </div>
    <h2> <i class="fas fa-graduation-cap fa-lg"></i> Formation </h2>
    <div class="contenu_section">
      <ul id="formation">
        <li>
          <span class="date"> Aujourd'hui <i class="fas fa-arrow-left"></i> 2016 :</span> <span class="intitule"> école d'ingénieur Polytech informatique </span>
          <span class="tiny_description"> Marseille </span>
        </li>
        <li>
          <span class="date"> 2016 <i class="fas fa-arrow-left"></i> 2014 :</span> <span class="intitule"> IUT Aix-Marseille Université </span>
          <span class="tiny_description"> DUT Réseaux et Télécommunications </span>
        </li>
        <li>
          <span class="date"> 2014 <i class="fas fa-arrow-left"></i> 2011 :</span> <span class="intitule"> BAC S spécialité SI - Option ISN (Informatique et Sciences du Numérique) </span>
          <span class="tiny_description"> Lycée Antonin Artaud </span>
        </li>
      <ul>
    </div>
  </div>
  <footer>
    <div id="footer">
      <?php include_once("/var/www/wgaizq/www/_utils/includes/footer.php"); ?>
    </div>
  </footer>
</body>
</html>
