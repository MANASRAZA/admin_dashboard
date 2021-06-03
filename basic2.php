<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>basic 2</title>

<!-- <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}



.container{

max-width: 80%;
background-color: grey;
margin: auto;
padding: 50px;

}

</style>
 -->
</head>
<body>
    

<div class="container">

<?php


$age = 34;

if ($age >18){

    echo"older";
}
else{
    echo"younger";
}


echo "<br>";

echo "<br>";

echo "<br>";


echo "<h1>array</h1>";


$language = array("python" ,"c++","c");
echo $language[1];
echo "<br>";

echo count($language ) ;

echo $language[0] ;

echo "<br>";

echo "<h1>while loops</h1>";
echo "<br>";


$a =0;

while ($a <= 10) {
    echo "  <br> the value of a is ";
    echo $a;
    $a++;
}


// array in php using while lloop 

$a =0;

while ($a < count($language)) {
    echo "  <br> the value oflanguage  is ";
    echo $language[$a];
    $a++;
}


echo "<br>";
echo "<br>";


echo "<h1> do while loops</h1>";
echo "<br>";


// do while lloop 

$a =0;

do {
    echo "  <br> the value of a is ";
    echo $a;
    $a++;
}while ($a < 10);


echo "<br>";

echo "<h1> for loops</h1>";
echo "<br>";


for($a=1 ; $a<10 ;$a++){
echo "<br> the value of a loop is  ";

echo $a;

}
echo "<br>";

foreach ($language as  $value) {
    echo " <br> the value is ";
echo $value;
}


echo "<br>";

echo "<h1> function</h1>";
echo "<br>";

function print5(){
echo "abc"; 

}

print5();

echo "<br>";

function print_num($number){
    echo "<br> your number is "; 
   echo $number;
    }
    
    print_num(45);
    




    echo "<br>";

    echo "<h1> strings</h1>";
    echo "<br>";
    
$str ="this is a strin s ";
echo $str;
$lenght= strlen($str);
echo "<br>";


//$lenght= strlen("a");
$word_counter= str_word_count($str);
echo $lenght;
echo "<br>";

echo $word_counter;






















?>


</div>










</body>
</html>