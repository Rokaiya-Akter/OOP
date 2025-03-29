<!-- process.php -->
<?php
include 'collatz_functions.php';

if (isset($_POST['start']) && isset($_POST['end'])) {
    $start = (int)$_POST['start'];
    $end = (int)$_POST['end'];
    
    if ($start < 1 || $end < $start) {
        die("Invalid range. Please enter valid numbers.");
    }
    
    $data = collatzRange($start, $end);
    
    echo "<h2>Results for range $start to $end</h2>";
    echo "<p>Number with max iterations: ".$data['maxIterations']['number']." (".$data['maxIterations']['iterations']." steps)</p>";
    echo "<p>Number with min iterations: ".$data['minIterations']['number']." (".$data['minIterations']['iterations']." steps)</p>";
    echo "<p>Number with highest value reached: ".$data['maxValueRecord']['number']." (Max: ".$data['maxValueRecord']['maxValue'].")</p>";
}
?>
