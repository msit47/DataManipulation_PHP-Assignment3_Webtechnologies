<?php
$month=array ("January","February","March","April","May","June","July","August","September","October","November","December");//Array elements
foreach ($month as $value)
{
   echo "$value";//printed the elements using foreach loop
   echo "\n";
}

sort($month);
echo "The Sorted Array elements"	. "\n";
foreach ($month as $value)
{
   echo "$value";//printed the sorted array elements using foreach loop
   echo "\n";
}
?>