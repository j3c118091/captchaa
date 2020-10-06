<?php
require 'function.php';
$easy = new EasyShort;

$captcha = $_POST['g-recaptcha-response'];
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$easy->configini('secret_key')."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
// print_r($response);
$response = json_decode($response);
if($response->success == true){
  die('Success');
}else{
  die('Failed');
}
