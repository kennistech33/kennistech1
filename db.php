<?php
$db_host= "localhost:3306";
$db_username= "maxedtnx_repair";
$db_password= "336699,.%,Ke";
$db_name= "maxedtnx_kennistech";

$db= mysqli_connect($db_host,$db_username, $db_password,$db_name);
 if(!$db){
    die( "error in connection:". mysqli_connect_error());
 }



?>