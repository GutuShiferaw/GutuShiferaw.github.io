<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comments = $_POST["comments"];
    
    // Set the recipient email address
    $to = "gutuwestbrook@gmail.com";

    // Subject of the email
    $subject = "Contact Form Submission from $name";

    // Email message
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Comments:\n$comments";

    // Additional headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your message. We will get back to you shortly.";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
} else {
    // If the form is not submitted via POST, redirect to the form page.
    header("Location: index.html");
}
?>
