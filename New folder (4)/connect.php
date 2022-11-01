<?php
     $name = $_POST['name'];
     $email = $_POST['email'];
     $number = $_POST['number'];

     //Database connection
     $conn = new mysqli('localhost','root','','conntact');
     if($conn->connect_error){
     	die('connect failed : '.$conn->connect_error);
     }else{
     	$stmt = $conn->cubrid_prepare("insert into conntact(name, email, number) 
     		values(?, ?, ?)");
     	$stmt->bind_param("sssssi",$name $email, $number);
     	$stmt->execute();
     	echo "connect successfully...";
     	$stmt->close();
     	$conn->close();
     }

 ?>