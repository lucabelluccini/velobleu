<?php
header('Content-Type: application/json');
$url = 'http://www.velo-vision.com/nice/oybike/stands.nsf/getsite?site=nice&format=json';
$json = file_get_contents($url);
echo $json;
?>
