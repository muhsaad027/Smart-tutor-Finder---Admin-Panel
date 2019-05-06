<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Home Tuition Admin Panele">
    <meta name="author" content="Farheen">
    <meta name="keyword" content=" Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>HOME TUITION -Admin Panel</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">

    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
     
      <header class="header white-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>

            <!--logo start-->
            <a href="http://hometuition.ahmedgraf.com/sub-home.php" class="logo">HOME<span> </span> <span class="lite">TUITION</span></a>
           
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="sub-home.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                 <li class="sub-menu">
                      <a class="" href="sub-tutor.php">
                          <i class="icon_profile"></i>
                          <span>Tutor Info</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="" href="sub-student.php">
                          <i class="icon_profile"></i>
                          <span>Student Info</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">  
                          <a class="" href="sub-course.php">
                              <i class="icon_book_alt"></i>
                          <span>Course Detail</span>
                         </a>
                  </li> 
                  <li class="sub-menu">
                      <a class="" href="sub-tuition.php">
                         <i class="icon_check_alt2"></i>
                          <span>Tuition Overview</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="" href="sub-tutor_has_courses.php">
                          <i class="icon_document_alt"></i>
                          <span>Tutor has Courses</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="" href="http://hometuition.ahmedgraf.com/">
                          <i class="icon_close_alt2"></i>
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
              <!--overview start-->
              <div class="row state-overview">
                  
                <!-- statics start -->
                <div class="state col-lg-12">
                    <div class="row">
                     <?php
                          $dbname = "schehe5_htdatabase";
                          $conn = mysql_connect("localhost:3306", "schehe5_htadmin", "saad2025110");
                          if(!$conn) {
                              die('could not connect: '. mysql_error());
                          }
                          
                          mysql_select_db($dbname);
                          
                          $query = "SELECT COUNT(Tuition.idTuition) From Tuition";
                          
                          $data = mysql_query($query, $conn);
                          if(!$data) {

                              die("could not get the data: " . mysql_error());
                          }
                          
                         
                          
                          while($row = mysql_fetch_assoc($data)){ 
                               
                          ?>
                      <div class="col-lg-3 col-sm-6">
                          <section class="panel">
                              <div class="symbol">
                                  <i class="icon_house_alt"></i>
                              </div>
                              <div class="value">
                                  <h1><?php echo $row['COUNT(Tuition.idTuition)']; ?></i></h1>
                                  <p>Number of Total Tuition</p>
                              </div>
                              <?php
                                  }
                                  mysql_close($conn);
                              ?>
                          </section>
                      </div>
                      <?php
                          $dbname = "schehe5_htdatabase";
                          $conn = mysql_connect("localhost:3306", "schehe5_htadmin", "saad2025110");
                          if(!$conn) {
                              die('could not connect: '. mysql_error());
                          }
                          
                          mysql_select_db($dbname);
                          
                          $query = "SELECT COUNT(Courses.idCourses) From Courses";
                          
                          $data = mysql_query($query, $conn);
                          if(!$data) {

                              die("could not get the data: " . mysql_error());
                          }
                          
                         
                          
                          while($row = mysql_fetch_assoc($data)){ 
                               
                          ?>
                      <div class="col-lg-3 col-sm-6">
                          <section class="panel">
                              <div class="symbol">
                                  <i class="icon_book_alt"></i>
                              </div>
                              <div class="value">
                                  <h1><?php echo $row['COUNT(Courses.idCourses)']; ?></i></h1>
                                  <p>Number of Courses</p>
                              </div>
                              <?php
                                  }
                                  mysql_close($conn);
                              ?>
                          </section>
                      </div>
                      <?php
                          $dbname = "schehe5_htdatabase";
                          $conn = mysql_connect("localhost:3306", "schehe5_htadmin", "saad2025110");
                          if(!$conn) {
                              die('could not connect: '. mysql_error());
                          }
                          
                          mysql_select_db($dbname);
                          
                          $query = "SELECT COUNT(Student.idStudent) From Student";
                          
                          $data = mysql_query($query, $conn);
                          if(!$data) {

                              die("could not get the data: " . mysql_error());
                          }
                          
                         
                          
                          while($row = mysql_fetch_assoc($data)){ 
                               
                          ?>
                         
                      <div class="col-lg-3 col-sm-6">
                          <section class="panel">
                              <div class="symbol">
                                  <i class="icon_profile"></i>
                              </div>
                              <div class="value">
                                  <h1><?php echo $row['COUNT(Student.idStudent)']; ?></i></h1>
                                  <p>Number of Students</p>
                              </div>
                               <?php
                                  }
                                  mysql_close($conn);
                              ?>
                          </section>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                          <section class="panel">
                              <div class="symbol">
                                  <i class="icon_profile"></i>
                              </div>
                               <?php
                          $dbname = "schehe5_htdatabase";
                          $conn = mysql_connect("localhost:3306", "schehe5_htadmin", "saad2025110");
                          if(!$conn) {
                              die('could not connect: '. mysql_error());
                          }
                          
                          mysql_select_db($dbname);
                          
                          $query = "SELECT COUNT(Tutor.idTutor) From Tutor";
                          
                          $data = mysql_query($query, $conn);
                          if(!$data) {

                              die("could not get the data: " . mysql_error());
                          }
                          
                         
                          
                          while($row = mysql_fetch_assoc($data)){ 
                               
                          ?>
                              <div class="value">
                                  <h1><?php echo $row['COUNT(Tutor.idTutor)']; ?></i></h1>
                                  <p>Number of Tutors</p>
                              </div>
                          </section>
                      </div>
                    </div>

                  <?php
                                  }
                                  mysql_close($conn);
                              ?>
                   <div class="row">
            </div>
            
            
        
            <!-- project team & activity start -->
              <div class="row">
                  <div class="col-lg-8">
                      <!--project team start-->
                     <h1>Franchise Region</h1>

                    <div id="googleMap" style="width:100%;height:490px;"></div>

           <script>
    function myMap() {
  var myCenter = new google.maps.LatLng(24.927770, 67.108956);
  var mapCanvas = document.getElementById("googleMap");
  var mapOptions = {center: myCenter, zoom: 15};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcz25MYqiOyOtB0HR0UmGOrjcehVm1vbg&callback=myMap">
</script>
</div>
<!--overview end-->
<!-- project team & activity end -->

                <div class="col-md-4">
                    <!-- Advanced Tables -->
                        <div class="panel-heading">
                             <h3>Student Details
                             <a href="tutor.php" class="btn">View More</a>
                             </h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                 <th>Full Name</th>
                                 <th>Phone Number</th>
                                 <th>Email Address</th>
                                 <th>Status</th>
                              </tr>
                                    </thead>
                                    <tbody>
                              <tr>
                                 <td>Ali Azmat</td>
                                 <td>0321-3895105</td>
                                 <td>ali@ahmedgraf.com</td>
                                 <td>
                                <span class="label label-success">Active</span>
                                </td>
                              </tr>
                           </tbody>
                        </table>
                        </div>
                     </div>
              </div>
              <div class="col-md-4">
                    <!-- Advanced Tables -->
                        <div class="panel-heading">
                             <h3>Tutor Details
                             <a href="tutor.php" class="btn">View More</a>
                             </h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                 <th>Full Name</th>
                                 <th>Phone Number</th>
                                 <th>Email Address</th>
                                 <th>Status</th>
                              </tr>
                                    </thead>
                                    <tbody>
                              <tr>
                                 <td>Ali Azmat</td>
                                 <td>0321-3895105</td>
                                 <td>ali@ahmedgraf.com</td>
                                 <td>
                                <span class="label label-success">Active</span>
                                </td>
                              </tr>
                           </tbody>
                        </table>
                        </div>
                     </div>
              </div>
              <div class="col-md-4">
                    <!-- Advanced Tables -->
                        <div class="panel-heading">
                             <h3>Course Details
                             <a href="course.php" class="btn">View More</a>
                             </h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                 <th>Full Name</th>
                                 <th>Type of Course</th>
                                 <th>Program</th>
                                 <th>Description</th>
                              </tr>
                                    </thead>
                                    <tbody>
                              <tr>
                                 <td>Mathematics Basic</td>
                                 <td>Maths</td>
                                 <td>Pre-Nursery</td>
                                 <td>Maths Level - 1</td>
                              </tr>
                           </tbody>
                        </table>
                        </div>
                     </div>
              </div>
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>

  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
  </body>
</html>
