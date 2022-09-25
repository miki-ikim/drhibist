<?php 
//require 'includes/auth.php';
require 'includes/pros.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="./js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/sellhistory.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <script src="app.js"></script>
    <title>Sell History</title>
</head>

<body>
    <div class="aside">
        <div class="logo">

            <img src="./img/logo.png" alt="logo">
        </div>
        <ul>
            <li><a href="admin.php">Home</a></li>
            <li><a href="admin_rec.php">Reception</a></li>
            <li class="active"><a href="admin_phar.php">Pharmacy</a></li>
            <li><a href="admin_store.php">Store</a></li>
            <li><a href="includes/logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="logo">
            <img src="./img/logo2.png" alt="logo">
        </div>
        <form action="#">
            <div class="dates">
                <div class="pickDate">
                    <div>
                        <label for="birthday">Pick A Date:</label>
                        <input type="date" id="date" name="date">
                    </div>
                </div>
                <div class="formElement">
                    <input type="search" name="search" id="search">
                    <input type="submit" class="btn btn_sml" value="Search">
                </div>
            </div>
            
        </form>
        <?php

  require("includes/config.php");

  $sql = "SELECT  * FROM drug";
 $result = $con->query($sql);
 
 
    echo " <table class='table'>
            <thead>
                <th>Name</th>
                <th>Cost</th>
                <th>Quantity</th>
                
                
            </thead>";
        if ($result->num_rows >0) {
     while($row =   $result->fetch_assoc()) {
        echo "<tbody>
                <tr>
                <td data-label='name'>" . $row["nameD"]. "</td>
                
                <td data-label='age'> " . $row["cost"]. " </td>
             <td data-label='sex'> " . $row["qua"]. " </td>
              
             

              </tr>";

    }
    
} 
      echo "</table>";

    

?>
    </div>
</body>

</html>