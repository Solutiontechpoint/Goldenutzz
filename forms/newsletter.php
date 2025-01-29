<?php

//Change this portion accrding to requirement

  $receiving_email_address = 'sales@masterheattechnology.com';

  $subject = 'Someone has subscribed newsletter';
  $message = 'Someone has subscribed newsletter - '.
              '\n Email - '.$_POST['email'];

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
