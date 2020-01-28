<?php

function fibonacci(int $n): string
{
    if ($n == 0) {
        return 0;
    } elseif ($n <= 2) {
        return 1;
    }
    
    $minus2 = 1;
    $minus1 = 1;
    
    $result = 0;
    for ($i = 3; $i < $n; $i++) {
        $tempMinus1 = $minus1;
        $minus1 = bcadd($minus1, $minus2);
        $minus2 = $tempMinus1;
    }
    
    return bcadd($minus1, $minus2);
}

for ($n = 0; $n <= 300; $n++) {
    echo $n . ': ' . fibonacci($n) . PHP_EOL;
}
