<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');
require 'PHPMailer-master/PHPMailerAutoload.php';
//Create a new PHPMailer instance
function send_mqil_using_php_mailer($to_mail,$mail_content,$mail_subject) {
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
//$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 465;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = "ssl";
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "kkishorekumar8899@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "kingmaker07";
//Set who the message is to be sent from
$mail->setFrom('kkishorekumar8899@gmail.com', 'kishore');
//Set an alternative reply-to address
$mail->addReplyTo('kkishorekumar8899@gmail.com', 'kishore');
//Set who the message is to be sent to
$mail->addAddress($to_mail, 'John Doe');
//Set the subject line
$mail->Subject = $mail_subject;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
$mail->msgHTML($mail_content);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file

$file_to_attach = 'C:\xampp\htdocs\PHPMailer-master\examples\images\phpmailer_mini.png';

$mail->addAttachment($file_to_attach ,'phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
   echo "Message unsent!";
} else {
    echo "message sent";
	
}
}
?>