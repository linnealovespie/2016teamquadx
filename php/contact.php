<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "quadx6299@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
if ($email != "" && $message != "") {
		mail($to, $subject, $message);
		header("Location: http://teamquadx.org/success.php");
	}
	else {
		header("Location: http://teamquadx.org/fail.php");
	}
?>