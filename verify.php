<?php
$access_token = '4DrazTVx+1b3JyZjvoRsiwFwU/RJOLP4xjSmgRJESoVNIJeLo4OiEE+4HQrXNFQ2uxBBdh85l/DSFEVLeIwZtNXaI5zvFL7BfuSL0Fie3V7o/uOXi+mpfAP/8rlQlpjbi50w6pD1vTdBEyndEZ+eEAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
