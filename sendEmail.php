<?php
use PHPMailer\PHPMailer\PHPMailer;

require 'includes/vendor/autoload.php';
require 'includes/vendor/phpmailer/phpmailer/src/Exception.php';
require 'includes/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'includes/vendor/phpmailer/phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['sendEmail'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $telephone = $_POST['telephone'];
  $message = $_POST['message'];
  $doctoremail = $_POST['doctoremail'];

  echo "doctoremail = ". $doctoremail;

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'heavencarehospital2002@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'heaven@123'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('heavencarehospital2002@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress($doctoremail); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Telephone: $telephone <br>Message : $message</h3>";

    $mail->send();
    header("Location:contact.html");
  } catch (Exception $e){
    echo  '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>