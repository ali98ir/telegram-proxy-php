<?php

$url = $_GET['url'];
$remoteImage = $url;

header("Content-type: {getimagesize($remoteImage)['mime']}");
readfile($remoteImage);

?>