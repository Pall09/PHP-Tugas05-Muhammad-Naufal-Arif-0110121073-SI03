<?php
    class Fruit {
        public $name;
        public $color;
        public $weight;

        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        public function intro() {
            echo "<p>This fruit is {$this->name} and the color is {$this->color}</p>";
        }
        

    }

    class Strawberry extends Fruit {
        public function massege() {
            echo "<p>Am i a fruit or berry? </p>";
        }
    }

    $strawberry = new Strawberry('Strawberry', 'red');
    $strawberry->massege();
    $strawberry->intro();

?>