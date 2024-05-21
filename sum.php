<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP to Python</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    form {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    input[type="text"] {
        margin-bottom: 10px;
        padding: 8px;
        width: calc(100% - 16px);
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    input[type="submit"] {
        background: #007BFF;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background: #0056b3;
    }
    h3, p {
        text-align: center;
    }
</style>
</head>
<body>
<form method="POST" action="">
<label for="num1">Number 1:</label>
<input type="text" id="num1" name="num1">
<br>
<label for="num2">Number 2:</label>
<input type="text" id="num2" name="num2">
<br>
<input type="submit" name="submit" value="Calculate">
</form>
<?php
echo "<h3>Developed by Your Name</h3>";
echo "<p>Date: " . date("Y-m-d") . "</p>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    // Prepare the command to run the Python script
    $command = escapeshellcmd("python3 sum.py $num1 $num2");
    // Execute the Python script and capture the output
    $output = shell_exec($command);
    // Display the result
    echo "<h3>Result from Python script:</h3>";
    echo "<p>$output</p>";
}
?>
</body>
</html>
