<?php
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 */
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addJs(SITE_DIR . "local/components/custom/show.price/js/script.js");
?>

<table class="price-grid">
<caption>Cписок товаров на сайте в виде таблицы/прайс-листа с ценами</caption>
  <tr>
    <th>№</th>
    <th>Наименование товара</th>
    <th>Цена руб.</th>
  </tr>

	<?php foreach($arResult as $key => $element): ?>
	<tr class = "price-grid__row">
		<td><?=$key + 1?></td>
		<td><?=$element['NAME']?></td> <td><?=$element['PRICE']?></td>
  	</tr>

	<?php endforeach;?>

</table>