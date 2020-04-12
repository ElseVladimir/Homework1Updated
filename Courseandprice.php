<?php
session_start();
$currency =
[
 [
	      'name' => 'UAH',
	      'course' => 1
 ],
 [
	      'name' => 'USD',
	      'course' => 27.1
 ],
 [
	      'name' => 'Euro',
	      'course' => 30.2
 ]
];

$products = 
[
 [
'name' => 'Чашка',
'price' => '150'
 ],
  [
'name' => 'Ложка',
'price' => '50'
 ],
  [
'name' => 'Вилка',
'price' => '60'
 ],
  [
'name' => 'Тарелка',
'price' => '100'
 ],
  [
'name' => 'Чайник',
'price' => '500'
 ],
  [
'name' => 'Кастрюля',
'price' => '1000'
 ],
  [
'name' => 'Термос',
'price' => '400'
 ],
  [
'name' => 'Ножик',
'price' => '300'
 ],
  [
'name' => 'Половник',
'price' => '330'
 ],
  [
'name' => 'Графин',
'price' => '410'
 ]
];
$_SESSION = $currency;
?>