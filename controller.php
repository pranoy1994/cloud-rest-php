<?php
require_once "vendor/autoload.php";

$task = $_GET['task'];
if($task == "sendmail") {
  $mail = new PHPMailer\PHPMailer\PHPMailer();
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];

  $mail->IsSMTP();
  $mail->Host = "smtp.sendgrid.net";

  // optional
  // used only when SMTP requires authentication  
  $mail->SMTPAuth = true;
  $mail->Username = 'apikey';
  $mail->Password = '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';
  
  
  $mail->From = "hello@cloudrest.in"; 
  $mail->FromName = "Cloudrest Enquiry Form";
  //$mail->addAddress("hello@cloudrest.in", "Cloudrest");
  //$mail->addCC("ceo@cloudrest.in");
  $mail->addAddress("pranoybiswas1994@gmail.com", "Cloudrest");
  $mail->addBCC("pranoybiswas1994@gmail.com");
  $mail->addBCC("hatimd80@gmail.com");
  
  $mail->isHTML(true); 
  $mail->Subject = "Enquiry"; 
  $mail->Body = "NAME - <i><b>$name</b></i> <br> PHONE - <i><b>$phone</b></i> <br> EMAIL - <i><b>$email</b></i>";

  if(!$mail->send()) 
  {
    //echo "Mailer Error: " . $mail->ErrorInfo; 
    echo 0;
  } 
  else 
  { 
    //echo "Message has been sent successfully"; 
    echo 1;
  }

}
?>