<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $to_email = "arzu.inbox@gmail.com"; // Replace this with your email address
  $subject = "Contact Form Submission";

  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Compose the email content
  $email_content = "Name: $name\n";
  $email_content .= "Email: $email\n";
  $email_content .= "Message:\n$message";

  // Send the email
  mail($to_email, $subject, $email_content);

  // Redirect back to the contact page after sending the email
  header("Location: index.html#contact");
}
?>
