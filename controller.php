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
  
  
  $mail->From = "enquiry@cloudrest.in"; 
  $mail->FromName = "Cloudrest Enquiry Form";
  $mail->addAddress("hello@cloudrest.in", "Cloudrest");
  $mail->addCC("ceo@cloudrest.in");
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