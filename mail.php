<?php
$frm_name  = "Bogdan";
$recepient = "bogmw@i.ua";
$sitename  = "�������� �����";
$subject   = "����� ������ � ����� \"$sitename\"";
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$tel = trim($_POST["tel"]);
$mess = trim($_POST["message"]);
$message = "
E-mail: $email <br>
���: $name <br>
�������: $tel <br>
$mess
";
mail($recepient, $subject, $message, "From: $frm_name <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"");