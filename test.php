<?php
require_once 'config.php';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$num_per_page = 10;
$start_from = ($page-1) * 10;

$query = "select * from page limit $start_from, $num_per_page";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        th {
            padding: 1rem;
        }

        td {

            padding: 1rem;
        }
        .pages{
            padding: 1rem;
            background: #000;
            color: #fff;
            font-size: 1.2rem;
            text-decoration: none;
            margin-right: 1rem;

        }
        .pages:hover{
            background: #888;
            color: #000;
        }
        .pages:{
            background: #888;
            color: #000;

        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td>User Id</td>
            <td>User Name</td>
            <td>Email</td>
        </tr>
        <tr>
            <?php
while ($row = mysqli_fetch_assoc($result)) {

    ?>

            <td><?php echo $row['Id'] ?> </td>
            <td><?php echo $row['Name'] ?></td>
            <td><?php echo $row['Email'] ?></td>

        </tr>
        <?php
}
?>
    </table>

    <?php

$pr_query = "select * from page";
$pr_result = mysqli_query($con, $pr_query);
$total_record = mysqli_num_rows($pr_result);

$total_pages = ceil($total_record / $num_per_page);

if ($page > 1) {
    echo "<a class='pages' href= 'test.php?page=" . ($page - 1) . "'>Previous</a>";
}

for ($i = 1; $i <= $total_pages; $i++) {

     echo "<a class='pages' href= 'test.php?page=" . $i . "'>$i</a>";
}
if ($i > $page) {
    echo "<a class='pages' href= 'test.php?page=" . ($page + 1) . "'>Next</a>";
}

?>
</body>

</html>