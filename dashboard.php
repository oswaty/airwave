<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Cloud Sound System</title>
	<link rel="icon" 
      type="image/png" 
      href="assets/img/logo.png">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    <script>
    	<?php
    		session_start();
            if (!isset($_SESSION["user_id"]))
            {
                header("location: login.php");
            }
    	?>
    	//var user_id = <?php echo $_SESSION["user_id"];?>;
    	//window.alert(user_id);
    </script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

	</head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="dashboard.html" class="logo"><b>Cloud Sound System</b></a>
            <!--logo end-->
            <!--
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
            	</ul>
            </div>
			-->
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/find_user.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Marcel Newman</h5>
              	  	
                  <li class="mt">
                      <a href="dashboard.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="mt">
                      <a href="#">
                          <i class="glyphicon glyphicon-file"></i>
                          <span>File Manager</span>
                      </a>
                  </li>

                 <li class="mt">
                      <a  href="#">
                          <i class="glyphicon glyphicon-media"></i>
                          <span>Media player</span>
                      </a>
                  </li>
				  
                  <li class="mt">
                      <a  href="profile.html">
                          <i class="fa fa-user"></i>
                          <span>Profile</span>
                      </a>
                  </li>
				  <li class="mt">
                      <a href="adminpanel.html">
                          <i class="fa fa-logout"></i>
                          <span>Admin Panel</span>
                      </a>
                  </li>
				  <li class="mt">
                      <a href="lock_screen.html">
                          <i class="fa fa-lock"></i>
                          <span>Lock Screen</span>
                      </a>
                  </li>
                 <li class="mt">
                      <a href="backend/end_session.php">
                          <i class="glyphicon glyphicon-log-out"></i>
                          <span>Logout</span>
                      </a>
                  </li>
				  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
           <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

                    <div class="row mt">
                      <!-- SERVER STATUS PANELS -->
                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn donut-chart">
                      			<div class="white-header">
						  			<h5>Speaker 1</h5></div>
									<div>
								     <div class="col-8 col-sm-6">
                                        <img src="Photos/WIFI.png" width="130px" height="130px" style="margin-right:500px;"/>
                                     </div>
                                     <div class="col-4 col-sm-6">
                                        <h3 id="country">Counry:lasd</h3>
                                        <h3 id="city">City:asdas</h3>
                                        <input type="range" name="price-min" id="price-min"  min="0" max="50"><br>
                                        <label class="switch">
                                          <input type="checkbox">
                                          <div class="slider round"></div>
                                        </label>
                                     </div>
                      			</div>
								<!-- speaker info-->
							</div><! --/grey-panel -->
                      	</div>
                      	

                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn">
                      			<div class="white-header">
						  			<h5>Speaker 2</h5>
                      			</div>
								<!-- speaker info-->

	                      		</div>
                      	</div>
                      	
                      	
						<div class="col-md-4 mb">
							<!-- WHITE PANEL - TOP USER -->
							<div class="white-panel pn">
								<div class="white-header">
									<h5>Speaker 3</h5>
								</div>
								<!-- speaker info-->
							</div>
						</div><!-- /col-md-4 -->
                      	

                    </div><!-- /row -->
					<div class="pull-right">
                 	<button class="btn btn-primary btn-md" data-toggle="modal" href="dashboard.html#myModal"><i class="glyphicon glyphicon-plus"></i> Add Speaker</button>
					</div>
					</section>
      </section>
<!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Add Speaker</h4>
		                      </div>
							  <div class="alert alert-success">
							  <Strong> Success! </strong>
							  Your Speaker has been added successfully!
							  </div>
							  <div class="alert alert-danger">
							  <Strong> Error! </strong>
							  R-enter your serila number!
							  </div>
							  <form id="addspeaker" method="Get">
		                      <div class="modal-body">
		                          <p>Enter the serila number below to add new speaker.</p>
		                          <input type="text" name="serialnumber" placeholder="Serial Number" autofocus autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <form id="addspeaker">
							  <div class="modal-footer">
							      <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button data-dismiss="modal" class="btn btn-theme" href="dashboard.html" type="submit">Ok</button>
		                      </div>
							  </form>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
      
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
