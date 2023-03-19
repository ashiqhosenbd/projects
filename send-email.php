<?php
if(isset($_POST['email'])) {
    // Change these variables to match your own email address and subject line
    $to = "ashiqhossenbd@gmail.com";
    $subject = "New message from contact form";
    
    // Collect the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Create the email message
    $email_message = "Name: ".$name."\nEmail: ".$email."\nMessage: ".$message;
    
    // Send the email
    mail($to, $subject, $email_message);
    
    // Redirect the user to a thank you page
    header('Location: thank-you.html');
    exit();
}
?>
