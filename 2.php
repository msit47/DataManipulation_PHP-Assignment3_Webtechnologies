<html>
<head>

 <title> MY CHECKERBOARD!!!</title>
 <style>
 table, th, td {
 width: 300px;
 border:1px;
}

.cell1{
background-color:#E74C3C;
width:35px ;
height:35px;
}

.cell2{
background-color:#17202A ;
width:35px ;
height:35px;
}


</style>
 </head>
 <body>
  <table cellspacing="1px" cellpadding="1px">
     <?php
     for($i=1;$i<=10;$i++)
     {
         echo "<tr>";
         for($j=1;$j<=10;$j++)
         {  
         $sum=$i+$j;
         if($sum%2!=0)
         {
         echo '<td class="cell1"></td>';
         }
         else
         {

         echo '<td class="cell2"></td>';
         }
         }
         echo "</tr>";
   }  ?>
 </table>
 </body>
 </html>