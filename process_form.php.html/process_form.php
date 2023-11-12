<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $services = $_POST["services"];

    $to = "es.velachery@gmail.com";
    $subject = "New Client Submission";
    $message = "Name: $name\nMobile Number: $mobile\nEmail: $email\nServices: $services";

    // Use additional headers if needed
    $headers = "From: $email";

    // Send email
    mail($to, $subject, $message, $headers);

    // Optionally, you can redirect the user to a thank you page
    header("Location: thank_you.html");
    exit();
}
?>
