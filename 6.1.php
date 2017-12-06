<?php

$a = array(5, 6, 10, 15);

$b = array(8, 5, 3, 25);

$Skirtumas = average($a) - average($b);

echo $Skirtumas;

function average($a) {
  return array_sum($a) / count($a);
;
}
?>