<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "results";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$roll = $_REQUEST["roll"];

$sql1 = "select * from student_result where rollno='$roll'";
$sql2 = "select * from users where user_id='$roll'";
$result1 = $conn->query($sql1);
$row1=$result1->fetch_assoc();
$name = $row1["name"];
$result2 = $conn->query($sql2);
$row2=$result2->fetch_assoc();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Student Result Panel</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Admin | </strong>
                    <a href="admin.php"><strong>Back</strong></a>
                    <strong> | </strong>
                    <a href="index.html"><strong>Logout</strong></a>
                </div>

            </div>
        </div>
    </header>
    <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-warning">
                        <div class="panel panel-default">
	                        <div class="panel-heading" style="font-size:20;">
	                           <strong>UPDATE DETAILS of <?php echo $name; ?></strong> &nbsp;<i class="fa fa-edit "></i>
	                        </div>
	                        <div class="panel-body">
	                       <form action="update_student_sql.php">
						  <div class="form-group">
						    <label for="rollno">Roll No</label>
						    <input type="text" class="form-control" id="rollno" value="<?php echo $row2["user_id"]; ?>" placeholder="Enter roll number" name="roll">
						  </div>
						  <div class="form-group">
						    <label for="name_">Name</label>
						    <input type="text" class="form-control" id="name_" value="<?php echo $row1["name"]; ?>" placeholder="Enter name" name="name">
						  </div>
						  <div class="form-group">
						    <label for="password_">Password</label>
						    <input type="text" class="form-control" id="password_" value="<?php echo $row2["password"]; ?>" placeholder="Password" name="pass">
						  </div>
                          <div class="form-group">
                            <label for="cur_sem">Current Semester</label>
                            <input type="number" class="form-control" id="cur_sem" value="<?php echo $row1["cur_sem"]; ?>" placeholder="0.0" name="cur_sem">
                          </div>
                          <div class="form-group">
                            <label for="sem_1">Semester 1</label>
                            <input type="float" class="form-control" id="sem_1" value="<?php echo $row1["sem_1"]; ?>" placeholder="0.0" name="sem_1">
                          </div>
                            <div class="form-group">
                            <label for="sem_2">Semester 2</label>
                            <input type="float" class="form-control" id="sem_2" value="<?php echo $row1["sem_2"]; ?>" placeholder="0.0" name="sem_2">
                          </div>
                          <div class="form-group">
                            <label for="sem_3">Semester 3</label>
                            <input type="float" class="form-control" id="sem_3" value="<?php echo $row1["sem_3"]; ?>" placeholder="0.0" name="sem_3">
                          </div>
                          <div class="form-group">
                            <label for="sem_4">Semester 4</label>
                            <input type="float" class="form-control" id="sem_4" value="<?php echo $row1["sem_4"]; ?>" placeholder="0.0" name="sem_4">
                          </div>
                          <div class="form-group">
                            <label for="sem_5">Semester 5</label>
                            <input type="float" class="form-control" id="sem_5" value="<?php echo $row1["sem_5"]; ?>" placeholder="0.0" name="sem_5">
                          </div>
                          <div class="form-group">
                            <label for="sem_6">Semester 6</label>
                            <input type="float" class="form-control" id="sem_6" value="<?php echo $row1["sem_6"]; ?>" placeholder="0.0" name="sem_6">
                          </div>
                          <div class="form-group">
                            <label for="sem_7">Semester 7</label>
                            <input type="float" class="form-control" id="sem_7" value="<?php echo $row1["sem_7"]; ?>" placeholder="0.0" name="sem_7">
                          </div>
                          <div class="form-group">
                            <label for="sem_8">Semester 8</label>
                            <input type="float" class="form-control" id="sem_8" value="<?php echo $row1["sem_8"]; ?>" placeholder="0.0" name="sem_8">
                          </div>
                          <div class="form-group">
                            <label for="total_cg">Total CGPA</label>
                            <input type="float" class="form-control" id="total_cg" value="<?php echo $row1["total_cgpa"]; ?>" placeholder="0.0" name="total_cg">
                          </div>
                          <div class="form-group">
                            <label for="branch_code">Branch code</label>
                            <input type="number" class="form-control" id="branch_code" value="<?php echo $row1["branch_code"]; ?>" placeholder="0.0" name="branch_code">
                          </div>
						  <button type="submit" class="btn btn-success"><i class="fa fa-edit "></i> &nbsp;Update</button>
                          
						</form>
                        <a href="admin.php"><button class="btn btn-primary">< &nbsp;Back</button></a>
					 </div>
					</div>
                        </div>			
                    </div>
 <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2017 Prasanth | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  <?php mysqli_close($conn); ?> -->
</body>
</html>
