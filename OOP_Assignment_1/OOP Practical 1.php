<?php
function collatz($num) {
    if ($num <= 0) {
        echo "Please enter a positive integer.\n";
        return;
    }

    echo "Collatz sequence for $num: ";
    while ($num != 1) {
        echo $num . " ";
        if ($num % 2 == 0) {
            $num /= 2;  // If even, divide by 2
        } else {
            $num = 3 * $num + 1;  // If odd, apply 3x + 1
        }
    }
    echo "1\n"; // End of sequence
}

// Prompt user for input
echo "Enter an integer: ";
$input = trim(fgets(STDIN));

// Check if the input is a valid integer
if (is_numeric($input) && (int)$input == $input) {
    collatz((int)$input);
} else {
    echo "Invalid input! Please enter a valid integer.\n";
}
?>
