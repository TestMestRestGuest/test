<?php
    $name = $_POST['Name'];
    $visitor_email = $_POST['Email'];
    $message = $_POST['Message'];

    $email_form = 'emailsender189@gmail.com';
    $email_subject = 'New Form Submission';

    $email_body = "Username: $name /n".
                    "Email Address: $visitor_email /n".
                        "Message: $message";
    $to = 'nore64747@gmail.com';

    $headers = "From: $email_from /r/n";
    $headers .= "Reply-To: $visitor_email /r/n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: tuto.html");


?>  