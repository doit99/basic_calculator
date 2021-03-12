<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
</head>
<body>
    <form action="calculator.php" method="post">
        Num 1: <input type="number" name="num1"> <br>
        Num 2: <input type="number" name="num2"> <br>

        <input type="submit" name="sub" value="Add">
    
    </form>
</body>
</html>

<!-- PHP section -->

<?php

    if (isset($_POST["sub"])) { // if submit is click
        
        // declare and assign variable
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        // add the two numbers
        $result = $num1 + $num2;

        // display result
        echo "Result: " . $result;

    }

?>

