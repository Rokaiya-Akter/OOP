<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Collatz Conjecture</title>
</head>
<body>
    <form action="process.php" method="POST">
        <label>Start Number:</label>
        <input type="number" name="start" required>
        <label>End Number:</label>
        <input type="number" name="end" required>
        <button type="submit">Calculate</button>
    </form>
</body>
</html>