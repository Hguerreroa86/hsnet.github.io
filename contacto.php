<?php

$your_email = "info@hsnet.cl";

$headers= "From: ".$_POST['name']." <".$_POST['email'].">\r\n";
$headers.='Content-type: text/html; charset=utf-8';
mail($your_email, $_POST['subject'],  "
<html>
<head>
 <title>HSNET</title>
 <h3>Consulta mediante formulario web</h3>
</head>
<body>
	Detalle <br><br>
	Nombre : ".$_POST['name']."<br>
	Email : ".$_POST['email']."<br>
	Fono : ".$_POST['fono']."<br><br>
	Asunto : ".$_POST['subject']."<br>
	Mensaje : <br>".$_POST['message']."<br>
</body>
</html>" , $headers);
header("Location: ./contact_message.html");
?>
