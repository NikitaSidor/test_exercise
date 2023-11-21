<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

class CustomProductsListComponent extends CBitrixComponent
{
    public function executeComponent()
{
        if ($this->arParams["SECTION_ID"] === "") {
            $this->arResult["ERROR"] = "Не указан ID раздела";
        } else {
            $this->arResult["PRODUCTS"] = $this->getProducts();
        }

        $this->IncludeComponentTemplate();
    }

    private function getProducts()
    {
        Loader::includeModule("iblock");

        $sectionId = $this->arParams["SECTION_ID"];
        $arFilter = array(
            "IBLOCK_ID" => 6,
            "SECTION_ID" => $sectionId,
            "ACTIVE" => "Y",
        );

        $arSelect = array("ID", "NAME");
        $res = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);

        $products = array();
        while ($item = $res->GetNext()) {
            $products[] = $item;
        }

        return $products;
    }
}
