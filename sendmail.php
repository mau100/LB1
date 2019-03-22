<?php

/* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name = $_GET['emailname'];
$subject = $_GET['betreff'];
$content = $_GET['text'];
require_once 'vendor/autoload.php';


$mail = new PHPMailer;
try{
 $mail->setFrom($name, 'Kundenanfrage');
   $mail->addAddress('avocadoguacamole11@gmail.com');
   $mail->Subject = $subject;
   $mail->Body = $content;
   /* SMTP parameters. */

   /* Tells PHPMailer to use SMTP. */
   $mail->isSMTP();

   /* SMTP server address. */
   $mail->Host = 'smtp.gmail.com';

   /* Use SMTP authentication. */
   $mail->SMTPAuth = true;

   /* Set the encryption system. */
   $mail->SMTPSecure = 'tls';

   /* SMTP authentication username. */
   $mail->Username = 'avocadoguacamole11@gmail.com';

   /* SMTP authentication password. */
   $mail->Password = 'avocguac';

   /* Set the SMTP port. */
   $mail->Port = 587;

   /* Finally send the mail. */
   $mail->send();

}
catch (Exception $e)
{
   echo $e->errorMessage();
}


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Email send </title>
</head>
<body>
<h1> Email versendet </h1>
</body>
</html>

