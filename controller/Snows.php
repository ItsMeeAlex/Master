<?php

require 'model/snowsManager.php';

function snows(){
    $snows = getSnows();
    require 'view/snows.php';
}

