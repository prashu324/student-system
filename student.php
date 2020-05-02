<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "results";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
//echo "Connected successfully";
$roll = $_REQUEST["roll"];

$sql = "select * from student_result where rollno='$roll'";
$result = $conn->query($sql);
$row=$result->fetch_assoc();
$name = $row["name"];
?>
<!DOCTYPE html>

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
                    <strong><?php echo $name; ?> | </strong>
                    <a href="index.html"><strong>Logout</strong></a>
                </div>

            </div>
        </div>
    </header>
<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line"><?php echo $name; ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel <?php if($row["total_cgpa"] > 6.0) echo 'panel-success'; else echo 'panel-danger'; ?>">
                        <div class="panel-heading">
                            Total CGPA
                        </div>
                        <div class="panel-body">
                            <h1><?php echo $row["total_cgpa"]; ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Grade Card</h4>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Semester</th>
                                <th>SGPA</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr>
                            <td>1</td>
                            <td><?php echo $row["sem_1"]; ?></td>
                           </tr>
                            <tr>
                            <td>2</td>
                            <td><?php echo $row["sem_2"]; ?></td>
                           </tr>
                            <tr>
                            <td>3</td>
                            <td><?php echo $row["sem_3"]; ?></td>
                           </tr>
                             <tr>
                            <td>4</td>
                            <td><?php echo $row["sem_4"]; ?></td>
                           </tr>
                            <tr>
                            <td>5</td>
                            <td><?php echo $row["sem_5"]; ?></td>
                           </tr>
                           <tr>
                            <td>6</td>
                            <td><?php echo $row["sem_6"]; ?></td>
                           </tr>
                            <tr>
                            <td>7</td>
                            <td><?php echo $row["sem_7"]; ?></td>
                           </tr>
                            <tr>
                            <td>8</td>
                            <td><?php echo $row["sem_8"]; ?></td>
                           </tr>
                        </tbody>
                    </table>
                    </div>
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
    <?php mysqli_close($conn); ?>
</body>
</html>
