<?php

function printFor($start, $end, $step) {
    if ($start % 2 == 0) {
        $start++;
    }
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}

echo "Using for loop: ";
printFor(1, 20, 2);
echo "\n";

function printWhile($start, $end, $step) {
    if ($start % 2 == 0) {
        $start++;
    }
    $i = $start;
    while ($i <= $end) {
        echo $i . " ";
        $i += $step;
    }
}

echo "Using while loop: ";
printWhile(1, 20, 2);
echo "\n";

function printDoWhile($start, $end, $step) {
    if ($start % 2 == 0) {
        $start++;
    }
    $i = $start;
    do {
        echo $i . " ";
        $i += $step;
    } while ($i <= $end);
}

echo "Using do-while loop: ";
printDoWhile(1, 20, 2);
echo "\n";
