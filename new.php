<?php
//get the  form data

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "wilsonsharron9@gmail.com";
$txt = "Name = ".$name ."\r\n Email = ". $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" . "CC: somebodyelse@example.com";

$email($email!=NULL){
    mail($to, $subject,$txt,$headers)
}

// redirect

header("Location:index.php");
?>