<?php

// Почта, на которую приходит письмо
$sendto   = "phoenix.bet000@gmail.com";

$userName = $_POST['name'];
$userMail = $_POST['email'];
$userText = $_POST['question'];

$subject  = "Получение информацию";

// Дополнительные заголовки
$headers .= "From: Отправитель <".$userMail.">\r\n";
$headers .= "Content-type: text/html; charset=utf-8 \r\n";

// Формирование тела письма
$msg  = "<html><body style='font-family: Arial, sans-serif; font-size: 2vw;'>";
$msg .= "<h2 style='font-weight: bold;'>Данные клиента:</h2>\r\n";
$msg .= "<p><strong>Имя:</strong> ".$userName."</p>\r\n";
$msg .= "<p><strong>E-mail:</strong> ".$userMail."</p>\r\n";
$msg .= "<p>".$userText."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
@mail($sendto, $subject, $msg, $headers)

?>
