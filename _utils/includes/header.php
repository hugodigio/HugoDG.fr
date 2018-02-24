<a href="http://beta.hugodg.fr/" id="title"> <strong>H</strong>ugo <img src="/_utils/ressources/logos/D-logo_dark.png"/>i Giovanni</a>
  <div id="toggle-menu">
  		<a onclick="togglemenu()" onblur="togglemenu()">Menu<i class="fa fa-bars fa-2x" aria-hidden="true"></i></i></a>
  </div>
<center>
  <nav id="slide">
    <ul id="menu_PC" style="">
      <li><a href="/" <?php if($page == "CV") echo('id="menuactive"')?>><i class="fa fa-address-card" aria-hidden="true"></i> C.V</a></li>
  		<li><a href="/projets" <?php if($page == "projets") echo('id="menuactive"')?>><i class="fa fa-cog" aria-hidden="true"></i> Mes Projets</a></li>
  		<li><a href="/contact" <?php if($page == "contact") echo('id="menuactive"')?>><i class="fa fa-comments" aria-hidden="true"></i> Contact </a></li>
    </ul>
  </nav>
</center>
