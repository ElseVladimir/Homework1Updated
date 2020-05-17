<?php
require_once "Courseandprice.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Homework</title>
</head>
<body>
	<form action="index.php" method="post" >
		<h1 style="margin-left:25%;">Домашнее задание:список товаров(updated)</h1>
		<select name="operation" class="" required>

            <?php foreach($currency as $currKey => $curr) :?>
                <option value="<?=$currKey;?>"><?=$curr['name'];?></option>
			<?php endforeach; ?>

		</select>
	<input type="submit" name="submit" value="Результат" class="" /><br/>
	</form>

    <table>
        <tr>
            <th>Имя</th>
            <th>Цена</th>
            <th>Валюта</th>
        </tr>
        <?php print_r($_POST);?>
        <?php $operation = $_POST['operation'];?>
        <?php foreach($products as $productKey => $product) :?>
            <?php if(!empty($_POST['submit'])):?>
                    <tr>
                        <td><?=$product['name'];?></td>
                        <td><?=round($product['price'] / $_SESSION[$operation]['course'], 2);?></td>
                        <td><?=$_SESSION[$operation]['name'];?></td>
                    </tr>
                <?php else: ?>
                    <tr>
                        <td><?=$product['name'];?></td>
                    </tr>
            <?php endif;?>
        <?php endforeach;?>
    </table>

<h3>Переделаланная версия, что сделано:</h3>
	<ul>
		<li>Переделал альтернативный синтаксис для вывода(echo);</li>
		<li>Выбранная валюта в сессии(внизу сделал вывод, можно посмотреть что записано в сессии);</li>
		<li>Товаров в сессии не хранится;</li>
		<li>Альтернативный синтаксис для foreach плюс все выводится в таблицу;</li>
		<li>Массивы вывел в отдельный файл;</li>
	</ul>
<h4><b>Var dump: </b><?=print_r($_SESSION);?></h4>


<?php session_destroy(); ?>
</body>
</html>