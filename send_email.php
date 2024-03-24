<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "dhayanandhs2003@gmail.com"; // Your Gmail address
    $subject = "Contact Form Submission from $name";
    $body = "Email: $email\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
}

