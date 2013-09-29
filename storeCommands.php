<?php
////Written By Ken Yesh
//GitHub:
//
//Liablity Satement: I am not liable for anything that goes wrong use at your own risk
//
//
//Usage: As of right now you are free to use and modify 
      //this software however you please just give credit
      //where credit is due by leaving the comments above
//File the commands for the roomba will be stored in
$file=fopen("commands.txt","w");

fwrite($file,$_GET["rightSpeed1"]."\r\n");
fwrite($file,$_GET["rightSpeed2"]."\r\n");
fwrite($file,$_GET["leftSpeed1"]."\r\n");
fwrite($file,$_GET["leftSpeed2"]."\r\n");


fclose($file);

?>