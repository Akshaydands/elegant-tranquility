<?php
if (isset($_POST["phone_contact"], $_POST["email_contact"])) {
    
    $nam = $_POST['name_contact'];
    $ema = $_POST['phone_contact'];
    $mob = $_POST['email_contact'];
    $msg = $_POST['message_contact'];
    
    $from = "donotreply@doorsandshelters.com";
    $to = "leads.doorsandshelters@gmail.com, sales.doorsandshelters@gmail.com";
    $subject = "New Adword Lead for ELEGANT TRANQUILITY";
    $message = "Name: $nam\nEmail: $ema\nMobile: $mob\nMessage: $msg";
    $headers = "From:" . $from;

    if (mail($to, $subject, $message, $headers)) {
        header("Location: https://treandyhomes.com/tranquility-by-elegant/success.html");
    } else {
        header("Location: https://treandyhomes.com/tranquility-by-elegant/");
    }

    exit();
}

header("Location: https://treandyhomes.com/tranquility-by-elegant");
?>