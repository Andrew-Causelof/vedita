<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 */

$this->setFrameMode(true);
$this->addExternalCss('/bitrix/css/main/bootstrap.css');
?>



<table>
<caption>Cписок товаров на сайте в виде таблицы/прайс-листа с ценами</caption>
  <tr>
    <th>№  </th>
    <th>Наименование товара</th>
    <th>Цена руб.</th>
  </tr>

	<?php foreach($arResult['ITEMS'] as $key => $element): ?>

	<?php $ar_res = CPrice::GetBasePrice($element["ID"], false, false); ?>
	<tr>
		<td><?=$key + 1?></td>
		<td><?=$element['NAME']?></td> <td><?=$ar_res['PRICE']?></td>
  	</tr>

	<?php endforeach;?>

</table>
