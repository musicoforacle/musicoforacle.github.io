<?php $name = $_POST['name'];
$email = $_POST['email'];
$formcontent="From: $name \n Message: $message";
$recipient = "musicoforacle@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>