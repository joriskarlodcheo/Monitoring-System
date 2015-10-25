<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home?View?</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/register.css" rel="stylesheet">
    <link href="css/modal.css" rel="stylesheet">
    <link rel="shortcut icon" href="login/img/seal.png">
</head>

<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="index.html">Vehicle Tracking/Monitoring (?) </a>
                <div class="nav-collapse">
                    <ul class="nav pull-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-user"></i> Sgt. Gazo
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Profile</a>
                                </li>
                                <li>
                                    <a href="#">Settings</a>
                                </li>
                                <li>
                                    <a href="#">Logout</a>
                                </li>
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
                    <li class="active"><a href="home.html"><i class="icon-home"></i><span>Home</span> </a> </li>
                    <li><a href="#"><i class="icon-list-alt"></i><span>Reports</span> </a> </li>
                    <li><a href="#"><i class="icon-credit-card"></i><span>Accounting</span> </a> </li>
                    <li><a href="#"><i class="icon-retweet"></i><span>Visitors</span> </a> </li>
                    <li><a href="#"><i class="icon-bar-chart"></i><span>Vehicle Log</span> </a> </li>
                    <li><a href="#"><i class="icon-user"></i><span>Employee Log</span> </a> </li>
                    <li><a href="#"><i class="icon-user"></i><span>Administrator</span> </a> </li>
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
                            <div class="widget-header">
                                <i class="icon-list-alt"></i>
                                <h3> List</h3>
                            </div>
                            <!-- /widget-header -->
                            <div class="widget-content">
                                <div style="padding-left:5%; padding-top:2%">
                                    <form class="navbar-form navbar-left" role="search">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name / Plate Number">
                                            <button style="margin-top:4px; margin-left:3px" type="button" class="btn btn-default btn-lg">
                                                <span class="icon-search" aria-hidden="true"></span> Search

                                            </button>
                                        </div>
                                    </div>
                                    <hr/>

                                    <?php include 'homeModal/register.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="widget big-stats-container" style="padding-left:10%">
                        <br/>
                        <!-- /widget-content -->
                    </div>


                    <div style="padding-left:5%; padding-right:5%">



                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Occupation</th>
                                    <th>Office Address</th>
                                    <th>Driver's License Number</th>
                                    <th>Expiration Date</th>
                                    <th>Vehicle</th>
                                    <th>Class</th>
                                    <th>Status</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody data-link="row" class="rowlink">
                                <tr>
                                    <td>
                                        Lim, Marc Jaztinn G.
                                    </td>
                                    <td>Mars</td>
                                    <td>wadd</td>
                                    <td>dwadaw</td>
                                    <td>dwadaw</td>
                                    <td>dwawda</td>
                                    <td>dwawda</td>
                                    <td>dwawda</td>
                                    <td>dwawda</td>
                                    <td><?php include 'homeModal/edit.php'; ?></td>
                                    <td><?php include 'homeModal/view.php'; ?></td>
                                    <td><?php include 'homeModal/renew.php'; ?></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><?php include 'homeModal/edit.php'; ?></td>
                                    <td><?php include 'homeModal/view.php'; ?></td>
                                    <td><?php include 'homeModal/renew.php'; ?></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><?php include 'homeModal/edit.php'; ?></td>
                                    <td><?php include 'homeModal/view.php'; ?></td>
                                    <td><?php include 'homeModal/renew.php'; ?></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><?php include 'homeModal/edit.php'; ?></td>
                                    <td><?php include 'homeModal/view.php'; ?></td>
                                    <td><?php include 'homeModal/renew.php'; ?></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><?php include 'homeModal/edit.php'; ?></td>
                                    <td><?php include 'homeModal/view.php'; ?></td>
                                    <td><?php include 'homeModal/renew.php'; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="btn-group pull-right" style="padding:5%">
                        <button type="button" class="btn btn-default">Page 1</button>
                        <button type="button" class="btn btn-default">2</button>
                        <button type="button" class="btn btn-default">3</button>
                        <button type="button" class="btn btn-default">4</button>
                        <button type="button" class="btn btn-default">5</button>
                        <button type="button" class="btn btn-default">Last</button>
                    </div>
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
                            <li>
                                <a>adaw</a>
                            </li>
                            <li>
                                <a>sfesf</a>
                            </li>
                            <li>
                                <a>sffdwf</a>
                            </li>
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
                    <div class="span12">
                        <a>footer</a>.
                    </div>
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
    <script src="js/rowlink.min.js"></script>
    <script src="js/modal.min.js"></script>

</body>

</html>