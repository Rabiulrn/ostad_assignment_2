<?php
$first = 0;
$second = 1;

for ($count = 0; $count < 10; $count++) {
    if ($first > 100) {
        break;
    }

    echo $first . " ";

    $next = $first + $second;
    $first = $second;
    $second = $next;
}
?>
