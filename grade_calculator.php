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
        <h2>Grade Calculator</h2>
        <h4>Test Scores Grading Calculator</h4>
        <form method="post" action="">
            <input type="number" name="bangla" placeholder="Bangla Test Scores" required><br>
            <input type="number" name="english" placeholder="English Test Scores" required><br>
            <input type="number" name="math" placeholder="Math Test Scores" required><br>

            <button type="submit">Grade Calculator</button>
        </form>
        <div id="result">
            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $bangla  =  $_POST["bangla"];
                $english =  $_POST["english"];
                $math    =  $_POST["math"];

                $average  = ($bangla + $english + $math) / 3;

                if ($average >= 80 && $average < 101) {
                    echo "Your Average Score $average and You Got A+ Grade";
                } elseif ($average >= 70 && $average < 80) {
                    echo "Your Average Score $average and You Got A Grade";
                } elseif ($average >= 60 && $average < 70) {
                    echo "Your Average Score $average and You Got A- Grade";
                } elseif ($average >= 50 && $average < 60) {
                    echo "Your Average Score $average and You Got B Grade";
                } elseif ($average >= 40 && $average < 50) {
                    echo "Your Average Score $average and You Got C Grade";
                } elseif ($average >= 33 && $average < 40) {
                    echo "Your Average Score $average and You Got D Grade";
                } else {
                    echo "Your Average Score $average and You Got F Grade";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>