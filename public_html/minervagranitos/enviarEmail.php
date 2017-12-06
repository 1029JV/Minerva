<?php
header("Content-type: text/html; charset=utf-8");
ini_set('display_errors', 1);
error_reporting(E_ALL);
$From = $_POST["iptEmail"];
$To = "comercial@minervagranitos.com.br";
$Subject = $_POST["iptAssunto"];
$Subject = '=?UTF-8?B?' . base64_encode($Subject) . '?=';
$Nome = $_POST["iptNome"];
$Telefone = $_POST["iptTelefone"];
$Message = $_POST["txtMessage"];
$Headers = "From: =?utf-8?b?" . base64_encode($Nome) . "?= <" . $From . ">\r\n";
$Message = $Nome . " com o telefone: " . $Telefone . ", enviou a seguinte mensagem, \n\n" . $Message;

if ($From == "") {
    echo "<script> alert('Email não foi enviado!'); window.location.replace('index.html');</script>";
} else {
    if (mail($To, $Subject, $Message, $Headers)) {
        echo "<script> alert('Email enviado com sucesso!'); window.location.replace('index.html');</script>";
    } else {
        echo "<script> alert('Email não foi enviado!'); window.location.replace('index.html');</script>";
    }
}
?>