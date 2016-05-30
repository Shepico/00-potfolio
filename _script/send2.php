<?php 
// если была нажата кнопка "Отправить" 
if($_POST['submit']) {
        $title = substr(htmlspecialchars(trim($_POST['fio'])), 0, 1000); 
        $mess =  substr(htmlspecialchars(trim($_POST['mess'])), 0, 1000000); 
        // $to - кому отправляем 
        $to = 'tols78@inbox.ru'; 
        // $from - от кого 
        $from=$_POST['fmail']); 
        // функция, которая отправляет наше письмо
        mail($to, $title, $mess, 'From:'.$from); 
        echo 'Спасибо! Ваше письмо отправлено.'; 
} 
?>