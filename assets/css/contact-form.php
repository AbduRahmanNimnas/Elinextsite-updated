<?php

// Check if form submitted 
if($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Get form data
  $name = $_POST['inputname'];
  $email = $_POST['inputemail'];
  $phone = $_POST['inputphone'];
  $company = $_POST['inputcompany'];
  $subject = $_POST['inputsubject'];
  $message = $_POST['floatingtextarea'];

  // Recipient   
  $recipient = 'printerpal.info@gmail.com';

  // Set email headers
  $headers = "From: $name <$email>\r\nReply-To: $email";

  // Send email 
  if(mail($recipient, $subject, $message, $headers)) {
    
    // Email sent, show popup
    echo '<script>
           alert("Thank you, your message has been sent!");
           window.history.back();
         </script>';

  } else {

    // Error
    echo 'Oops, something went wrong. Please try again later.';

  }

}

?>