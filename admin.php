
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
	                           <strong>ADD STUDENT </strong><i class="fa fa-user-plus login-icon"></i>
	                        </div>
	                        <div class="panel-body">
	                       <form action="add_student.php">
						  <div class="form-group">
						    <label for="exampleInputEmail1">Roll No</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter roll number" name="roll">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Name</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
						  </div>
						  <button type="submit" class="btn btn-success"><i class="fa fa-user-plus "></i> &nbsp;Add</button>

						</form>
					 </div>
					</div>
                        </div>			
                    </div>
                    <div class="col-md-6">
						<div class="alert alert-danger">
                          <div class="panel panel-default">
	                        <div class="panel-heading" style="font-size:20;">
	                           <strong>UPDATE/VIEW STUDENT DETAILS </strong>
	                        </div>
	                        <div class="panel-body">
	                       <form action="update_student.php">
						  <div class="form-group">
						    <label for="exampleInputEmail1">Roll No</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter roll number" name="roll">
						  </div>
						  <button type="submit" class="btn btn-success">GO &nbsp; ></button>

						</form>
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
     
</body>
</html>
