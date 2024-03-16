<?php
include("db.php");

  
   $pname=  $_POST["pname"];
   $mname=  $_POST["mname"];
   $username=  $_POST["username"];
   $email=  $_POST["email"];
   $phone = $_POST["phone"];
   $paddress= $_POST["paddress"];
   $daddress= $_POST["daddress"];
   $problem= $_POST["problem"];
   $myuid = uniqid('Ktech');
   $query= "INSERT INTO repair(uniqid,phone_name,model_name,user_name,email,phone,pick_address,delivery_address,problem) VALUES (' $myuid','$pname','$mname','$username','$email',' $phone','$paddress','$daddress','$problem')";
   $result = mysqli_query($db,$query);
   
    if (!$result) {
       echo "something went wrong";
    }else {
      $query = "SELECT *FROM repair";
      $result= mysqli_query($db,$query);
      $row= mysqli_fetch_array($result);
       header("location: result.php?msg=' $myuid'");
    }
   
   
?>