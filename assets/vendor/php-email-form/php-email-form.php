<?php
// Replace with your receiving email address
// $to_email = 'lak5000@naver.com';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Get form data
    $name = $_GET['name'];
    $email = $_GET['email'];
    $subject = $_GET['subject'];
    $message = $_GET['message'];

    // Create email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Compose the email message
    $email_message = "
        <html>
        <head>
            <title>$subject</title>
        </head>
        <body>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong><br>$message</p>
        </body>
        </html>
    ";

    // Attempt to send the email
    if (mail($php_email_form, $subject, $email_message, $headers)) {
        echo 'success';
    } else {
        echo 'error';
    }
} else {
    // If the form is not submitted, return an error
    echo 'error';
}
?>
