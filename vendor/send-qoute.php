<?php


ob_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
require 'autoload.php';


if(isset($_POST['quote'])){
    
    


$qoute_name=$_POST['qoute-name'];

$qoute_number=$_POST['qoute-number'];
$qoute_email=$_POST['qoute-email'];
$qoute_content=$_POST['qoute-county'];

if(!empty($qoute_name)){
    
    
    
        
        
        
        if(!empty($qoute_number)){
            
            
            
            if(!empty($qoute_email)){
                
                
                if(!empty($qoute_content)){
                    
                    
                    
                    
                    
                    
                    
                    
                    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'stmp.gmail.com';  // Specify main and backup SMTP serversmail.talentsongo.org mail.talentsongo.org
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'iamstrdeveloper@gmail.com';                 // SMTP username m.abdisatar@talentsongo.org
    $mail->Password = 'nadifa02';                           // SMTP password ZKLcEH%zE{0[
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;// TCP port to connect to
    
    
    $mail->setFrom($qoute_email,$qoute_name);
    
    
    $mail->addAddress("m.abdisatar@talentsongo.org");
$mail->addReplyTo($qoute_email, $qoute_name);
    
   
    //Recipients
   

    

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "qoutation";
    $mail->Body    = 
        
        
        
        
        
"<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Document</title>
</head>
<body>
    <p>message .'{$qoute_content}'.</p>
    <p> qoute number.'  $qoute_number'.</p>
    
</body>
</html>";
    $mail->AltBody = $qoute_content;

    $mail->send();
    header("location: ../index.php");
} catch (Exception $e) {
//    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    header("location: ../index.php");
}
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                }}}
    
    
    
    
    
}

}


else{
    
    
    echo "not pressed";
}





















?>

