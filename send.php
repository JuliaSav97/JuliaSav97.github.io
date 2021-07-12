<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

$firstName = htmlspecialchars($firstName);
$lastName = htmlspecialchars($lastName);

$firstName = urldecode($firstName);
$lastName = urldecode($lastName);

$firstName = trim($firstName);
$lastName = trim($lastName);

echo $fifirstNameo;
echo "<br>";
echo $lastName;
if (mail("july_ss@mail.ru", "Заявка с сайта", "ФИО:".$firstName.". E-mail: ".$lastName ,"From: july.ss0206@gmail.com \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>