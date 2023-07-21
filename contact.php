<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $message = $_POST["Message"];

    $to = "sabinmhx@gmail.com"; // Your email address
    $headers = "From: $name <$email>\r\n"; // Include the sender's name and email
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Construct the message body with appropriate headers and content
    $mailBody = "<html><body>";
    $mailBody .= "<h2>Contact Form Submission</h2>";
    $mailBody .= "<p><strong>Name:</strong> $name</p>";
    $mailBody .= "<p><strong>Email:</strong> $email</p>";
    $mailBody .= "<p><strong>Message:</strong><br>$message</p>";
    $mailBody .= "</body></html>";


    // Send email
    if (mail($to, $mailBody, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message. Please try again later.";
    }
}
?>
