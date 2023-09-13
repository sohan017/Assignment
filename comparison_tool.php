<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checks Given Number is Even or Odd</title>
    <style>
        <?php include "styles.css" ?>
    </style>
</head>

<body>
    <div class="container">
        <h2>Larger Number</h2>
        <h4>Checks Larger Number</h4>
        <form method="post" action="">
            <input type="number" name="number1" placeholder="Input Fast Number" required><br>
            <input type="number" name="number2" placeholder="Input Second Number" required><br>

            <button type="submit">Check Larger</button>
        </form>
        <div id="result">
            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number1  =  $_POST["number1"];
                $number2  =  $_POST["number2"];
                $result = ($number1 > $number2) ? "Fast Input $number1 Is The Larger Number" : ($number1 < $number2 ? "Second Input $number2 Is The Larger Number" : "Zero");
                echo $result;
            }


            // $number1 = 18;
            // $number2 = 34;
            // $result = ($number1 > $number2) ? "$number1 Is The Larger Number" : ($number1 < $number2 ? "$number2 Is The Larger Number" : "Zero");
            // echo $result;

            ?>
        </div>

    </div>
</body>

</html>