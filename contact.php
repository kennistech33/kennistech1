<?php
if(isset($_POST['submit'])){
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$subject = trim($_POST['subject']);
	$message = trim($_POST['message']);

	$myMail= "support@kennistech.tk";
	$header = "from:". $email;
// compose message 
		$txt="Name :".$name."\n".
				"Email from :".$email."\n".
				"subject:".$subject."\n\n".
				"Wrote the following message :".$message;
				
	mail($myMail, $subject,$txt , $header); 
	header("location:index.html?email sent!");
	
}
?>