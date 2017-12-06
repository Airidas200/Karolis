<?php
foreach (range(0, 1000) as $number) 

{
    for ($n = 2; $n <= sqrt($number); $n++)
    {
        if (!($number % $n))
        {
            $d += $n;
            if ($n <> $number / $n);
                $d += $number / $n;
        }
    }
    return ++$d == $number;
}
for ($n = 1; $n < 100; $n++)

        if (is_perfect($n))

            echo $n . '<br />';   
    ?>