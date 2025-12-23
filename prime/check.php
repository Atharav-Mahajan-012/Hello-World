<?php
$num = 17;

if ($num <= 1) {
    echo "<h2>$num is Not a Prime Number</h2>";
} else {
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            echo "<h2>$num is Not a Prime Number</h2>";
            return;
        }
    }
    echo "<h2>$num is a Prime Number</h2>";
}
?>
