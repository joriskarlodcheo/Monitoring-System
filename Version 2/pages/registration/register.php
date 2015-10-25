<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>register</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">

<!-- CSS -->
<link href="../../css/bootstrap.min.css" rel="stylesheet">
<link href="..css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
<link href="../../css/font-awesome.css" rel="stylesheet">
<link href="../../css/style.css" rel="stylesheet">
<link href="../../css/register.css" rel="stylesheet">
<link rel="shortcut icon" href="../../login/img/seal.png">


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
        <li><a href="../../home.html"><i class="icon-home"></i><span>Home</span> </a> </li>
        <li><a href="#"><i class="icon-search"></i><span>Search</span> </a> </li>
        <li class="active"><a href="register.php"><i class="icon-file"></i><span>Registration</span> </a></li>
        <li><a href="#"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
        <li><a href="#"><i class="icon-credit-card"></i><span>Accounting</span> </a> </li>
        <li><a href="#"><i class="icon-retweet"></i><span>Visitors</span> </a> </li>
        <li><a href="#"><i class="icon-bar-chart"></i><span>Vehicle Log</span> </a> </li>
        <li><a href="#"><i class="icon-user"></i><span>Employee Log</span> </a> </li>
        <li><a href="#"><i class="icon-user"></i><span>Administrator</span> </a> </li>
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
              <h3>Registration</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container" style="">
                <div class="widget-content">
<?php
//include database connection
include '../../libs/dbconnect.php';
 
$action = isset($_GET['action']) ? $_GET['action'] : "";
 
//if the user clicked ok, run our delete query
if($action=='deleted'){
    echo "Registration was deleted.";
}
 
$query = "SELECT * FROM personal_data ORDER BY personal_dataId";
$result = $mysqli->query( $query );
 
$num_results = $result->num_rows;
 
echo "<div><a href='add_registration.php'>Add Registration</a></div>";
 
if( $num_results ){
 
    // html table
    echo "<table border='1' class='table table-bordered'>";
 
        // table heading
        echo "<tr>";
            echo "<th>Personal Data ID</th>";
            echo "<th>Lastname</th>";
            echo "<th>Firstname</th>";
            echo "<th>Middlename</th>";
            echo "<th>Address</th>";
            echo "<th>Occupation</th>";
            echo "<th>Office Address</th>";
            echo "<th>Driver Licence</th>";
            echo "<th>Expiration Date</th>";
            echo "<th>Action</th>";
        echo "</tr>";
 
    //loop to show each records
    while( $row = $result->fetch_assoc() ){
 
        //extract row
        //this will make $row['firstname'] to just $firstname only
        extract($row);
 
        //creating new table row per record
        echo "<tr>";
            echo "<td>{$personal_dataId}</td>";   
            echo "<td>{$lastname}</td>";
            echo "<td>{$firstname}</td>";
            echo "<td>{$middlename}</td>";
            echo "<td>{$address}</td>";
            echo "<td>{$occupation}</td>";
            echo "<td>{$office_address}</td>";
            echo "<td>{$driver_license}</td>";
            echo "<td>{$expiration_date}</td>";
            echo "<td>";
                echo "<a href='edit_registration.php?personal_dataId={$personal_dataId}'>Edit</a>";
                echo " / ";
 
                // delete_user is a javascript function, see at the bottom par of the page
                echo "<a href='#?personal_dataId=' onclick='delete_user( {$personal_dataId} );'>Delete</a>";
                echo " / ";
                echo "<a href=''>View</a>";
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
                
                </div>
                <!-- /widget-content --> 

    
                
              </div>

              <div style="padding-left:5%; padding-right:5%">



      </tbody>
    </table>
</button>
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
function delete_user( personal_dataId ){
 
    var answer = confirm('Are you sure?');
 
    //if user clicked ok
    if ( answer ){
        //redirect to url with action as delete and id to the record to be deleted
        window.location = 'delete_registration.php?personal_dataId=' + personal_dataId;
    }
}
</script>
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/bootstrap.js"></script>

</body>
</html>
