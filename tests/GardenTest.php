<?php
require_once 'Garden.php';
use PHPUnit\Framework\TestCase;

    class GardenTest extends TestCase {
  


        public function testAddTreesPear()
        {
         $gardenTestPear = new Garden();
         $gardenTestPear->addTrees('pear', 12);
         $resultPear = $gardenTestPear-> getTreeIds();
         $newPearKey = array_keys($resultPear);
         $this->assertEquals(
            $newPearKey,
            [3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 23, 25],
        );
        
        }

      
        public function testAddTreesApple()
        {
         $gardenTestApple = new Garden();
         $gardenTestApple->setStaticVariable(1);
         $gardenTestApple->addTrees('apple', 12);
         $resultApple =$gardenTestApple-> getTreeIds();
         $newAppleKey = array_keys($resultApple);
         $this->assertEquals(
            $newAppleKey,
            [2, 4, 6, 8, 10, 12,14,16,18,20,22,24],
        );
        }
    }

