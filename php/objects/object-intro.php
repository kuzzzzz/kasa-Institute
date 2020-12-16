<!-- set property with set name using the this keyword which is only available inside the method -->

<?php
class Fruit1 {
  public $name;
  function set_name($name) {
    $this->name = $name;
  }
}
$apple = new Fruit1();
$apple->set_name("Apple");
?>

<!-- or setting it directly -->

<?php
class Fruit2 {
  public $name;
}
$apple = new Fruit2();
$apple->name = "Apple";
?>

<!-- An entire object with geter and setter -->
<?php
class Fruit3 {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit3();
$banana = new Fruit3();
$orange = new Fruit3();
$apple->set_name('Apple');
$banana->set_name('Banana');
$orange->set_name('orange');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";
echo $orange->get_name();
?>