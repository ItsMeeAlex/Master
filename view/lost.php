<?php

//tampon de flux stockà en memoire
ob_start();
$title="RentASnow - perdu";
?>

<div class="span12" id="divMain">
    <h1>Oupssss... vous vous êtes perdus </h1>

    <a href="index.php?action=home">Retourner à l'accueil</a>
</div>


<?php
$content = ob_get_clean();
require "gabarit.php";