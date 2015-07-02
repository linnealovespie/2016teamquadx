<?php 
    $name = $_POST["first_name"];
    $email = $_POST["email"];
    $to = "quadx6299@gmail.com";
    $subject = "AUTOMATED EMAIL FROM teamquadx.org, DO NOT REPLY.";
	$message = $email . "\n" . $_POST['textarea1'];

    if ($email != "" && $message != "") {
            mail($to, $subject, $message);
            header("Location: contact-form.php");
    }
    else {
		header("Location: http://teamquadx.org/failure.php");
	}
?> 