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
    <script src="/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/viewPatient.css">
    <script type="text/javascript" src="/js/jquery.waypoints.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <script src="app.js"></script>
    <script type="text/javascript" src="js/search.js"></script>
    <title>View Patient</title>
</head>

<body>
    <div class="aside">
        <div class="logo">

            <img src="./img/logo.png" alt="logo">
        </div>
        <ul>
            <li><a href="admin.php">Home</a></li>
            <li class="active"><a href="admin_rec.php">Reception</a></li>
            <li><a href="admin_phar.php">Pharmacy</a></li>
            <li><a href="admin_store.php">Store</a></li>
            <li><a href="includes/logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="logo">
            <img src="./img/logo2.png" alt="logo">
        </div>
        <form action="" method="post">
            <div class="dates">
                <div class="pickDate">
                    <div>
                        <label for="birthday">Pick A Date:</label>
                        <input type="date" id="date" name="date">
                    </div>
                </div>
                <div class="formElement">

                    <input type="Search"name="search" id="search" >
                    <input type="submit" class="btn btn_sml" value="Search">
                </div>
            </div>
           
            
        </form>
        <?php

  require("includes/config.php");
 $search = $_REQUEST['search'];
 $sqls =  "SELECT * FROM patient WHERE fnameP LIKE '$search' ORDER BY idP ";
  $sql = "SELECT * FROM patient ORDER BY idP ";
 $results = $con->query($sqls);
 $result = $con->query($sql);
 
    echo " <table id='patient_table' class='table'>
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Sex</th>
                <th>Card No</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Detail</th>
            </thead>";

        if ($results->num_rows >0) {
            $ro = $results->fetch_assoc();   
        $id = $ro["idP"];
        echo $sqls;
        echo $id;
        echo $ro["lnameP"];
        
        
     while($row1 = $results->fetch_assoc()) {
        echo $row1["fnameP"];
        echo "<tbody>
                <tr>
                <td data-label='name'>" . $row1["idP"]. "</td>
                <td data-label='name'>" . $row1["fnameP"]. "</td>
                
                <td data-label='age'> " . $row1["ageP"]. " </td>
             <td data-label='sex'> " . $row1["sex"]. " </td>
              <td data-label='mark'> " . $row1["card_no"]. " </td> 
              <td data-label='status'> " . $row1["telP"]. " </td>  
              <td data-label='status'>".$row1["date_reg"]."</td>

              <td><a href='includes/detail.php?id=".$id." '>Detail</a></td>
              

              </tr>";

    }
     echo "</table>";
    
} 
     

    


        elseif ($result->num_rows >0) {
            $ro = $result->fetch_assoc();   
        $id = $ro["idP"];
        
        
     while($row = $result->fetch_assoc()) {
        
        echo "<tbody>
                <tr>
                <td data-label='name'>" . $row["idP"]. "</td>
                <td data-label='name'>" . $row["fnameP"]. "</td>
                
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
        
    </div>
</body>

</html>