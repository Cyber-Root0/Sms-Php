<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<center>
<h1>Envio de SMS - Atraves DO PHP</h1><br>	

<?php
require_once('sendsms.php');

if (!empty($_POST['number']) && !empty($_POST['message'])) {

$num=$_POST['number'];
$msg=$_POST['message'];

$response=EnviarSms($num,$msg);

	
}



function EnviarSms($numero,$message){
$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTYxMzgyNzYzMywiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjg3MzQ1LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.ULRzys4-8XcNqgGVqO2_gknDyA5VLFxptBaB48Df0Fw";

$phone_number =$numero;
$message = $message;
$deviceID = 123145;
$options = [];

$smsGateway = new SmsGateway($token);
$result = $smsGateway->sendMessageToNumber($phone_number, $message, $deviceID, $options);
return print_r($result); 
 
}



?>


<form action="" method="POST">
	<input type="text" name="number" placeholder="Digite o Numero"><br>
	<input type="text" name="message" placeholder="Digite a Mensagem"><br>
	<input type="submit" value="Enviar Mensagem">



</form>
</center>
</body>
</html>




