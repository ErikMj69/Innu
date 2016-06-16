<?php

  if(!isset($_POST["email"]) || empty($_POST["email"]) || !preg_match('/^([a-zA-Z0-9 \._]*)@([a-zA-Z0-9]*).([a-z]*)?/', $_POST['email']) ||
     !isset($_POST["name"]) || empty($_POST["name"]) ||
     !isset($_POST["message"]) || empty($_POST["message"]))
     header("location: ../index.html");

  $data = $_POST;

  $to      = 'contacto@lucegraphy.com.mx';
  $subject = 'Contacto - <' . $data['email'] . '>';
  $message = $data['message'];
  $headers = 'From: ' . $data['email'] .
      'Reply To: ' . $data['email'] .
      'X-Mailer: PHP/' . phpversion();

  if(mail($to, $subject, $message, $headers))
    header("location: ../index.html");
  else
    header("location: ../index.html");

?>
