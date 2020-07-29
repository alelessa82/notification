<?php

require __DIR__ . '/lib_ext/autoload.php';


use Notification\Email;


$novoEmail = new Email;
$novoEmail->sendMail( "Assunto de Teste", "<p>Esse é um e-mail de <b>teste</b></p>", "backup@samech.inf.br", "Alexandre L. Oliveira", "ale.lessa82@gmail.com", "Alexandre Lessa");
var_dump($novoEmail);