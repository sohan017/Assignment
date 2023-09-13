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
        <h2>Even or Odd</h2>
        <h4>Checks Given Number is Even or Odd</h4>
        <form method="post" action="">
            <input type="number" name="number" placeholder="Input Number" required><br>

            <button type="submit">Check</button>
        </form>
        <div id="result">
            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number  =  $_POST["number"];
                $check   = $number % 2;
                if ($check == 0) {
                    echo "<b>$number</b> is even number";
                } else {
                    echo "<b>$number</b> is Odd number";
                }
            }
            ?>
        </div>

    </div>
</body>

</html>