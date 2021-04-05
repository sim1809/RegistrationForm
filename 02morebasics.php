<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<style>
*{ margin :0;
   padding :0;
   box-sizing: border-box;
    }
.container{

    max-width : 80%;
    background-color: rgb(110, 80, 80);
    margin: auto;
    padding: 23px;
}
</style>
<body>
<div  class= "container">
<h1> Lets learn about PHP </h1>
<p> Your party status is here: </p>

<?php

$age=7;
if($age>40){
    echo "You can go to the party";
}

elseif($age=7) {
    echo "You are 7 years old";
}

else {
    echo "You cannot go to the party";
}

//  arrays in php

$language=array("Python","c","c++","Java");
echo "<br>";
echo $language[1];
echo "<br>";
echo count($language);


// loops in php
//  $a=0;
// //  while($a<=10){
//  echo"<br> The value of a is";
//  echo $a;
//  $a++;
//  }

//  iterating arrays using loop

// $a=0;
// while($a<count($language)){

//     echo "<br> The value of language is:";
//     echo $language[$a];
//     $a++;
// }
// //  do while loops in php
 $a=200;
 do {
     echo"<br> The value of a is";
    echo $a;
    $a++;

 }while($a<10);


 // for loop//
  for($a=0 ; $a<10; $a++){
      echo "<br> The value of a using for loop is:";
      echo $a;
  }


  foreach($language as $value){
      echo"<br> The value for for each loop is: ";
      echo $value;
  }

  function print5(){

    echo"FIVE";
    echo"<br>";
  }
  print5();
  print5();
  print5();
  print5();
   
  function print_number($number){

    echo "<br>Your number is: ";
    echo $number;
  }

  print_number(45);
  print_number(78);
  print_number(4890);

?>
</div>

    
</body>
</html>