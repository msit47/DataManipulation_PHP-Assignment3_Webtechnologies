<?php
function isBitten($n)
{
if($n%2==0)
{
return TRUE;
}
else
{
return FALSE;
}
}
$r=rand(1,100);
echo "charlie's eating Time ".$r."\n";
$t=isBitten($r);
if ($t==TRUE)
 echo "Charlie ate my lunch!";
else
  echo "Charlie did not eat my lunch!";
?>