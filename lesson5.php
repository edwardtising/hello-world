<?php
$fileData = file_get_contents(__DIR__ . '/phonebook.json');
$phonebook = json_decode($fileData, true);
?>

<html>
<head>
    <title>Обработка форм и работа с json</title>
</head>
<body>
    <table>
        <tr>
            <td>Номер</td>
            <td>Имя</td>
            <td>Фамилия</td>
            <td>Адрес</td>
            <td>Телефон</td>
        </tr>
        <?php foreach ($phonebook as $i => $phonebook) { ?>
            <tr>
                <td><?php echo $phonebook['id']; ?></td>
                <td><?=$phonebook['firstName'];?></td>
                <td><?=$phonebook['lastName'];?></td>
                <td><?=$phonebook['address'];?></td>
                <td><?=$phonebook['phoneNumber'];?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
