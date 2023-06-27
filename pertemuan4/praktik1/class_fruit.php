<?php

    class Fruit {
        // jika dibuat public dan didalam class maka disebut dengan proverty
        public $name;
        public $color;

        // method
        function getName() {
            return $this->name;
        }

        function getColor() {
            return $this->color;
        }
    } 
    
    // jika dibuat diluar disebut dengan variable
    $apple = new Fruit();
    $apple->name = "Apple";
    $apple->color = "Red";
    echo $apple->getName() . " " . $apple->getColor();

    echo "<br><br>";

    $banana = new Fruit();
    $banana->name = "Banana";
    $banana->color = "Yellow";
    echo $banana->getName() . " " . $banana->getColor();

?>