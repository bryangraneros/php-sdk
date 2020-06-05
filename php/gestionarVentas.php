<?php
require '../Meli/meli.php';
require '../configApp.php';

$meli = new Meli($appId, $secretKey);

$params = array();

$url = '/sites/' . $siteId;

$result = $meli->get($url, $params);
echo $url;
echo '<br><br>';
echo ]$params;
echo '<br><br>';
echo '<pre>';
print_r($result);
echo '</pre>';