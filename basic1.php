<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div class="container">
anas
<br>

<?php
echo"my name ";

// single line 
/*
multi line 
*/

echo "<br>";
$variable = 2;
$variable1 = 4;

echo "value of  variable and variable1 is   ";
echo "<br>";
echo $variable + $variable1;

echo "<br>";

$newvar= $variable;
$newvar += 1 ;

echo"val of new var is ";

echo $newvar;

echo "<br>";
echo "<br>";
echo "<h1>comparison operators</h1>";
echo "the value of 1 == 4 is ";
echo var_dump(1==4); 
echo "<br>";

echo "the value of 1 != 4 is ";
echo var_dump(1!=4); 
echo "<br>";


echo "the value of 1 >= 4 is ";
echo var_dump(1>=4); 
echo "<br>";

echo "the value of 1 <= 4 is ";
echo var_dump(1<=4); 

echo "<br>";

echo "<br>";echo "<br>";
echo $variable1 ++;
echo "<br>";
echo $variable1 --;
echo "<br>";
echo ++ $variable1 ;
echo "<br>";
echo -- $variable1 ;


echo "<br>";
echo "<br>";


echo "<h1>logical operators</h1>";
echo "<br>";
$myVar = (true and true);
 $myVar = (false  and true);

$myVar = (false  or true);
$myVar = (true  xor true);

echo var_dump($myVar);


echo "<br>";
echo "<br>";
echo " DATA TYPES   <br>";

$var= "this is a string";
$var= 23;
echo var_dump($var);

echo "<br>";
$var= 23.1;
echo "<br>";

echo var_dump($var);

$var= true;
echo "<br>";

echo var_dump($var);

echo "<br>";
echo "<br>";

?>
<?php
define("PI", 3.15);


echo "<h1>Constants</h1>";
echo "<br>";
$var = 4;

echo $var + PI;
echo "<br>";









?>

</div>


</body>
</html>