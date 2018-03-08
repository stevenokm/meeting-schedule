<?php
if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
  header('HTTP/1.0 403 Forbidden');
  die('You are not allowed to access this file.');     
}
header('Content-type: application/json');
$url="https://www.google.com/recaptcha/api/siteverify";
$response=$_POST['response'];
$secret = "6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe"; 
$params = array('secret'=> $secret, 'response'=> $response);
$json=file_get_contents( $url  . '?secret=' . $secret . '&response=' . $response);
echo $json; 
