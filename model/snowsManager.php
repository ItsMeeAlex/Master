<?php

$snows = getSnows();
$i = 9;

function getSnows(){
    $snowsQuery = 'SELECT code, photo, brand, model, snowLength, dailyPrice, active, qtyAvailable FROM snows';
    require_once 'model/dbConnector.php';
    return executeQuerySelect($snowsQuery);
}