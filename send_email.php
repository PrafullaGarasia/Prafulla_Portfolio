<?php
if(isset($_POST['submit'])){
    $to = "prafullagarasia@gmail.com"; //  email address
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['msg'];
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $body = "<html><body>";
    $body .= "<h2>Contact Form Submission</h2>";
    $body .= "<p><strong>Name:</strong> $name</p>";
    $body .= "<p><strong>Email:</strong> $email</p>";
    $body .= "<p><strong>Message:</strong> $message</p>";
    $body .= "</body></html>";

    if(mail($to, $subject, $body, $headers)){
        echo "Thank you for contacting us!";
    } else{
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
