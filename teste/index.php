<?php

require __DIR__ . '/../lib_ext/autoload.php';


use Notification\Email;


$email = new Email(2, "mail.host.com","your@email.com","your-pass","smtp secure (ENCRYPTION_STARTTLS/ENCRYPTION_SMTPS)","port (587/465)","from@email.com","From Name");
$email-> sendEmail ("Subject","Content","reply@email.com","ReplayName","address@email.com", "Address Name");

var_dump($email);
