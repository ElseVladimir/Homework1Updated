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

			<option value="uah">uah</option>
			<option value="usd">usd</option>
			<option value="eur">eur</option>
			
		</select>
	<input type="submit" name="submit" value="Результат" class="" /><br/>
<?php
	if($_POST['submit'] && $_POST['operation'] == 'usd')
{
?>
		<table>
		<tr>
			<th>Имя</th>
			<th>Цена</th>
			<th>Валюта</th>
		</tr>
	<?php foreach($products as $product) :?>
		<tr>
			<td><?=$product['name'];?></td>
			<td><?=round($product['price'] / $_SESSION[1]['course'], 2);?></td>
			<td><?=$_SESSION[1]['name'];?></td>
		</tr>
	<?php endforeach;?>
	</table>	
<?php
}
	else if($_POST['submit'] && $_POST['operation'] == 'eur')
{
?>
		<table>
		<tr>
			<th>Имя</th>
			<th>Цена</th>
			<th>Валюта</th>
		</tr>
	<?php foreach($products as $product) :?>
		<tr>
			<td><?=$product['name'];?></td>
			<td><?=round($product['price'] / $_SESSION[2]['course'], 2);?></td>
			<td><?=$_SESSION[2]['name'];?></td>
		</tr>
	<?php endforeach;?>
	</table>	
<?php
}
	elseif($_POST['submit'] && $_POST['operation'] == 'uah')
{
?>
		<table>
		<tr>
			<th>Имя</th>
			<th>Цена</th>
			<th>Валюта</th>
		</tr>
	<?php foreach($products as $product) :?>
		<tr>
			<td><?=$product['name'];?></td>
			<td><?=round($product['price'] / $_SESSION[0]['course'], 2);?></td>
			<td><?=$_SESSION[0]['name'];?></td>
		</tr>
	<?php endforeach;?>
	</table>	
<?php
}
	else if(!isset($_POST['submit']))
{
?>
		<table>
		<tr>
			<th>Имя</th>
			<th>Цена</th>
			<th>Валюта</th>
		</tr>
	<?php foreach($products as $product) :?>
		<tr>
			<td><?=$product['name'];?></td>
			<td></td>
			<td></td>
		</tr>
	<?php endforeach;?>
	</table>	
<?php
}
?>
	</form>
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