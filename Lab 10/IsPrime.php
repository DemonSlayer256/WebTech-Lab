<?php
if (isset($_POST['number'])) {
    $num = intval($_POST['number']);
    $isPrime = true;

    if ($num < 2) {
        $isPrime = false;
    } else {
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }
    }

    if ($isPrime) {
        echo "$num is a prime number.";
    } else {
        echo "$num is not a prime number.";
    }
}
?>
<form method="post">
    Enter a number: <input type="number" name="number" required>
    <input type="submit" value="Check">
</form>
