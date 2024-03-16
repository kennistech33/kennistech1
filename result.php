<?php
 include("header.php");
 include("db.php");



?>
<?php



$message= $_GET['msg'];
if ($message) {
  $query ="SELECT * FROM repair WHERE uniqid =$message";
   $result= mysqli_query($db,$query);

  $row = mysqli_fetch_array($result);
}else{
  header("location:index.php?msg=register ");
}

 


 







   


?>
 
       
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="outputcontainer">
        <div class="upperwrapper">
            <h3>Welcome to KennisTech </h3>
            <p>This is your Phone details below with tracking code</p>
        </div>
        <div class="lowwerwrapper">
            <h1>Tracking code <span><?php echo $row['uniqid'];?></span></h1>
          <p>Username: <span> <?php echo $row['user_name'];?></p></span>
          <p>Phone Name: <span><?php echo $row['phone_name'];?></p></span>
          <p>Phone Model: <span><?php echo $row['model_name'];?></p></span>
          <p>Phone Problem:<span><?php echo $row['problem'];?></p></span>
          <p>Email:  <span><?php echo $row['email'];?></p></span>
          <p>Phone Number:  <span><?php echo $row['phone'];?></p> </span>



      
<div class="note">
  <p><span>Note</span> The tracking code will  be use as a means of collection  </p>
  <p> A call will be receive from our customer care for the price shortly. Thank you!</p>
</div>
<button onclick= "window.print()">Print</button>
        </div>









</div>
   

     
      

</body>
</html>

<?php include("footer.php")?>  


