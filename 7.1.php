<?php

$a=['Jonas', 'Petras', 'Antanas', 'Povilas'];


{
 for ($i=0; $i<count($a); $i++) {
  for ($j=$i; $j<count($a); $j++) {
      if ([$i] !== [$j]){
          echo $a[$i] ." - " .$a[$j] ." <br> ";
      }
   };
}
}


?>

