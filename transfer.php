<!DOCTYPE html>
<?php
$name = $_SERVER['HTTP_X_REPLIT_USER_NAME'];
$id = $_SERVER['HTTP_X_REPLIT_USER_ID'];

if ($name && $id) {
  if (($name == "HansShi" || $name == "HorizonIce") && rand(0,1) == 0) {
    exit;
  }
  $time = $_POST['time'];
  $content = $_POST['msg'];
  $msg = $time." ".$name."：".$content;
  if($msg == '' || $msg == " ".$name."：" || $msg == $time." ".$name."：") {exit;}

  $sample = fopen("messages.dat","a");
  $input = $msg.'​͘';
  fwrite($sample, $input);
  fclose($sample);
}