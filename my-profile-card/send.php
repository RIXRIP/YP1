<?php
$login=$_POST['login'];

$login=htmlspecialchars($login); //перобразование символов в сущности

$login=urldecode($login);//декодирование URL

$login=trim($login);//удаление пробельных символов с обеих сторон сообщения

//отправка данных на почту
if(mail("vlad.sherstobitov.00@inbox.ru",
"На твой телефон пришло новое сообщение, посмотри, вдруг там что то важное)",
"".$login."\n",
"From: no-replay@mydomain.ru")
) {
    echo('Письмо успешно отправлено!');
}

else{
    echo('Письмо не отправлено, проверьте ошибки!');
}

?>

<!doctype html>
<html>

<head>
    <title>Шерстобитов Владислав</title>
    <meta charset="utf-8">
    <link rel="stylesheet"  href="/css/back.css">
    <meta name="viewport" content="wight-device-widht" initial-scale=1>
</head>
<body>
 <form  action="index.php" method="post">
        <input class="btn-back" type="submit" value="Вернуться" />
    </form>
</body>
</html>