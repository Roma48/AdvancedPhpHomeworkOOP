<?php
ini_set('display_errors', '1');

require_once("vendor/autoload.php");
use Phone\Phone;
use Book\Book;

$phone = new Phone();
$phone->setProductCategory("Smartphone");
$phone->setBrand("LG");
$phone->setModel("Bello");
$phone->setPrice("200$");

echo "<h1>Phone</h1>";
echo 'Category: ' . $phone->getProductCategory() . '<br>';
echo 'Brand: ' .$phone->getBrand(). '<br>';
echo 'Model: ' .$phone->getModel(). '<br>';
echo 'Price: ' .$phone->getPrice();

$book = new Book();
$book->setProductCategory("Book");
$book->setModel("Garry Potter");
$book->setPrice("20$");

echo "<h1>Book</h1>";
echo 'Category: ' . $book->getProductCategory() . '<br>';
echo 'Name: ' . $book->getModel() . '<br>';
echo 'Price: ' .$book->getPrice();


