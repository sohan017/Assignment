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
        <h2>Weather Report</h2>
        <h4>Check Your Weather Report</h4>
        <form method="post" action="">
            <input type="number" name="temperature" placeholder="Temperature Input Here" required><br>

            <button type="submit">Weather Report</button>
        </form>
        <div id="result">
            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $temperature  =  $_POST["temperature"];

                if ($temperature > 30) {
                    echo "It's warm.";
                } elseif ($temperature > 5 && $temperature < 29) {
                    echo "It's cool.";
                } else {
                    echo "It's freezing!";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>