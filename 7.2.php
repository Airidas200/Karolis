<?php

$a=['Jonas', 'Petras', 'Antanas', 'Povilas'];



foreach ($a as $vardas1 => $reiksme1) {
  foreach ($a as $vardas2 => $reiksme2) {
      if ($vardas1 != $vardas2){
          echo $reiksme1 ." - " .$reiksme2 ." <br> ";
      }
    }
  }


?>

