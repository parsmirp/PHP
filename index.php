<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pizza Store</h1>
    <!-- This is a comment -->
   <form action="index.php" method="post">
        <label>quantity: </label><br>
        <input type="text" name="quantity">
        <br>
        <input type="radio" name="credit_card" value="Visa">
        Visa <br>
        <input type="radio" name="credit_card" value="Mastercard">
        Mastercard<br>
        <input type="radio" name="credit_card" value="American Express">
        American Express<br>
        <input type="submit" name="confirm" value="confirm">
   </form>
</body>
</html>
<?php
    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total= null;

    $total = $quantity * $price;

    echo"You have ordered {$quantity} x {$item}/s <br>";
    echo"Your total is: \${$total}<br>"; 

    $credit_card = null;

    if(isset($_POST["credit_card"])){
        $credit_card = $_POST["credit_card"];
    }

    switch($credit_card) {
        case "Visa":
            echo"You selected Visa";
            break;
        case "Mastercard":
            echo"You selected Mastercard";
            break;
        case "American Express":
            echo"You selected American Express";
            break;
        default:
            echo"Please select a card";    
            break;
    }
   ?>

   