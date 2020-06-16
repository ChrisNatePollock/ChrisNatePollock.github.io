<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $enquiry = $_POST['enquiry'];
        $message = $_POST['message'];

        $subject = "BI Reel - ".$enquiry.": Please follow up!";
        $mailTo = "christopherpollock@bireel.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have recieved an email from ".$name.".\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.html");
    }
?>