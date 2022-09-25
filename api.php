<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "bank";

$conn = mysqli_connect($server, $user, $password, $db);
$response = array();

if($conn){
	$sql="SELECT * FROM `ct`;"
    $result = mysqli_query($conn,$sql);
    if($result){
    	$i=0;
    	while (mysqli_fetch_assoc($result) {
    		# code...
    		$response[$i]['id'] = $row;
    		$response[$i]['nam'] = $row;

    		$i++;
    	}
    	echo json_encode($response,JESON_PRETTY_PRINT);
    }
}
else{
	echo "error";
}
?>