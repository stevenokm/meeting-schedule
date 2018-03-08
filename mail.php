<?php
$name=stripslashes($_POST["name"]);
$email=stripslashes($_POST["email"]);
$message=stripslashes($_POST["message"]);
$secret="6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe";
$response=$_POST["captcha"];

$verify=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}");
$captcha_success=json_decode($verify);
if ($captcha_success->success==false) {
    //This user was not verified by recaptcha.
    
}
else if ($captcha_success->success==true) {
    //This user is verified by recaptcha
    
}
