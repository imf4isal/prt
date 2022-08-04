<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "Easytutorial@gmail.com";

    $email_subject = "New Request";
    
    $email_body = "user name: $name.\n".
                    "user email: $visitor_email.\n". 
                    "user message: $message.\n";

    $to = "faisal_abdullah99@yahoo.com";
    
    $headers = "From: $email_from \r\n";

    $headers .= "Reply - To: $visitor_email \r\n"; 

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>