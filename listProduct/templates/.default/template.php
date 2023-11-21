123<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (isset($arResult["ERROR"])) {
    echo $arResult["ERROR"];
} else {
    if (empty($arResult["PRODUCTS"])) {
        echo "Нет товаров для отображения";
    } else {
        foreach ($arResult["PRODUCTS"] as $product) {
            echo "ID товара: " . $product["ID"] . ", Название товара: " . $product["NAME"] . "<br>";
        }
    }
}
