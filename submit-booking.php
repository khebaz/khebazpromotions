<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "khebazpromotions@gmail.com"; // Replace with your email address
    $subject = "New Booking Request";
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $date = htmlspecialchars($_POST['date']);
    $details = htmlspecialchars($_POST['details']);

    $message = "Name: $name\nEmail: $email\nPhone: $phone\nDate: $date\n\nDetails:\n$details";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Booking request sent successfully.";
    } else {
        echo "Error sending booking request.";
    }
}
?>
