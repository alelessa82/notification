<?php

require __DIR__ . '/../lib_ext/autoload.php';


use Notification\Email;


$novoEmail = new Email('2', "email-ssl.com.br","auriquimica@auriquimica.com.br","@st3r1x@st3r1X","PHPMailer::ENCRYPTION_STARTTLS","587","auriquimica@auriquimica.com.br","Teste de email da notification");
$novoEmail->sendMail( "Assunto de Teste", "<p>Esse é um e-mail de <b>teste</b></p>", "backup@samech.inf.br", "Alexandre L. Oliveira", "ale.lessa82@gmail.com", "Alexandre Lessa");
var_dump($novoEmail);