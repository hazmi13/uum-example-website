<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'sadafaefae@fafa.com';

$email_subject = 'new form submission';

$email_body = "User name :$name.\n".
                "User Email :$visitor_email.\n".
                "Subject : $subject.\n".
                "User Message : $message.\n";

$to = 'hazmifitri3@gmail.com';

$headers = "From : $email_from \r\n";
$headers .= "Reply-to : $visitor_email\r\n"; 

mail($to,$email_body,$email_subject, $headers);

header("Location: contact.html");



?>