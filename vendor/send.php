<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
require 'autoload.php';


if(isset($_POST['contact'])){
    
    


$contact_name=$_POST['contact-name'];
$contact_subject=$_POST['contact-subject'];
$contact_number=$_POST['contact-number'];
$contact_email=$_POST['contact-email'];
$contact_content=$_POST['contact-content'];

if(!empty($contact_name)){
    
    
    if(!empty($contact_subject)){
        
        
        
        if(!empty($contact_number)){
            
            
            
            if(!empty($contact_email)){
                
                
                if(!empty($contact_content)){
                    
                    
                    
                    
                    
                    
                    
                    
                    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.talentsongo.org';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'm.abdisatar@talentsongo.org';                 // SMTP username
    $mail->Password = 'ZKLcEH%zE{0[';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;// TCP port to connect to
    
    
    $mail->setFrom($contact_email,$contact_name);
    
    
    $mail->addAddress("asatar1994@gmail.com");
$mail->addReplyTo("asatar1994@gmail.com", "satar");
    
   
    //Recipients
   

    

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $contact_subject;
    $mail->Body    = 
        
        
        
        
        
"<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Document</title>
</head>
<body>
    <p>message .'{$contact_content}'.</p>
    <p> contact number.'  $contact_number'.</p>
    
</body>
</html>";
    $mail->AltBody = $contact_content;

    $mail->send();
//    echo 'Message has been sent';
    header("location: ../contact.php");
} catch (Exception $e) {
//    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    
    header("location: ../contact.php");
}
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                }}}}
    
    
    
    
    
}

}
























?>

