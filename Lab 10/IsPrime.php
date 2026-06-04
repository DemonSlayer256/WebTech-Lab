<?php
// 1. Initialize variables to avoid "undefined variable" notices
$num = "";
$isPrime = true;
$searched = false;

// 2. Check if the form was actually submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['number'])) {
    $num = intval($_POST['number']);
    $searched = true;

    // 0 and 1 are not prime numbers
    if ($num <= 1) {
        $isPrime = false;
    } else {
        // 3. Prime number logic: check for factors up to the square root of the number
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break; // Exit loop early if a factor is found
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Checker</title>
</head>
<body>

    <form method='post'>
        Enter a number: <input type='number' name='number' value="<?php echo htmlspecialchars($num); ?>" required>
        <input type='submit' value='Check'>
    </form>

    <br>

    <?php
    // 4. Only display the result if the user actually clicked submit
    if ($searched) {
        if ($isPrime) {
            echo "<strong>$num is a prime number.</strong>";
        } else {
            echo "<strong>$num is not a prime number.</strong>";
        }
    }
    ?>

</body>
</html>