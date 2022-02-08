<?php
//POST INPUTS
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = "Content-Type: text/plain;charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

//FORM DATA
$corpo = "Contact form page\r\n";
$corpo .= "Name: " . $name . "\r\n";
$corpo .= "Email: " . $email . "\r\n";
$corpo .= "Message: " . $message . "\r\n";

//DESTINATION
$email_to = 'contact@bigtravel.com';

//SENDING MAIL
$status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $corpo, $headers);
if ($status):
  //SUCCESS
  header('location:index.php?status=success');
else:
  //ERROR
  header('location:index.php?status=error');
endif;
?>
