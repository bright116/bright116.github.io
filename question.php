<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
<meta name="viewport" content="width=device-width" />
<title>Subscribe</title>
</head>

<body>

<?php
$email_to = "YOUR_EMAIL_HERE";
$name = $_POST["question-name"];
$email = $_POST["question-email"];
$message = $_POST["question-message"];
$subject = $_POST["question-subject"];
$text = "Name: $name<br>
         Email: $email<br> 
         Subject: $subject<br> 
         Details: $message";
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html; charset=utf-8" . "\r\n"; 
$headers .= "From: <$email>" . "\r\n";
mail($email_to, "Message from contact form", $text, $headers);
?>

</body>
</html>
