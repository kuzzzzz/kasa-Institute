<?php 
class Fruits {
    public $name;
    public $color;
    public function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }

    protected function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color} "."<br>";
    }
}

class Strawberry extends Fruits {
    const SOME_RANDOM_MSG = "To be alive is to be";
    public function message(){
        echo "Am I a fruit or a berry "."<br>";
        echo self::SOME_RANDOM_MSG."1st"."<br>";
        $this -> intro();
    }
}

$strawberry = new Strawberry("Straberry","red");
$strawberry->message();

echo Strawberry::SOME_RANDOM_MSG."2nd"."<br>";

?>

<!-- You can overwrite methods and functions inherited from the parent by redifining them again with same values but by adding the final keyword in front of them you can stop the method or function from being overwritten -->

<!-- you write and access constant variable with const and :: -->