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
<link rel="shortcut icon" href="../../login/img/seal.png">

<?php
//include database connection
include '../../libs/dbconnect.php';
 
// if the form was submitted/posted, update the record
if($_POST){
 
    //write query
    $sql = "UPDATE
                personal_data
            SET
                lastname = ?,
                firstname = ?,
                middlename = ?,
                address  = ?,
                occupation = ?,
                office_address = ?,
                driver_license = ?,
                expiration_date = ?
            WHERE
                personal_dataId= ?";
 
    $stmt = $mysqli->prepare($sql);
 
    // you can bind params this way,
    // if you want to see the other way, see our add.php
    $stmt->bind_param(
        'ssssssssi',
        $_POST['lastname'],
        $_POST['firstname'],
        $_POST['middlename'],
        $_POST['address'],
        $_POST['occupation'],
        $_POST['office_address'],
        $_POST['driver_license'],
        $_POST['expiration_date'],
        $_POST['personal_dataId']
    );
 
    // execute the update statement
    if($stmt->execute()){
        echo "Registration was updated.";
 
        // close the prepared statement
        $stmt->close();
    }else{
        die("Unable to update.");
    }
}
 
/*
 * select the record to be edited,
 * you can also use prepared statement here,
 * but my hosting provider seems it does not support the mysqli get_result() function
 * you can use it like this one http://php.net/manual/fr/mysqli.prepare.php#107568
 
 * so it I'm going to use $mysqli->real_escape_string() this time.
 */
 
$sql = "SELECT
            personal_dataId, lastname, firstname, middlename, address, occupation, office_address, driver_license, expiration_date
        FROM
            personal_data
        WHERE
            personal_dataId = \"" . $mysqli->real_escape_string($_GET['personal_dataId']) . "\"
        LIMIT
            0,1";
 
// execute the sql query
$result = $mysqli->query( $sql );
 
//get the result
$row = $result->fetch_assoc();
 
// php's extract() makes $row['firstname'] to $firstname automatically
extract($row);
 
//disconnect from database
$result->free();
$mysqli->close();
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
              <h3> Add / Register</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container" style="padding-left:10%">
                <div class="widget-content">
                <form action='edit_registration.php?personal_dataId=<?php echo $personal_dataId; ?>' method='post' border='0'>
                  
                
                    <br/>
                                    <input type="text" name="lastname" value='<?php echo $lastname;  ?>' placeholder="Last name" class="form-username form-control" id="form-username">
                                    <input type="text" name="firstname" value='<?php echo $firstname;  ?>' placeholder="First Name" class="form-username form-control" id="form-username">
                                    <input type="text" name="middlename" value='<?php echo $middlename;  ?>' placeholder="Middle Name" class="form-username form-control" id="form-username">
                    <br/>
                                    <input type="text" name="address" value='<?php echo $address;  ?>' placeholder="Full Address" class="form-username form-control" id="form-username" style = "width: 655px">
                    <br/>
                                    <input type="text" name="occupation" value='<?php echo $occupation;  ?>' placeholder="Occupation" class="form-username form-control" id="form-username">
                                    <input type="text" name="office_address" value='<?php echo $office_address;  ?>' placeholder="Office Address" class="form-username form-control" id="form-username"  style = "width: 430px">
                    <br/>
                                    <input type="text" name="driver_license" value='<?php echo $driver_license;  ?>' placeholder="Driver's License Number" class="form-username form-control" id="form-username" style = "width: 430px">
                                    <input type="text" name="expiration_date" value='<?php echo $expiration_date;  ?>' placeholder="Expiration Date" class="form-username form-control" id="form-username">
                    <br/>
                    
                    </div>
                    <!-- /widget-content --> 
                    
    
                
              </div>

              <div style="padding-left:5%; padding-right:5%">
<!---  <table class="table table-bordered">
      <thead>
        <tr>
          <th>Vehicle Make/s</th>
          <th>Plate #</th>
          <th style="width:100px">Year Model</th>
          <th>Color</th>
          <th>Motor #</th>
          <th>Chassis #</th>
          <th>Sticker #</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <td contenteditable></td>
          <td contenteditable></td>
          <td contenteditable></td>
          <td contenteditable></td>
          <td contenteditable></td>
          <td contenteditable></td>
          <td contenteditable></td>
        </tr>
        <tr>
          <td contenteditable></td>
          <td contenteditable></td>
          <td contenteditable></td>
          <td contenteditable></td>
          <td contenteditable></td>
          <td contenteditable></td>
          <td contenteditable></td>
        </tr>
        <tr>
          <td contenteditable></td>
          <td contenteditable></td>
          <td contenteditable></td>
          <td contenteditable></td>
          <td contenteditable></td>
          <td contenteditable></td>
          <td contenteditable></td>
        </tr>


      </tbody>
    </table>-->
        <input type='hidden' name='personal_dataId' value='<?php echo $personal_dataId ?>' />
        <input type="submit" value="Edit" class="btn btn-default btn-lg">
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
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/bootstrap.js"></script>

</body>
</html>
