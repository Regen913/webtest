<?php
echo "<pre>";
if ($_POST) { 
	echo ("ФИО: " . $_POST["fio"] . "</br>")   ; 
	echo ("Марка смартфона: " . $_POST["smartphone"] . "</br>") ;
	echo ("E-mail: " . $_POST["inputEmail"] . "</br>") ;
	echo ("Адрес: " . $_POST["postalAddress"] . "</br>")   ;
	echo ("Цена: " . $_POST["Var"] . "</br>")   ;
	echo ("Магазин: " . $_POST["shop"] . "</br>")   ;
	echo ("Согласие на обработку персональных данных: " . $_POST["agree"] . "</br>")   ;
	}
echo "</pre>";
?>