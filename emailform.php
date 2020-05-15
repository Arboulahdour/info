<?php
//    ini_set("sendmail_from", "ar.boulahdour@gmail.com");
    $to = "ar.boulahdour@outlook.com";
    $from = $_POST['email'];
    $subject = "This is subject";
    $message = $_POST['commentaires'];
    $header = "From: ".$email.".\n\n";

/*    $result = mail($to,$subject,$message,$header);

    if ($result == true){
        echo "Message sent successfuly...";

    }else{
        echo "Sorry, unable to send mail!";
    }
    */

    if (mail($to, $subject, $message, $header)) {
        echo "Message sent successfuly...";
}       else {
        echo "Sorry, unable to send mail!";
    }
?>
