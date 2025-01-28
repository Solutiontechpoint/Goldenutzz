<?php

//Change this portion accrding to requirement

  $receiving_email_address = 'contact@solutiontechservices.com';

  $subject = 'Someone has intrest in your product';
  $message = 'Someone has intrest in your product - '.$_POST['productname'] . 
              '\n Email - '.$_POST['email'] . '\n Number - '.$_POST['contact'];

//-- Change this portion accrding to requirement

  $from = $_POST['email'];
  $headers = "" .
           "Reply-To:" . $from . "\r\n" .
           "From:" . $from . "\r\n" .
           "X-Mailer: PHP/" . phpversion();
  $headers .= 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
  echo mail($receiving_email_address, $subject, $message, $headers);
?>