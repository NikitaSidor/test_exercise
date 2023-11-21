<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<table>
    <tr>
        <th>Логин</th>
        <th>Email</th>
        <th>Имя</th>
        <th>Фамилия</th>
    </tr>
    <?php foreach ($arResult['USERS'] as $arUser): ?>
        <tr>
            <td><?= $arUser['LOGIN'] ?></td>
            <td><?= $arUser['EMAIL'] ?></td>
            <td><?= $arUser['NAME'] ?></td>
            <td><?= $arUser['LAST_NAME'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
