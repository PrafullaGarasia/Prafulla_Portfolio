<?php
$to_email = "prafullagarasia@gmail.com";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $name = strip_tags($_POST["name"]);
  $email = strip_tags($_POST["email"]);
  $subject = strip_tags($_POST["subject"]);
  $message = strip_tags($_POST["msg"]);

  // Compose the email message
  $message_body = "Name: $name\nEmail: $email\n\n$message";

  // Set the email headers
  $headers = "From: $name <$email>\r\nReply-To: $email\r\n";

  // Send the email
  if (mail($to_email, $subject, $message_body, $headers)) {
    // Display a success message to the user
    echo "<p>Thank you for your message. We will get back to you as soon as possible.</p>";
  } else {
    // Display an error message to the user
    echo "<p>There was an error sending your message. Please try again later.</p>";
  }
}
?>
