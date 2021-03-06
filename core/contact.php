<?php

  if(!isset($_POST["email"]) || empty($_POST["email"]) || !preg_match('/^([a-zA-Z0-9 \._]*)@([a-zA-Z0-9]*).([a-z]*)?/', $_POST['email']) ||
     !isset($_POST["name"]) || empty($_POST["name"]) ||
     !isset($_POST["message"]) || empty($_POST["message"])) {
     echo json_encode(array("status" => false, "message" => "Error en el proceso de datos."));
     die;
  }

  $data = $_POST;

  $to      = 'contacto@lucegraphy.com.mx';
  $subject = 'Contacto - <' . $data['email'] . '>';
  $message = $data['message'];
  $headers = 'From: ' . $data['email'] .
      'Reply To: ' . $data['email'] .
      'X-Mailer: PHP/' . phpversion();

  if(mail($to, $subject, $message, $headers))
    echo json_encode(array("status" => true, "message" => "Su mensaje ha sido enviado. El equipo de soporte te contactará en breve."));
  else
    echo json_encode(array("status" => false, "message" => "Tu mensaje no pudo ser enviado. Intenta nuevamente más tarde."));

  die;

?>
