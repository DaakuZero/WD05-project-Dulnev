<?php

$details=R::find('about',1);


$aboutName = $details[1]['name'];
$aboutDescription = $details[1]['description'];

$title="Главная";
$content="Содержимое";

ob_start();
include ROOT . "templates/main/main.tpl";
$content = ob_get_contents();
ob_end_clean();


include ROOT . "templates/_parts/_header.tpl";
include ROOT . "templates/template.tpl";
include ROOT . "templates/_parts/_footer.tpl";


?>