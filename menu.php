<link rel="stylesheet" href="style.css"> <!--Link til mit stylesheet-->

<nav> <!--Definerer mine a links, område omkring dem -->

    <ul> <!--Her starter min liste-->
            <li class="menu_style"><a href="information.php"<?php if ($curpage=='information.php') { echo 'class="active"';}?>>Information</a></li>
            <li class="menu_style"><a href="om.php"<?php if ($curpage=='om.php') { echo 'class="active"';}?>>Om</a></li>
            <li class="menu_style"><a href="kontakt.php"<?php if ($curpage=='kontakt.php') { echo 'class="active"';}?>>Kontakt</a></li>
    </ul>
</nav>


     
     
     
