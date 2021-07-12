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
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<title>Спасибо! Мы свяжемся с вами!</title>
<meta name="generator">
<script type="text/javascript">
setTimeout('location.replace("/index.html")', 3000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 
</head>
<body>
<h1>Спасибо! Мы свяжемся с вами!</h1>
</body>
</html>