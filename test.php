<?php
require 'PHPMailer/PHPMailerAutoload.php';
 
$mail = new PHPMailer;
 
$mail->isSMTP();                                    
$mail->Host = 'smtp.gmail.com'; 
$mail->SMTPAuth = true;                               
$mail->Username = 'intranet.lnmiit@gmail.com';                            
$mail->Password = 'information.lnmiit';                        
$mail->SMTPSecure = 'tls';                            
 
$mail->From = 'ronakimod@gmail.com';
$mail->FromName = 'Ronak modi';
$mail->addAddress('arushgyl@gmail.com', 'Raj Amal W'); 
 
$mail->addReplyTo('intranet.lnmiit@gmail.com', 'Raj Amal W');
 
$mail->WordWrap = 50;                                
$mail->isHTML(true);                                  
 
$mail->Subject = 'Using PHPMailer';
$mail->Body    = 'Hi Iam using PHPMailer library to sent SMT<b>P mail from localhost<b>';
 
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
 
echo 'Message has been sent';
?>