<?php

if(substr($_SERVER['REQUEST_URI'],-1)=="/")
{
    $_SERVER['REQUEST_URI']=substr($_SERVER['REQUEST_URI'],0,strlen($_SERVER['REQUEST_URI'])-1);
}
$_SERVER['REQUEST_URI']=substr($_SERVER['REQUEST_URI'],1,strlen($_SERVER['REQUEST_URI']));
$url=explode("/",$_SERVER['REQUEST_URI']);

$channel = "YourChannelName";
$address = "https://yourdomain.com";

if($url[0]=="s" && strstr($url[1],$channel)){
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://telegram.me/s/'.$url[1],
    ));
    $source = curl_exec($curl);
    curl_close($curl);
    
    $source = str_replace("https://cdn", $address."/preview.php?url=https://cdn", $source);
    $source = str_replace("//telegram.org/img", $address."/preview.php?url=https://telegram.org/img", $source);
    $source = str_replace("//telegram.org/css", $address."/css", $source);
    $source = str_replace("//telegram.org/js", $address."/js", $source);
    $source = str_replace("https://t.me/".$channel, "tg://resolve?domain=".$channel, $source);
    $source = str_replace("//telegram.org/favicon.ico", $address."/favicon.ico", $source);
    echo $source;
}
else{
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://telegram.me/s/'.$channel,
    ));
    $source = curl_exec($curl);
    curl_close($curl);

    $source = str_replace("https://cdn", $address."/preview.php?url=https://cdn", $source);
    $source = str_replace("//telegram.org/img", $address."/preview.php?url=https://telegram.org/img", $source);
    $source = str_replace("//telegram.org/css", $address."/css", $source);
    $source = str_replace("//telegram.org/js", $address."/js", $source);
    $source = str_replace("https://t.me/".$channel, "tg://resolve?domain=".$channel, $source);
    $source = str_replace("//telegram.org/favicon.ico", $address."/favicon.ico", $source);
    echo $source;
}

?>
