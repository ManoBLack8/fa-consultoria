<?php
$mensagem = utf8_decode('Nome: '.$_POST['name']. "\r\n" .'Telefone: '.$_POST['number']."\r\n"."\r\n". 'Mensagem: '.$_POST['message']);
$cabecalhos ="From: ".$_POST['email'];
@mail("faconsultoriasegtrab@gmail.com", $_POST["subject"], $menssagem, $cabecalhos);
header("Location: index.php");