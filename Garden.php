<?php

class Garden {
    private $treeIds = [];
    private $typeIdent = ['apple'=> [0, 40, 50] , 'pear' => [1, 0, 20]];
    private static $nextId = 1;

    public function addTrees($type, $quantity) {
        
        for ($i = 0; $i < $quantity; $i++) {
            // Создаем  id четный/нечетный в зависимости от типа дерева
            $id = self::$nextId * 2 + $this->typeIdent[$type][0];
            $this->treeIds[$id] = rand($this->typeIdent[$type][1], $this->typeIdent[$type][2]);
            self::$nextId++;
        }
    }
    //метод возвращает массив деревьев с id и кол-вом фруктов для каждого дерева
    public function getTreeIds() {
        return $this->treeIds;
    }

    // Метод для установки значения статической переменной
    public function setStaticVariable($value) {
        self::$nextId = $value;
    }
}
