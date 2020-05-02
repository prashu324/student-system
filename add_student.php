<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "results";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connectio
//echo "Connected successfully";
$userid = $_REQUEST["roll"];
$name=$_REQUEST["name"];
$pass=$_REQUEST["pass"];
$sql1 = "INSERT INTO users (user_id, password, type) VALUES ('$userid', '$pass', '0');";
$result = $conn->query($sql1);
if($result){
	echo "<h3 style='color:green'>Addition of user was successful</h3>";
}
else{
	echo "<h3 style='color:red;'>Addition of user failed</h3>";
}
$sql2 = "INSERT INTO student_result (rollno, name, cur_sem, total_cgpa, branch_code) VALUES ('$userid', '$name','0', '0', '1');";
$result = $conn->query($sql2);
if($result){
	echo "<h3 style='color:green'>Addition of user_result was successful</h3>";
}
else{
	echo "<h3 style='color:red;'>Addition of user_result failed</h3>";
}
mysqli_close($conn);
header("refresh:2;url=admin.php");
?>
