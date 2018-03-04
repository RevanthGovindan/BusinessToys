<?php
require_once 'PHPMailer/src/PHPMailer.php';

// Using PHPMailer Namespace as specified PHPMailer developers
use PHPMailer\PHPMailer\PHPMailer;
function send_mail() {
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = 'revanthkumarwap@gmail.com';
$mail->Password = 'nwckzblanduycphk';
$mail->setFrom('revanthkumarwap@gmail.com','revanth');
$mail->Subject = 'Businesstoys form';
$mail->Body=("You have got a new entry in the database");
$mail->addAddress('revanthji14@gmail.com');
$mail->send();
if (!$mail->send()) {
$error = "Mailer Error: " . $mail->ErrorInfo;
echo '<p id="para">'.$error.'</p>';
}
else {
echo '<p id="para">Message sent!</p>';
}
}