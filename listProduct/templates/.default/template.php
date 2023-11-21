123<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (Loader::includeModule('iblock')) {
    $sectionId = $arParams['SECTION_ID']; // Получаем ID раздела из параметров компонента

    $arFilter = array(
        'IBLOCK_ID' => $arParams['IBLOCK_ID'], // ID вашего инфоблока
        'SECTION_ID' => $sectionId,
        'ACTIVE' => 'Y',
    );

    $arSelect = array('ID', 'NAME');

    $res = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);

    while ($arItem = $res->GetNext()) {
        echo 'ID товара: ' . $arItem['ID'] . ', Название товара: ' . $arItem['NAME'] . '<br>';
    }
}
