<!--PHP Syntax-->
<!--Aqui é onde começa tudo-->
<!DOCTYPE html>
<html>
<body>

<h1>A JINX NÃO MORREU :></h1>

<!--imprimindo um texto php -->
<?php
echo "Você foi achado sem sucesso!";
?>

<!-- funçôes não são case sensitive -->
<?php
ECHO "Você foi achado sem sucesso!<br>";
echo "Você foi achado sem sucesso!<br>";
ECHO "Você foi achado sem sucesso!<br>";
?>

<!--pra colocar cor nos textos-->
<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>
<!---->

<!-- php comment -->
 <!--alguns jeitos de fazer comentarios-->
<?php
// This is a single-line comment

# This is also a single-line comment
?>

<!--outros jeitos-->
<?php
/*
This is a multiple-lines comment block
that spans over multiple
lines
*/
?>

<!--e esse é os últimos jeitos de fazer comentarios-->
<?php
// You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5;
echo $x;
?>
<!---->

<!-- php variable-->
 <!--Aqui são variaveis--> 
<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
?>

<!--esse variavel mostra o inside e o ouside, nos mostrando os codigos fora da função--> 
<?php
$x = 5; // global scope
 
function myTest1() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

<!--dentro da função-->
<?php
function myTest2() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>

<!--esse varia os calculos sobre isso--> 
<?php
$x = 5;
$y = 10;

function myTest3() {
  global $x, $y;
  $y = $x + $y;
} 

myTest();  // run function
echo $y; // output the new value for variable $y
?>

<?php
$x = 5;
$y = 10;

function myTest4() {
  global $x, $y;
  $y = $x + $y;
} 

myTest();  // run function
echo $y; // output the new value for variable $y
?>

<?php
$x = 5;
$y = 10;

function myTest5() {
  global $x, $y;
  $y = $x + $y;
} 

myTest();  // run function
echo $y; // output the new value for variable $y
?>

<!--Esse nos mostra dois valores pra fazer uma função--> 
<?php
$x = 5;
$y = 10;

function myTest6() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 

myTest();
echo $y;
?>

<!--Esse é mais voltado pra estatisticas na função--> 
<?php
function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?> 
<!----> 

<!--PHP Echo and Print-->
<?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?> 



<!---->

<!--PHP Data Types-->
<?php 
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>"; 
var_dump($y);
?>



<!---->

<!--PHP Strings-->
<?php
echo strlen("Hello world!");
?> 



<!---->

<!--PHP Numbers-->
<?php
// Check if the type of a variable is integer   
$x = 5985;
var_dump(is_int($x));

echo "<br>";

// Check again... 
$x = 59.85;
var_dump(is_int($x));
?>



<!---->

<!--PHP Constants-->
<?php
// case-sensitive constant name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?>



<!---->

<?php
#PHP Constants
// case-sensitive constant name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?> 

<?php
const MYCAR = "Volvo";

echo MYCAR;
?> 

<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?> 

</body>
</html>