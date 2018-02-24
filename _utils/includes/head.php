<title> Hugo Di Giovanni - WebSite</title>
<!-- meta données pour le référencement facebook -->
<meta property= "og:url" content= "http://beta.hugodg.fr"/>
<meta property= "og:image" content= "http://beta.hugodg.fr/_utils/ressources/logos/webicon_DiGioSoftware.jpg"/>
<meta property= "og:description " content= "Site Web de Hugo DI GIOVANNI. Ce site présente son CV de manière intéractive ainsi que ses projets et des moyens pour le contacter"/>
<meta property= "og:site_name " content= "Hugo Di Giovanni"/>
<meta property= "fb:app_id" content="802769699908718"/>
<!-- -->
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/ico" href="http://beta.hugodg.fr/_utils/ressources/logos/webicon_DiGioSoftware.jpg"/>
<meta name="description" content="Site Web de Hugo DI GIOVANNI. Vous trouverez sur ce site mon CV, mes projets (avec présentation), ainsi qu'une section pour me contacter par mail ou par mes réseaux sociaux professionnel.">
<link href="/_utils/css/main.css" rel="stylesheet" id="css">
<?php
  if(isset($page)){
    switch($page){
      case "CV":
      echo('<link href="/_utils/css/cv.css" rel="stylesheet" id="css">');
        break;
      case "Projets":
        echo('<link href="/_utils/css/projets.css" rel="stylesheet" id="css">');
        break;
      case "Contact":
        echo('<link href="/_utils/css/contact.css" rel="stylesheet" id="css">');
        break;
    }
  }
?>
<!-- la librairie "font-awesome" permet l'utilisation d'icones libre de droits avec des balises <i> -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--permet de changer la couleur du navigateur sur certains appareils mobile (ex: chrome Android)-->
<meta name="theme-color" content="#2C3E50" id="theme" />
<script src="/_utils/javascript/Menu.js"></script>
