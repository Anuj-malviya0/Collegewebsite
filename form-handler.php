<?php
$name = $_POST['name'];
$visitor_email = $_post['email'];
$subject = $_post['subject'];
$message = $_post['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
				"User Email: $visitor_email.\n".
				"Subject: $subject.\n".
				"user Message: $message .\n";

$to = 'paclaniyar@gmail.com';

$headers = "Form: $email_form\r\n";

$headers = "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")


