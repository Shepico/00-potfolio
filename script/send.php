<?
if(empty($_POST['firsname']) or strlen($_POST['firsname']) < 5) { // если введено менее 5 символов, то ошибка
	$error1 = 'Имя?';
} else $error1 = NULL;

if(empty($_POST['lastname']) or strlen($_POST['lastname']) < 5) { // если введено менее 5 символов, то ошибка
    $error2 = 'Фамилия?';
} else $error2 = NULL;

if(empty($_POST['address']) or strlen($_POST['address']) < 20) { // если введено менее 20 символов, то ошибка
    $error3 = 'Адрес?';
} else $error3 = NULL;

if(empty($_POST['type']) or strlen($_POST['type']) < 10) { // если введено менее 10 символов, то ошибка
    $error4 = 'Показания?';
} else $error4 = NULL;

if(empty($_POST['comment']) or strlen($_POST['comment']) < 10) { // если введено менее 10 символов, то ошибка
	$error5 = 'Примечания?';
} else $error5 = NULL;

if(empty($error1) && empty($error2) && empty($error3) && empty($error4) && empty($error5)) {
        $date = date("Y-m-d H:i:s");
	$firsname = $_POST['firsname'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	$type = $_POST['type'];
	$comment = $_POST['comment'];
	//$to .= 'test@test.net' . ', 'test2@test.net' . ', '; тут можно указывать несколько ящиков через запятую
	$to .= 'test@test.net'; // это ящик на который будет приходить письмо
	$subject = 'Письмо с сайта '.$_SERVER['HTTP_HOST'].'';
	$message .= '
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html>
		<head>
			<title>'.$subject.'</title>
			<style media="screen" type="text/css">
			table {
			padding:5px;
			margin:5px;
			border:#E2E2E2 solid 2px;
			width:600px;
			text-align: center;
			}
			td {
			border:#E2E2E2 solid 1px;
			width:100px;
			padding:5px;
			margin:5px;
			text-align: center;
			color:#3E73C8;
			}
			body {
			margin: 0;
			padding: 6px;
			border: 0;
			background: #fff;
			text-align: center;
			}
			</style>
		</head>
		<body>
			<table>
			<tr>
				<td colspan="2">ФИО:</td>
				<td colspan="2">'.$firsname.$lastname'</td>
			</tr>
			<tr>
				<td colspan="2">Адрес:</td>
				<td colspan="2">'.$address.'</td>
			</tr>
			<tr>
				<td colspan="2">Показания:</td>
				<td colspan="2">'.$type.'</td>
			</tr>
			<tr>
				<td colspan="2">Примечания:</td>
				<td colspan="2">'.$comment.'</td>
			</tr>
			<tr>
				<td colspan="2">Дата отправки сообщения:</td>
				<td colspan="2"><div style="line-height: 30px;">'.$date.' г.</div></td>
			</tr>
			</table>
		</body>
	</html>';
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$headers .= 'To: <'.$email.'>' . "\r\n";
	$headers .= 'From: <order@'.$_SERVER['HTTP_HOST'].'>' . "\r\n";
	//$headers .= 'Cc: test@test.ru' . "\r\n"; это копия письма, может слаться на какой-то email
	//$headers .= 'Bcc: test@test.ru' . "\r\n"; это скрытая копия письма
	if (mail($to, $subject, $message, $headers)) {
		echo '<span class="true">Сообщение отправлено!</span>';
	} else echo '<span class="error">Ошибка!</span>';
} else {
	echo '
		<span class="error">'.$error1.'</span>
		<span class="error">'.$error2.'</span>
		<span class="error">'.$error3.'</span>
		<span class="error">'.$error4.'</span>';
}
?>