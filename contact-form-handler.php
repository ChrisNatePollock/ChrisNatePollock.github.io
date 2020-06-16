<?php
    if(isset($_POST['submit'])){
        $user = $_POST['user'];
        $mailFrom = $_POST['email'];
        $enquiry = $_POST['enquiry'];
        $message = $_POST['message'];

        $subject = "BI Reel - ".$enquiry.": Please follow up!";
        $mailTo = "christopherpollock@bireel.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have recieved an email from ".$name.".\n\n".$message;

        mail($mailTo, $subject, $message, $headers);
    }
?>