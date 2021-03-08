<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentDescription = array(
"NAME" => GetMessage("Вывод прайса в таблицу"),
"DESCRIPTION" => GetMessage("Выводим товар с ценами"),
"PATH" => array(
"ID" => "components",
"CHILD" => array(
"ID" => "showprice",
"NAME" => "Вывод прайса"
)
),
);