<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
//variables de sesion
session_start();

$_SESSION["estado"]="0";

$password=$_POST["password"];
$pregunta=$_POST["pregunta"];

if ($password=="1234")
{
	if ($pregunta=="2")//If anidado
	{
		$_SESSION["estado"]="1";
		$_SESSION["usuario"]="$password";
		header ("Location: wifi.php");
		
	}

	
}

if (($password!="1234")||($pregunta!="2"))//If anidado))
{
	$_SESSION["estado"]="0";
	header ("Location: index.php");
	
}




?>

</body>
</html>
