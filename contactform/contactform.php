<?php 

$nombre = $_POST['name'];
$mail = $_POST['email'];
$telefono = $_POST['subject'];
$empresa = $_POST['message'];

$header = 'from: '.$mail."\r\n";
$header .= "X-Mailer:PHP/".phpversion()."\r\n";
$header .= "Mime-Version:1.0 \r\n";
$header .= "content-Type:text/plain";

$message = "este message fue enviado por: ".$name."\r\n";
$message .= "Su e-mail es: ".$mail."\r\n";
$message .= "Telefono: ".$subject."\r\n";
$message .= "message: ".$_POST['message']."\r\n";
$message .= "enviado el: ".date('d/m/Y',time());


$para = 'agencia@futbolbridge.com';
$asunto = 'message de mi web';

if(mail($para,$asunto,utf8_decode($message),$header))
echo "<script type='text/javascript'>alert('Tu message ha sido enviado exitosamente');</script>";



 ?>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  
  // Aquí puedes agregar la lógica para guardar el correo electrónico en tu base de datos o realizar otras acciones necesarias.
  
  // Ejemplo de respuesta JSON para indicar que la suscripción fue exitosa.
  $response = array(
    'success' => true,
    'message' => '¡Gracias por suscribirte!'
  );
  
  // Devuelve la respuesta en formato JSON.
  header('Content-Type: application/json');
  echo json_encode($response);
  exit;
}
?>