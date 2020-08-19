<?php

$recepient = "Feligrando@ya.ru";
$sitename = "КОМПЬЮТЕРНАЯ ПОМОЩЬ В МИНСКЕ";

$name = trim($_GET["name"]);
$phone = trim($_GET["phone"]);+

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nТелефон: $phone";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");