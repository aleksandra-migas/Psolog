<?php

$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "migas.aleksandra@gmail.com";
$body = "";

$body .= "From: ".$name. "\r\n";
$body .= "Email: ".$email. "\r\n";
$body .= "Message: ".$message. "\r\n";

mail($to,$subject,$body);

?>