<?php

# KCAPTCHA Конфигурационный файл

$alphabet = "0123456789abcdefghijklmnopqrstuvwxyz"; # не изменяя файлы шрифта!

# Символы для вывода CAPTCHA
//$allowed_symbols = "0123456789"; 
$allowed_symbols = "23456789"; #alphabet without similar symbols (o=0, 1=l, i=j, t=f)

# папка со шрифтами
$fontsdir = 'fonts';	

# CAPTCHA длина строки
//$length = mt_rand(3,5); # случайные 5 или 6
$length = 5;

# Размер CAPTCHA. Не изменять. Выбрано оптимально!
$width = 110;
$height = 50;

$fluctuation_amplitude = 5;

# повышение безопасности путем предотвращения пробелов между символами
$no_spaces = true;

$show_credits = false; 
$credits = 'script.landman.ru';

# Цвет изображения (RGB, 0-255)
//$foreground_color = array(0, 0, 0);
//$background_color = array(220, 230, 255);
$foreground_color = array(mt_rand(0,100), mt_rand(0,100), mt_rand(0,100));
$background_color = array(mt_rand(200,255), mt_rand(200,255), mt_rand(200,255));

# Качество картинки JPEG, чем больше, тем лучше качество, но больше размер файла
$jpeg_quality = 100;
?>