<?php

  echo "Hello World";

  $to      = 'contacto@lucegraphy.com.mx';
  $subject = 'the subject';
  $message = 'hello';
  $headers = 'From: erik_mj69@hotmail.com' .
      'Reply To: erik_mj69@hotmail.com' .
      'X-Mailer: PHP/' . phpversion();

  if(mail($to, $subject, $message, $headers))
    echo "Sent";
  else
    echo "Not sent";

?>
