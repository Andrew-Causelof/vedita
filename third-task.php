<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Третье задание");
?>


<?$APPLICATION->IncludeComponent(
	"custom:show.price",
	".default",
	Array(
		"IBLOCK_ID" => 8
	)
);?>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>