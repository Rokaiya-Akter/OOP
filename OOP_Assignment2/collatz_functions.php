<?php
// collatz_functions.php
function collatzSequence($num) {
    $sequence = [];
    $maxValue = $num;
    $iterations = 0;
    
    while ($num != 1) {
        $sequence[] = $num;
        if ($num % 2 == 0) {
            $num /= 2;
        } else {
            $num = 3 * $num + 1;
        }
        $maxValue = max($maxValue, $num);
        $iterations++;
    }
    $sequence[] = 1;
    return ["sequence" => $sequence, "maxValue" => $maxValue, "iterations" => $iterations];
}

function collatzRange($start, $end) {
    $results = [];
    $maxIterations = ["number" => null, "iterations" => 0];
    $minIterations = ["number" => null, "iterations" => PHP_INT_MAX];
    $maxValueRecord = ["number" => null, "maxValue" => 0];
    
    for ($i = $start; $i <= $end; $i++) {
        $result = collatzSequence($i);
        $results[$i] = $result;
        
        if ($result["iterations"] > $maxIterations["iterations"]) {
            $maxIterations = ["number" => $i, "iterations" => $result["iterations"]];
        }
        if ($result["iterations"] < $minIterations["iterations"]) {
            $minIterations = ["number" => $i, "iterations" => $result["iterations"]];
        }
        if ($result["maxValue"] > $maxValueRecord["maxValue"]) {
            $maxValueRecord = ["number" => $i, "maxValue" => $result["maxValue"]];
        }
    }
    
    return ["results" => $results, "maxIterations" => $maxIterations, "minIterations" => $minIterations, "maxValueRecord" => $maxValueRecord];
}
?>