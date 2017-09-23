<?php
$month=array ("January","February","March","April","May","June","July","August","September","October","November","December");//Array elements
//echo "array length".count($month);
$arrlength = count($month);
//echo $arrlength;
for ($x=0; $x < $arrlength; $x++)
{
   echo $month[$x];
   echo "\n";
}
?>