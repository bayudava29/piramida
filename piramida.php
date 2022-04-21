<?php
$n = 10;
$num = 1;
$gap = $n - 1;
$multiple = 10;
for ($j = 1; $j <= $n; $j++) {
    $num = $j;
    for ($i = 1; $i <= $gap; $i++) {
        printf(" ");
    }
    $gap--;
    for ($i = 1; $i <= $j; $i++) {
        if ($num % $multiple == 0) {
            $num = 0;
        }
        printf($num);
        $num++;
    }
    $num--;
    $num--;
    $num2 = $multiple - 1;
    for ($i = 1; $i < $j; $i++) {
        if ($num < 0) {
            if ($j - $i !== 0) {
                printf($num2);
                $num2--;
            }
        } else {
            printf($num);
            $num--;
        }
    }
    printf("\n");
}
