<?php
$come = $_POST['come'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$food = $_POST['food'];
// alcohol
$not_alcohol = $_POST['not_alcohol'];
$champagne = $_POST['champagne'];
$Wine = $_POST['Wine'];
$Cocktails = $_POST['Cocktails'];
$Whiskey_cognac = $_POST['Whiskey_cognac'];
$Vodka = $_POST['Vodka'];
//
$singleSelect = $_POST['singleSelect'];
$description = $_POST['description'];


$come = htmlspecialchars($come);
$firstName = htmlspecialchars($firstName);
$lastName = htmlspecialchars($lastName);
$food = htmlspecialchars($food);
// alcohol
$not_alcohol = htmlspecialchars($not_alcohol);
$champagne = htmlspecialchars($champagne);
$Wine = htmlspecialchars($Wine);
$Cocktails = htmlspecialchars($Cocktails);
$Whiskey_cognac = htmlspecialchars($Whiskey_cognac);
$Vodka = htmlspecialchars($Vodka);
//
$singleSelect = htmlspecialchars($singleSelect);
$description = htmlspecialchars($description);


$come = urldecode($come);
$firstName = urldecode($firstName);
$lastName = urldecode($lastName);
$food = urldecode($food);
// alcohol
$not_alcohol = urldecode($not_alcohol);
$champagne = urldecode($champagne);
$Wine = urldecode($Wine);
$Cocktails = urldecode($Cocktails);
$Whiskey_cognac = urldecode($Whiskey_cognac);
$Vodka = urldecode($Vodka);
//
$singleSelect = urldecode($singleSelect);
$description = urldecode($description);


$come = trim($come);
$firstName = trim($firstName);
$lastName = trim($lastName);
$food = trim($food);
// alcohol
$not_alcohol = trim($not_alcohol);
$champagne = trim($champagne);
$Wine = trim($Wine);
$Cocktails = trim($Cocktails);
$Whiskey_cognac = trim($Whiskey_cognac);
$Vodka = trim($Vodka);
//
$singleSelect = trim($singleSelect);
$description = trim($description);

// echo $fifirstNameo;
// echo "<br>";
// echo $lastName;
// echo $not_alcohol 

if (mail("july_ss@mail.ru", "Ответ на приглашение", "Статус гостя: $come \n\n Имя: $firstName. Фамилия: $lastName \n
Предпочтения по еде: $food. \n
Предпочтения по алкоголю: \n
    Не буду пить алкоголь: $not_alcohol
    Шампанское: $champagne
    Вино: $Wine
    Коктейли: $Cocktails
    Виски/коньяк: $Whiskey_cognac
    Водка: $Vodka \n
+1: $singleSelect \n
Описание: $description  \n

    ","From: july.ss0206@gmail.com \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}
echo '<script language="JavaScript"> 
  window.location.href = "index.html"</script>';
?>