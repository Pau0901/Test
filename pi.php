<?php

$n = 1.0;

for ($i = 1; $i < 10000; $i++) {

    echo $i . "-" . $n . "\n"; // CORRECTO

    if ($i % 2 == 0) {
        $n = $n + 1 / (2 * $i + 1);
    } else {
        $n = $n - 1 / (2 * $i + 1);
    }
}

echo $n * 4 . "\n";
