<?php

function getNumbers()
{
    $sorted = [];

    while (count($sorted) <= 5) {
        $num = rand(1, 60);

        if (!in_array($num, $sorted)) {
            $sorted[] = $num;
        }
    }

    sort($sorted);

    return $sorted;
}

echo "<pre>";
print_r(getNumbers());
echo "</pre>";
