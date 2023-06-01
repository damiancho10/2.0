<?php
   //recuperamos el numero escrito en el formulario.

   $n = $_REQUEST["numero"];

   //mostramos la tabla de multiplicar en html

   echo "<table border ='1'>";
   echo "<tr><td colspan ='5'> tabla de multiplicar del numero $n </td></td>";
   echo "<tr>";

   for($i = 1; $i <= 25; $i++ ){
      if(($i-1) % 5 ==0)echo"</tr><tr> ";
      echo"<td>$n x $i =" . $n * $i . " </td>";
   }

   echo"</tr>";
   echo"</table>";

?>