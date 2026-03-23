<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "yourmail@example.com";   // CHANGE THIS
    $subject = "Portfolio Contact from $name";
    $headers = "From: $email";

    if(mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message.";
    }
}
?>
