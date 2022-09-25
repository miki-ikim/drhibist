<?php 
//require 'includes/auth.php';
require 'includes/pros.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/sellhistory.css">
    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="app.js"></script>
    <title>View Store</title>
</head>
<body>
    <div class="aside">
        <div class="logo">

            <img src="./img/logo.png" alt="logo">
        </div>
        <ul>
            <li ><a href="pharmacy.php">Sell Medicine</a></li>
            <li ><a href="sell_history.php">Selling History</a></li>
            <li><a href="store.php">Store</a></li>
            <li class="active"><a href="viewStore.php">View Store</a></li>
            <li><a href="includes/logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="logo">
            <img src="./img/logo2.png" alt="logo">
        </div>
        <form action="">

            <div class="dates">
                <div class="pickDate">
                    <div>
                        <label for="birthday">Pick A Date:</label>
                        <input type="date" id="date" name="date">
                    </div>
                </div>
                <div class="formElement">
                    <input type="search" name="search" id="search">
                    <input type="submit" value="Search" class="btn btn_sml">
                </div>
            </div>
            
        </form>
<?php

  require("includes/config.php");

  $sql = "SELECT  * FROM store";
 $result = $con->query($sql);
 
 
    echo " <table class='table'>
            <thead>
                <th>Name</th>
                <th>Cost</th>
                <th>Quantity</th>
                <th>Detail</th>
                
                
            </thead>";
        if ($result->num_rows >0) {
     while($row = $result->fetch_assoc()) {
        echo "<tbody>
                <tr>
                <td data-label='name'>" . $row["name"]. "</td>
                
                <td data-label='age'> " . $row["cost"]. " </td>
             <td data-label='sex'> " . $row["quantity"]. " </td>
             <td><a href='includes/detail.php?id= '>Detail</a></td> 
              
             

              </tr>";

    }
    
} 
      echo "</table>";

    

?>

    </div>
</body>
</html>