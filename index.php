<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Calculator</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calculator {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 300px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #1d4ed8;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="calculator">

    <h2>Sum Calculator</h2>

    <form method="POST">

        <input
            type="number"
            name="number1"
            placeholder="Enter first number"
            step="any"
            required
        >

        <input
            type="number"
            name="number2"
            placeholder="Enter second number"
            step="any"
            required
        >

        <button type="submit">Calculate Sum</button>

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        $sum = $number1 + $number2;

        echo '<div class="result">';
        echo "Sum: " . htmlspecialchars($sum);
        echo '</div>';
    }

    ?>

</div>

</body>
</html>