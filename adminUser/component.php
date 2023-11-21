<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!\Bitrix\Main\Loader::includeModule('main')) {
    ShowError('Модуль "main" не установлен');
    return;
}

$arFilter = array('GROUPS_ID' => array(1)); // Группа "Администратор"
$arSelect = array('ID', 'LOGIN', 'EMAIL', 'NAME', 'LAST_NAME');

$rsUsers = CUser::GetList(($by = "ID"), ($order = "ASC"), $arFilter, array('SELECT' => $arSelect));
$arResult['USERS'] = array();

while ($arUser = $rsUsers->Fetch()) {
    $arResult['USERS'][] = $arUser;
}

$this->IncludeComponentTemplate();
?>