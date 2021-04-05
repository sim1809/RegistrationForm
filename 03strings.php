<?php

$str="This this this";
echo $str;
$lenn = strlen($str);
echo "The length of the string is" . $lenn . "<br>Thank you <br> ";
echo "The number of words in the string is" . str_word_count($str)."Thank you <br>";
echo "The reversed string is".strrev($str)."Thank you<br>";
echo "The search for is in the position is:".strpos($str,"is")."Thank you<br>";
echo "The replaced string is:". str_replace("is","at",$str)."Thank you<br>";
?>