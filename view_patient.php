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
    <link rel="stylesheet" href="css/viewPatient.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <script src="app.js"></script>
    <title>View Patient</title>
</head>

<body>
    <div class="aside">
        <div class="logo">

            <img src="./img/logo.png" alt="logo">
        </div>
        <ul>
            <li><a href="reception.php">Add Patient</a></li>
            <li class="active"><a href="view_patient.php">View Patient</a></li>
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
            
                
            </span>
            <?php

  require("includes/config.php");
  
  $sql = "SELECT * FROM patient ORDER BY idP ";
 $result = $con->query($sql);
 
 
    echo " <table id='patient_table' class='table'>
            <thead>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Sex</th>
                <th>Card No</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Detail</th>
            </thead>";
        if ($result->num_rows >0) {
            $ro = $result->fetch_assoc();   
        $id = $ro["idP"];
        
        
     while($row = $result->fetch_assoc()) {
        
        echo "<tbody>
                <tr>
                <td data-label='name'>" . $row["idP"]. "</td>
                <td data-label='name'>" . $row["fnameP"]. "</td>
                <td data-label='name'>" . $row["lnameP"]. "</td>
                <td data-label='age'> " . $row["ageP"]. " </td>
             <td data-label='sex'> " . $row["sex"]. " </td>
              <td data-label='mark'> " . $row["card_no"]. " </td> 
              <td data-label='status'> " . $row["telP"]. " </td>  
              <td data-label='status'>".$row["date_reg"]."</td>

              <td><a href='includes/detail.php?id=".$id." '>Detail</a></td>
              

              </tr>";

    }
    
} 
      echo "</table>";

    

?>
        </form>
    </div>
</body>

</html>