<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
<div class ="container">
This is my first php website
</div>
<?php
   echo "hello world an this is printed using php";
?>
<?php

   define('PI',3.14);
   echo "Hello world";
   echo "<br>";
//    /Arithmetic operator//

   $variable1 = 3;
   $variable2 = 5;
   echo "<br>";
   echo $variable1;
   echo $variable2;
   echo "<br>";

   //Assignment operator//
   $newvar=$variable1 ;
   $newvar-=1;
   echo " the value of new variable is";
   echo $newvar;
   echo "<br";

//    Comparison operator//
   echo "<br>";
   echo "<h1> Comparison operator </h1>";

   echo "The value of 1==4 is";
   echo var_dump (1==4);
   echo "<br>";


   echo "The value of 1!=4 is";
   echo var_dump (1!=4);
   echo "<br>";

   
   
   echo "The value of 1<=4 is";
   echo var_dump (1<=4);
   echo "<br>";

   //increament or decreament operator


    // echo $variable1++;
    // echo"<br>";
    // echo $variable1;
    // echo "<br>";
//     echo --$variable1;
//     echo "<br>";
//     echo $variable1;
//     echo "<br>";
// //    ++$variable1;
//    --$variable;



// logical operator
 echo $myVar=(true xor true);
 echo "<br>";
 echo var_dump($myVar);    


 // Data types //

 //STRING//
//  INTEGER
//  BOOLEAN
//  FLOAT
//  OBJECT

echo"<br>  Data types <br>";
$var="This is a String ";
echo var_dump($var);
echo "<br>";

$var=58;
echo var_dump($var);
echo"<br>";


$var=78.4;
echo var_dump($var);
echo"<br>";


$var=true;
echo var_dump($var);
echo"<br>";
echo PI;
//    echo "The value of variable1 + The value of variable2 is";
//    echo "<br>";
//    echo $variable1 + $variable2;
//    echo "The value of variable1 - The value of variable2 is";
//    echo "<br>";
//    echo $variable1 - $variable2;
//    echo "The value of variable1 * The value of variable2 is";
//    echo "<br>";
//    echo $variable1 * $variable2;
//    echo "The value of variable1 / The value of variable2 is";
//    echo "<br>";
//    echo $variable1 / $variable2;
   ?>
    
</body>
</html>