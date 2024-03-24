<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Modify the email subject and message as needed
    $subject = 'Contact Form Submission';
    $message = "Email: $email";

    // Replace 'your.email@gmail.com' with your email address
    $to = 'dhayanandhs2003@gmail.com';

    if (mail($to, $subject, $message)) {
        echo 'Email sent successfully!';
    } else {
        echo 'Failed to send email. Please try again later.';
    }
} else {
    // Handle other request methods (e.g., GET)
    echo 'Invalid request method.';
}



