<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>register</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">

<!-- CSS -->
<link href="../../css/bootstrap.min.css" rel="stylesheet">
<link href="../../css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
<link href="../../css/font-awesome.css" rel="stylesheet">
<link href="../../css/style.css" rel="stylesheet">
<link href="../../css/register.css" rel="stylesheet">
<link rel="../../shortcut icon" href="../../login/img/seal.png">

<?php
// if the form was submitted
if($_POST){
 
    // connect to database
    include 'libs/dbconnect.php';
 
    // sql query
    $sql = "INSERT INTO
                personal_data (lastname, firstname, middlename, address, occupation, office_address, driver_license, expiration_date)
            VALUES
                (?, ?, ?, ?, ?, ?, ?, ?)";
 
    // if the statement was prepared
    if($stmt = $mysqli->prepare($sql) ){
 
        /*
         * bind the values,
         * "ssss" means 4 string were being binded,
         * aside from s for string, you can also use:
         * i for integer
         * d for decimal
         * b for blob
         */
        $stmt->bind_param(
            "ssssssss",
            $_POST['lastname'],
            $_POST['firstname'],
            $_POST['middlename'],
            $_POST['address'],
            $_POST['occupation'],
            $_POST['office_address'],
            $_POST['driver_license'],
            $_POST['expiration_date']
        );
 
        // execute the insert query
        if($stmt->execute()){
            echo "Registration was saved.";
            $stmt->close();
        }else{
            die("Unable to save.");
        }
 
    }else{
        die("Unable to prepare statement.");
    }
 
    // close the database
    $mysqli->close();
}
 
?>

<?php
// if the form was submitted
if($_POST){
 
    // connect to database
    include 'libs/dbconnect.php';
 
    // sql query
    $sql = "INSERT INTO
                vehicle_data (vehicle_make, plate_no, year_model, color, motor_no, chassis_no, sticker_no)
            VALUES
                (?, ?, ?, ?, ?, ?, ?)";
 
    // if the statement was prepared
    if($stmt = $mysqli->prepare($sql) ){
 
        /*
         * bind the values,
         * "ssss" means 4 string were being binded,
         * aside from s for string, you can also use:
         * i for integer
         * d for decimal
         * b for blob
         */
        $stmt->bind_param(
            "sssssss",
            $_POST['vehicle_make'],
            $_POST['plate_no'],
            $_POST['year_model'],
            $_POST['color'],
            $_POST['motor_no'],
            $_POST['chassis_no'],
            $_POST['sticker_no']
        );
 
        // execute the insert query
        if($stmt->execute()){
            echo "Vehicle was added.";
            $stmt->close();
        }else{
            die("Unable to save.");
        }
 
    }else{
        die("Unable to prepare statement.");
    }
 
    // close the database
    $mysqli->close();
}
 
?>

</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.html">Vehicle Tracking/Monitoring (?) </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">

          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> Sgt. Gazo <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Profile</a></li>
              <li><a href="#">Settings</a></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
        
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li><a href="home.html"><i class="icon-home"></i><span>Home?</span> </a> </li>
        <li><a href="#"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
        <li class="active"><a href="register.php"><i class="icon-file"></i><span>Registration</span> </a></li>
        <li><a href="#"><i class="icon-edit"></i><span>Renew</span> </a> </li>
        <li><a href="#"><i class="icon-bar-chart"></i><span>Vehicle Log</span> </a> </li>
        <li><a href="#"><i class="icon-user"></i><span>Employee Log</span> </a> </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-cog"></i><span>Settings</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">ewan</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span6" style="width:100%">
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> Add Registration</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            <form action='add_registration.php' method='post' border='0'>
            <h2>person info</h2>
              <div class="widget big-stats-container" style="padding-left:10%">
                
                <div class="widget-content">
            
                
                    <br/>
                                    <input type="text" name="lastname" placeholder="Last name" class="form-username form-control" id="form-username">
                                    <input type="text" name="firstname" placeholder="First Name" class="form-username form-control" id="form-username">
                                    <input type="text" name="middlename" placeholder="Middle Name" class="form-username form-control" id="form-username">
                    <br/>
                                    <input type="text" name="address" placeholder="Full Address" class="form-username form-control" id="form-username" style = "width: 655px">
                    <br/>
                                    <input type="text" name="occupation" placeholder="Occupation" class="form-username form-control" id="form-username">
                                    <input type="text" name="office_address" placeholder="Office Address" class="form-username form-control" id="form-username"  style = "width: 430px">
                    <br/>
                                    <input type="text" name="driver_license" placeholder="Driver's License Number" class="form-username form-control" id="form-username" style = "width: 430px">
                                    <input type="text" name="expiration_date" placeholder="Expiration Date" class="form-username form-control" id="form-username">
                    <br/>
                    
                    </div>
                    <!-- /widget-content --> 
              </div>
              <form>
                  <h2>vehicle info</h2>
                    <div class="widget big-stats-container" style="padding-left:10%">
                      
                      <div class="widget-content">
                  
                      
                          <br/>
                              <input type="text" name="vehicle_make" placeholder="Vehicle Make" class="form-username form-control" id="form-username" style = "width: 430px">
                              <input type="text" name="plate_no" placeholder="Plate #" class="form-username form-control" id="form-username" style = "width: 430px">
                          <br/>
                              <input type="text" name="year_model" placeholder="Plate #" class="form-username form-control" id="form-username" style = "width: 430px">
                              <input type="text" name="color" placeholder="Color" class="form-username form-control" id="form-username" style = "width: 430px">
                          <br/>
                              <input type="text" name="motor_no" placeholder="Motor #" class="form-username form-control" id="form-username" style = "width: 430px">
                              <input type="text" name="chassis_no" placeholder="Chassis #" class="form-username form-control" id="form-username"  style = "width: 430px">
                          <br/>
                              <input type="text" name="sticker_no" placeholder="Sticker #" class="form-username form-control" id="form-username" style = "width: 430px">
                          <br/>
                          
                          </div>
                          <input type="submit" value="Add" class="btn btn-default btn-lg">
                          <!-- /widget-content --> 
                    </div>
              </form>

              <div style="padding-left:5%; padding-right:5%">


<?php
//include database connection
include 'libs/dbconnect.php';
 
$action = isset($_GET['action']) ? $_GET['action'] : "";
 
//if the user clicked ok, run our delete query
if($action=='deleted'){
    echo "vehicle was deleted.";
}
 
$query = "SELECT * FROM vehicle_data ORDER BY vehicle_dataId";
$result = $mysqli->query( $query );
 
$num_results = $result->num_rows;
 
if( $num_results ){
 
    // html table
    echo "<table border='1' class='table table-bordered'>";
 
        // table heading
        echo "<tr>";
            echo "<th>Vehicle Make</th>";
            echo "<th>Plate Number</th>";
            echo "<th>Year Model</th>";
            echo "<th>Color</th>";
            echo "<th>Motor Number</th>";
            echo "<th>Chassis Number</th>";
            echo "<th>Sticker Number</th>";
            echo "<th>Action</th>";
        echo "</tr>";
 
    //loop to show each records
    while( $row = $result->fetch_assoc() ){
 
        //extract row
        //this will make $row['firstname'] to just $firstname only
        extract($row);
 
        //creating new table row per record
        echo "<tr>";  
            echo "<td>{$vehicle_make}</td>";
            echo "<td>{$plate_no}</td>";
            echo "<td>{$year_model}</td>";
            echo "<td>{$color}</td>";
            echo "<td>{$motor_no}</td>";
            echo "<td>{$chassis_no}</td>";
            echo "<td>{$sticker_no}</td>";
            echo "<td>";
                echo "<a href='edit_vehicle.php?vehicle_dataId={$vehicle_dataId}'>Edit</a>";
                echo " / ";
 
                // delete_user is a javascript function, see at the bottom par of the page
                echo "<a href='#?vehicle_dataId=' onclick='delete_user( {$vehicle_dataId} );'>Delete</a>";
            echo "</td>";
        echo "</tr>";
    }
 
    //end table
    echo "</table>";
 
}
 
//if table is empty
else{
    echo "No records found.";
}
 
//disconnect from database
$result->free();
$mysqli->close();
?>

        <input type="submit" value="Submit" class="btn btn-default btn-lg">
    </form>
    </div>

            </div>
          </div>
          <!-- /widget -->
          

          <!-- /widget --> 
        </div>
        <!-- /span6 -->

        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
<div class="extra">
  <div class="extra-inner">
    <div class="container">
      <div class="row">
                    <div class="span3">
                        <h4>
                            PMA bla bla</h4>
                        <ul>
                            <li><a>adaw</a></li>
                            <li><a>sfesf</a></li>
                            <li><a>sffdwf</a></li>

                        </ul>
                    </div>
                    <!-- /span3 -->
                    
                </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /extra-inner --> 
</div>
<!-- /extra -->
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"><a>footer</a>. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 


<!-- Javascript -->
<script type='text/javascript'>
function delete_user( vehicle_dataId ){
 
    var answer = confirm('Are you sure?');
 
    //if user clicked ok
    if ( answer ){
        //redirect to url with action as delete and id to the record to be deleted
        window.location = 'delete_vehicle.php?vehicle_dataId=' + vehicle_dataId;
    }
}
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/bootstrap.js"></script>

</body>
</html>
