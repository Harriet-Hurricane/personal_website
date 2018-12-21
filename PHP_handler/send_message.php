<?php
    session_start();

    // PHPMailer initialization
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../vendor/phpmailer/phpmailer/src/Exception.php';
    require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require '../vendor/phpmailer/phpmailer/src/SMTP.php';
    
    $name=addslashes($_POST["name"]);
    $message=addslashes($_POST["message"]);
    $email=addslashes($_POST["email"]);
    $subject=addslashes($_POST["subject"]);

    // send confirmation Mail
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                 // 2 - Enables verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.hostinger.in';                    // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'noreply@yihanpeng.com';            // SMTP username
        $mail->Password = 'opensesame';                       // SMTP password
        $mail->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('noreply@yihanpeng.com', 'YihanPeng');
        $mail->addAddress('yihan.peng@rhsmith.umd.edu', 'YihanPeng');     // Add a recipient
        $mail->addReplyTo('yihan.peng@rhsmith.umd.edu', 'YihanPeng');

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = 'You have received a message from '.$name.' on your website.<br/> Email:'.$email.'<br/> Message: <br/>'.$message.'<br/>';

        $mail->send();
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    } 

    // Send manager a notification Mail
    try {                        
        //Recipients
        $mail->setFrom('noreply@yihanpeng.com', 'YihanPeng');
        $mail->addAddress($email, $name);     // Add a recipient
        $mail->addReplyTo('yihan.peng@rhsmith.umd.edu', 'YihanPeng');

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Message sent to Yihan Peng';
        $mail->Body    = 'Thank you for contacting me. I will get back to you soon';

        $mail->send();
    } catch (Exception $e) {
        //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }            
    header('Location: ../index.html');
    exit;        
           
?>