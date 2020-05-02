<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "results";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$roll=$_REQUEST["roll"];
$name=$_REQUEST["name"];
$pass=$_REQUEST["pass"];
$cur_sem=$_REQUEST["cur_sem"];
$sem_1=$_REQUEST["sem_1"];
$sem_2=$_REQUEST["sem_2"];
$sem_3=$_REQUEST["sem_3"];
$sem_4=$_REQUEST["sem_4"];
$sem_5=$_REQUEST["sem_5"];
$sem_6=$_REQUEST["sem_6"];
$sem_7=$_REQUEST["sem_7"];
$sem_8=$_REQUEST["sem_8"];
$total_cg=$_REQUEST["total_cg"];
$branch_code=$_REQUEST["branch_code"];

$sql1 = "UPDATE student_result SET name='$name', cur_sem = '$cur_sem', sem_1 = '$sem_1', sem_2 = '$sem_2', sem_3 = '$sem_3', sem_4 = '$sem_4', sem_5 = '$sem_5', sem_6 = '$sem_6', sem_7 = '$sem_7', sem_8 = '$sem_8', total_cgpa = '$total_cg', branch_code='$branch_code' WHERE student_result.rollno = '$roll'";

$sql2 = "UPDATE users SET password = '$pass', user_id='$roll' WHERE users.user_id = '$roll'";

$result1 = $conn->query($sql1);
if($result1){
	echo "<h3 style='color:green'>Update of users was successful</h3>";
}
else{
	echo "<h3 style='color:red;'>Update of user failed</h3>";
}
$result = $conn->query($sql2);
if($result){
	echo "<h3 style='color:green'>Update of results was successful</h3>";
}
else{
	echo "<h3 style='color:red;'>Addition of results failed</h3>";
}
mysqli_close($conn);
header("refresh:1;url=admin.php");
?>