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

 $a=['Jonas', 'Petras', 'Antanas', 'Povilas'] . "<br>";

foreach ($a as $vardas1 => $reiksme1) {
  foreach ($a as $vardas2 => $reiksme2) {
      if ($vardas1 != $vardas2){
          echo $reiksme1 ." - " .$reiksme2 ." <br> ";
      }
    }
  }

?>

