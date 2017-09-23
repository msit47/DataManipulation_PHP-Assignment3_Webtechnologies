<?php
$month=array ("January","February","March","April","May","June","July","August","September","October","November","December");//Array elements
$arrlength = count($month);
sort($month);
for ($x=0; $x < $arrlength; $x++)
{
   echo $month[$x];
   echo "\n";
}
?>