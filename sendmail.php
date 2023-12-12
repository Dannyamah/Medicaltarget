<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $msg_subject = $_POST["msg_subject"];
    $message = $_POST["message"];

    // Compose the email message
    $to = "danielamah@gmail.com"; // Replace with the actual email address
    $subject = "New Contact Form Submission: $msg_subject";
    $headers = "From: $email";

    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone Number: $phone_number\n\n";
    $email_body .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $email_body, $headers);

    // You can add additional logic or responses here if needed
    echo "Email sent successfully!";
} else {
    // Handle the case when the form is not submitted properly
    echo "Invalid request.";
}
?>
