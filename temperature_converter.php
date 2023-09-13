<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>converts temperatures</title>
    <style>
        <?php include "styles.css" ?>
    </style>
</head>

<body>
    <div class="container">
        <h2>Converts Temperatures</h2>
        <h4>Celsius Or Fahrenheit</h4>
        <form method="post" action="">
            <input type="number" name="num" placeholder="Enter Celsius Or Fahrenheit" required><br>
            <select name="temperatures">
                <option value="celsius">Celsius</option>
                <option value="fahrenheit">Fahrenheit</option>
            </select><br>
            <button type="submit">Converts Temperatures</button>
        </form>
        <div id="result">
            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num =  $_POST["num"];
                $temperatures =  $_POST["temperatures"];

                switch ($temperatures) {

                    case "celsius":
                        $celsius = (($num - 32) * 5) / 9;
                        echo ("Temperature in Celsius is: $celsius °C");
                        break;
                    case "fahrenheit":
                        $fahrenheit = (($num * 9) / 5) + 32;
                        echo ("Temperature in Fahrenheit is: $fahrenheit (°F)");
                        break;
                }
            }
            ?>
        </div>
    </div>
</body>

</html>