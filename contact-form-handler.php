<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_form = 'leonardmorel@outlook.fr';

    $email_subject = "New form submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $email.\n".
                    "User message: $message.\n";


    $to = "leonardmorel@outlook.fr";
    $headers = "From: $email \r\n";
    $headers .= "Reply-to: $email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");

    