<?php
$username = 'Сергей';
$userage = 35;
$usermail = 'sdevelov@mail.ru';
$aboutuser = 'Back-end Web Development';
if ($username) {
?>
<table>
<tr> <td>Имя</td> <td><?= $username ?></td></tr>
<tr> <td>Возраст</td> <td><?= $userage ?></td></tr>
<tr> <td>Адрес электронной почты</td> <td><a href="#" color=blue><ins datetime="2018-07-01"><?= $usermail ?></ins></a></td></tr>
<tr> <td>О себе</td> <td><?= $aboutuser ?></td></tr>
</table>
<?php } else { ?>
<div><h2>Пользователь не найден</h2></div>
<?php }
