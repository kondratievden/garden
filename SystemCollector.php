<?php
class SystemCollector{
    private $appleFruits;
    private $pearFruits;
    private $countPear;
    private $countApple;    
    private $bigWeigtApple = 0;
    private $idBigWeigtApple;
    private $fruitsIds = [];

public function Collector(array $treeIds){
    //имитируем операцию из условия задачи в один ящик(массив) добавляем фрукты с маркировкой id дерева, получаем массив где каждый элемент id дерева, 1 элемент = 1 фрукт
    foreach ($treeIds as $id => $count){
        $this->fruitsIds = array_merge($this->fruitsIds, array_fill(0, $count, $id));
        
}
}

// метод возвращает массив собранных фруктов сборщиком
public function getFruitsIds(){

    return $this->fruitsIds;
}

// метод для сортировки и взвешивания  собранных фруктов сборщиком
public function sortFruits(array $fruitsIds)
    {   
        foreach ($fruitsIds as $id) {
            $fruitType = ($id % 2) === 0 ? 1 : 2;  //  логика для определения типа фрукта по ID автоматизированной системой
            if ($fruitType === 1) {
                $weight = rand(150, 180);
                $this->appleFruits += $weight;
                $this->countApple += 1;
                if($weight > $this->bigWeigtApple){
                    $this->bigWeigtApple = $weight;
                    $this->idBigWeigtApple = $id;
                }
            } else {
                $this->pearFruits += rand(130, 170);
                $this->countPear += 1;
                }
    }
}
// метод вызывает значения свойств системы сбора фруктов для вывода на экран терминала
public function Statistika(){

    $properties = [
        'общее кол-во собранных яблок' => $this->countApple,
        'общее кол-во собранных груш' => $this->countPear,
        'общий вес собранных яблок' => $this->appleFruits.' грамм',
        'общий вес собранных груш' => $this->pearFruits.' грамм',
        'вес самого тяжелого яблока' => $this->bigWeigtApple.' грамм',
        'id дерева c которого яблоко собрано' => $this->idBigWeigtApple
    ];

    foreach ($properties as $key => $value) {
        echo $key . ': ' . $value . PHP_EOL;
    }


}


}
