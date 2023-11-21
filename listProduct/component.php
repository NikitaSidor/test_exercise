23<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Iblock;

if (!class_exists("MyComponent")) {
    class MyComponent extends CBitrixComponent
    {
        public function executeComponent()
        {
            $this->arResult['SECTION_ID'] = $this->arParams['SECTION_ID'];

            $this->includeComponentTemplate();
        }
    }
}