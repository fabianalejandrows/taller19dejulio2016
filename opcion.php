<?php
session_start();
$_SESSION["estado"]="0";
echo $_SESSION["estado"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link rel="stylesheet" type="text/css" href="estilos.css" />
</head>

<body>
<table width="600" border="1" align="center">
  <tr>
    <td colspan="3">
	<?php
	include ('banner.php');
	?>	</td>
  </tr>
  <tr>
    <td colspan="3"><?php
	include ('menu.php');
	?></td>
  </tr>
  <tr>
    <td width="100" height="183"><?php
	include ('publicidad.php');
	?></td>
    <td width="484" colspan="2"><form id="form1" name="form1" method="post" action="evaluar.php">
      <table width="474" border="0" bgcolor="cccccc" class="verdana">
        <tr>
          <td width="233"><div align="right">Pass:</div></td>
          <td width="231"><label>
            <input name="password" type="text" id="password" />
          </label></td>
        </tr>
        <tr>
          <td><div align="right">&iquest;Cu&aacute;l es el resultado de 1+1?</div></td>
          <td><label>
            <input name="pregunta" type="text" id="pregunta" />
          </label></td>
        </tr>
        <tr>
          <td colspan="2"><label>
            <div align="center">
              <input type="submit" name="Submit" value="Enviar" />
              </div>
          </label></td>
          </tr>
      </table>
        <p>&nbsp;</p>
        </form>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td height="38" colspan="3"><?php
	include ('footer.php');
	?></td>
  </tr>
</table>
</body>
</html>
