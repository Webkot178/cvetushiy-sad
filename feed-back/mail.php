<meta http-equiv='refresh' content='3; url=https://цветущийсад-тлт.рф'>
<meta charset="UTF-8" />
<?php

	if (isset($_POST['name']) && $_POST['name'] != "")//если существует атрибут NAME и он не пустой то создаем переменную для отправки сообщения
		$name = trim(strip_tags($_POST['name']));
	else die ("Не заполнено поле \"Имя\"");//если же атрибут пустой или не существует то завершаем выполнение скрипта и выдаем ошибку пользователю.

	if (isset($_POST['email']) && $_POST['email'] != "") //тут все точно так же как и в предыдушем случае
		$email = trim(strip_tags($_POST['email']));
	else die ("Не заполнено поле \"Email\"");

	if (isset($_POST['tel']) && $_POST['tel'] != "") 
		$tel = trim(strip_tags($_POST['tel']));
	else die ("Не заполнено поле \"Телефон\"");

	if (isset($_POST['message']) && $_POST['message'] != "") 
		$body = trim(strip_tags($_POST['message']));
	// else die ("Не заполнено поле \"Сообщение\"");

	$address = "cvet.sad-tlt@mail.ru";//адрес куда будет отсылаться сообщение для администратора
	$mes .= "Имя: $name \n";	//в этих строчках мы заполняем текст сообщения. С помощью опрератора .= мы просто дополняем текст в переменную
	$mes .= "E-mail: $email \n";
	$mes .= "Телефон: $tel \n";
	$mes .= "Текст: $body"; 
	$send .= mail ($address,$tel,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$tel");//собственно сам вызов функции отправки сообшения на сервере

	if ($send) //проверяем, отправилось ли сообщение
		echo "Сообщение отправлено успешно! Перейти на <a href='https://цветущийсад-тлт.рф'>цветущийсад-тлт.рф</a>, если вас не перенаправило вручную.";
	else 
		echo "Ошибка, сообщение не отправлено! Возможно, проблемы на сервере";
	
?>