<?php
include_once 'Circle.php';
include_once 'Square.php';
include_once 'Main.php';
$circle = new Circle(5);
$rect = new Rectangle(6, 7);
$square = new Square(8);
$main = new Main($circle, $rect, $square);
foreach ($main->getMain() as $value) {
    echo 'dien tich la: ' . $value->getArea() . "<br/>";
    if ($value == $square) {
        echo $square->howToColor() . '<br/>';
    }
}
