<?php
//Check Captcha
include("../captcha/imkeys.php");
for ($i=0; $i<5; $i++)
  if ($oCharList[substr($_POST["Itm_8_00_cpf"],$i,1)] != substr($_POST["Itm_8_00_cpv"], $i,1))
    die("Error: Javascript must be enabled!");

include "../res/imemail.inc.php";

//Form Data
$txtData .= "Nombre/Empresa: " . $_POST["Itm_8_00_1"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Nombre/Empresa:</b></td><td>" . $_POST["Itm_8_00_1"] . "</td></tr>";
$txtData .= "Población: " . $_POST["Itm_8_00_2"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Población:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_00_2"] . "</td></tr>";
$txtData .= "Teléfono: " . $_POST["Itm_8_00_3"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Teléfono:</b></td><td>" . $_POST["Itm_8_00_3"] . "</td></tr>";
$txtData .= "E-mail: " . $_POST["Itm_8_00_4"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>E-mail:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_00_4"] . "</td></tr>";
$txtData .= "Comentario: " . $_POST["Itm_8_00_5"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Comentario:</b></td><td>" . $_POST["Itm_8_00_5"] . "</td></tr>";

// Template
$htmHead = "<table width=\"90%\" border=\"0\" bgcolor=\"#FFFFFF\" cellpadding=\"4\" style=\"font: bold 12px Tahoma; color: #000000; border: 1px solid #BBBBBB;\">";
$htmFoot .= "</table>";

//Send email to owner
$txtMsg = "";
$htmMsg = $htmHead . "<tr><td></td></tr>" . $htmFoot;
$oEmail = new imEMail($_POST["Itm_8_00_4"],"mecanica_fuentes@hotmail.com","CONTACTO desde ventaweb-automoción Fuentes","iso-8859-1");
$oEmail->setText($txtMsg . "\r\n\r\n" . $txtData);
$oEmail->setHTML("<html><body bgcolor=\"#59337A\"><center>" . $htmMsg . "<br>" . $htmHead . $htmData . $htmFoot . "</center></body></html>");
$oEmail->send();

//Send email to user
$txtMsg = "Su mensaje ha sido recibido correctamente.\r\nEn breve nos pondremos en contacto con usted.\r\nGracias por utilizar los servicios de Ventaweb.es\r\n";
$htmMsg = $htmHead . "<tr><td>Su mensaje ha sido recibido correctamente.<br>En breve nos pondremos en contacto con usted.<br>Gracias por utilizar los servicios de Ventaweb.es<br></td></tr>" . $htmFoot;
$oEmail = new imEMail("mecanica_fuentes@hotmail.com",$_POST["Itm_8_00_4"],"Respuesta desde Ventaweb Automoción Fuentes","iso-8859-1");
$oEmail->setText($txtMsg . "\r\n\r\n" . $txtData);
$oEmail->setHTML("<html><body bgcolor=\"#59337A\"><center>" . $htmMsg . "<br>" . $htmHead . $htmData . $htmFoot . "</center></body></html>");
$oEmail->send();
@header("Location: ../index.html");
?>
