<?php
$name=$_POST['name'];
$company=$_POST['company'];
$email=$_POST['email'];
$desc=$_POST['description'];

$name=htmlspecialchars($name);
$company=htmlspecialchars($company);
$email=htmlspecialchars($email);
$desc=htmlspecialchars($desc);

$name=urldecode($name);
$company=urldecode($company);
$email=urldecode($email);
$desc=urldecode($desc);

$name=trim($name);
$company=trim($company);
$email=trim($email);
$desc=trim($desc);

echo $name;
if (mail("liver.multimedia@gmail.com", "Заявка с сайта", "Имя:".$name.". E-mail: ".$email, "Описание:".$desc ,"From: liver.multimedia@gmail.com  \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>