<?php
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$to = ""; #Destination
$header = "From: $email";

if (mail($to, $subject, $message, $header)) {
    echo "Email sent";
}  else {
    echo "Sending failed";
} 
?>


