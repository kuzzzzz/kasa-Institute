<!DOCTYPE html>
<head>
<link rel="stylesheet" href="main.css">
</head>
<html>
<body>

<h3>
<?php

// function decalartion and call  the global makes the varible available outside the function and static makes it mantain it's value
$thing = "I am the thing";

function myTest (){
    static $x = 0;
    global $thing;
    $thing = "This thing is availble every were";
    $x++;
    echo ("$x $thing");
  
    $cars = array("Volvo","BMW","Toyota");
var_dump($cars);
}

myTest();

// class declaration and call  class is a template for an object while an object is an instance of a class
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();

// use var dumps to check for the value of a variable
$x = null;
var_dump($x);

// sting functions
echo str_repeat("war and peace ", 5);


// number functions
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast."<br>";

//Math methods
echo(round(3.33333333,2).'<br>');
echo(round(7.055,2)."<br>");

echo(rand(0,23)."<br>");

// Constants

define("IAMRANDOM",rand(0,5));
echo "I AM RANDOM CONSTANT ".IAMRANDOM."<br>";

// if staments and loop are same in javascript also same with the switch statment
 $time = date("H");
if ($time <= 20) {
  echo "Have a good day"."<br>";
}

// similar to the for of loop in js we have the foreach all in small caps
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}


//  while loop using Break and countinue statements
$x = 0;

while($x < 10) {
  if ($x == 4) {
    $x++;
    continue;
  }
  echo "The number is: $x <br>";
  $x++;
}

// The real power of php comes from it's function php has more than a thousand built in functions


// In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.

// When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:


function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num ."<br>";

// functions also spciefies data types to accept and return

function addNumbers(float $a, float $b) : int {
  return (int)($a + $b);
}
echo addNumbers(1.2, 5.2) ."<br>";

// <super globals and their uses are available in all scope
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";

echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo $_SERVER['SERVER_PORT'];
?>


</h3>

<!-- PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form. -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
<br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

<!-- Get working with url -->
<a href="res.php?subject=PHP&web=W3schools.com">Test $GET</a>

<!-- Regex in php -->


</body>
</html>