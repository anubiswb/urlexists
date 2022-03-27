<?php 

error_reporting(0);
ini_set('display_errors', 0);

function url_exists($url){
    $resURL = curl_init(); 
    curl_setopt($resURL, CURLOPT_URL, $url); 
    curl_setopt($resURL, CURLOPT_BINARYTRANSFER, 1); 
    curl_setopt($resURL, CURLOPT_HEADERFUNCTION, 'curlHeaderCallback'); 
    curl_setopt($resURL, CURLOPT_FAILONERROR, 1); 
    curl_exec ($resURL); 
    $intReturnCode = curl_getinfo($resURL, CURLINFO_HTTP_CODE); 
    curl_close ($resURL); 
    if ($intReturnCode != 200 && $intReturnCode != 302 && $intReturnCode != 304)
     { return 0; } else return 1;
}


echo url_exists('https://www.anubs-web.com');

echo 'fff';


?>
