
<html>
<head>
	<title></title>
</head>
<body>

<? 
$from = $_POST['form']['email']; 
$nombre = $_POST['form']['name'];
$phone = $_POST['form']['phone'];
$tickets = $_POST['form']['tickets'];
$rdate = $_POST['form']['rdate'];
echo 'En esto estamos bien '.$nombre.' telefono '.$phone;
print_r($_POST);

$subject = 'Reservas'; 
$message = 'De: ' . $nombre . "\n". 'Telefono:' . $_POST['phone']. "\n". 'En la fecha:' . $_POST['rdate']. ' Entradas:' . $_POST['tickets']; 
$headers = "De: ". $from . "\n";
mail ('jonathan.araul@gmail.com', $subject, $message, $headers); 
header('Location: thanks.html'); 
?>
<h1>Intento enviar el correo revisa a ver</h1>
</body>
</html>