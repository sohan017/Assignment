<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <style>
        <?php include "styles.css" ?>
    </style>
</head>

<body>
    <div class="container">
        <h2>Simple Calculator</h2>
        <form method="post" action="">
            <input type="number" name="num1" placeholder="Enter first number" required><br>
            <input type="number" name="num2" placeholder="Enter second number" required><br>
            <select name="operation">
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
            </select><br>
            <button type="submit">Calculate</button>
        </form>
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 =  $_POST["num1"];
                $num2 =  $_POST["num2"];
                $operation =  $_POST["operation"];

                switch ($operation) {
                    case "add":
                        $result = $num1 + $num1;
                        echo "Result: $result";
                        break;
                    case "subtract":
                        $result = $num1 - $num1;
                        echo "Result: $result";
                        break;

                    case "multiply":
                        $result = $num1 * $num1;
                        echo "Result: $result";
                        break;
                    case "divide":
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                            echo "Result: $result";
                        } else {
                            echo "Can't devide by zero";
                        }
                        break;
                }
            }
            ?>
        </div>
    </div>
</body>

</html>