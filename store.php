<?php 
//require 'includes/auth.php';
require 'includes/pros.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/pharmacy.css">
    <title>Store</title>
</head>
<body>
    <div class="aside">
        <div class="logo">

            <img src="./img/logo.png" alt="logo">
        </div>
        <ul>
            <li ><a href="pharmacy.php">Sell Medicine</a></li>
            <li ><a href="sell_history.php">Selling History</a></li>
            <li class="active"><a href="store.php">Store</a></li>
            <li><a href="viewStore.php">View Store</a></li>
            <li><a href="includes/logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="logo">
            <img src="./img/logo2.png" alt="logo">
        </div>
        <form action="includes/add_store.php" method="post">
            <div class="formElement">
                <input type="text" name="name" id="name" autocomplete="off" required>
                <label for="name" class="labelName"><span class="contentName">Medicine Name</span></label>
            </div>
            <div class="formElement">
                <input type="number" name="cost" id="cost" autocomplete="off" required>
                <label for="name" class="labelName"><span class="contentName">Cost</span></label>
            </div>
            <div class="formElement">
                <input type="number" name="amount" id="amount" autocomplete="off" required>
                <label for="name" class="labelName"><span class="contentName">Amount</span></label>
            </div>
            <div>
                <input type="submit" value="Add To Store" class="btn" name="Login">
            </div>
        </form>


    </div>
</body>
</html>