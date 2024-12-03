<?php

require_once 'Garden.php';
require_once 'SystemCollector.php';

// Создаем сад

$garden = new Garden();
// Добавляем яблони
$garden->addTrees('apple', 10);
// Добавляем груши
$garden->addTrees('pear', 15);

// создаем систему сборки
$fruitCollector = new SystemCollector();
// вызываем метод Сборщик и передаем  массив с ключ=>значение: id дерева=>кол-во фруктов вырасших на дереве
$fruitCollector->Collector($garden->getTreeIds());
// сортируем по типу используя правило чет id - яблоко, нечет id груша,и взвешиваем каждый фрукт, в методате сохраняем нужные для статистики значения в свойства
$fruitCollector->sortFruits($fruitCollector->getFruitsIds());
// в одном методе вызываем значения нужных свойств с выводом на экран терминала
$fruitCollector->Statistika();
