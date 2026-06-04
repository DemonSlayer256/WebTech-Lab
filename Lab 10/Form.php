<!DOCTYPE html>
<html>
<head>
    <title>Input and Store Data</title>
</head>
<body>
    <h2>Enter Your Information</h2>
    <form method="post" action="">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));

        echo "<h3>Submitted Information:</h3>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";

        // Store into a text file
        $file = 'submissions.txt';
        $entry = "Name: $name, Email: $email, Date: " . date('d-m-Y H:i:s') . "\n";

	file_put_contents($file, $entry, FILE_APPEND);
	echo "File successfully saved at: " . realpath($file);
    }
    ?>
</body>
</html>