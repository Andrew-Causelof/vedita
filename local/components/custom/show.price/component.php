<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CModule::IncludeModule('iblock');

$elementDb = CIBlockElement::GetList(
    Array("SORT" => "ASC"),
    Array("IBLOCK_ID"=> $arParams['IBLOCK_ID'], "ACTIVE"=>"Y"),
    false,
    Array("nPageSize"=>50),
    Array()
  );

  while($element = $elementDb->GetNext()){
    $ar_res = CPrice::GetBasePrice($element["ID"], false, false);
    $arResult[] = array(
        'NAME'  => $element["NAME"],
        'PRICE' => $ar_res['PRICE']
    );
  }

$this->IncludeComponentTemplate();

