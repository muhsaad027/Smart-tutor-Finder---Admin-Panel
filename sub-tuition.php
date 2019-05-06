<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Home Tuition Admin Panel">
    <meta name="author" content="Farheen">
    <meta name="keyword" content="Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
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
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
            <a href="sub-home.php" class="logo">HOME<span></span> <span class="lite">TUITION</span></a>
           
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li>
                      <a class="" href="sub-home.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
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
                      <li class="active">
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
             
            <div class="row">
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h3>Tuition Information</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                 <th>Code No</th>
                                 <th>Student Name</th>
                                 <th>Tutor Name</th>
                                 <th>Course Name</th>
                                 <th>Status</th>
                              </tr>
                               </thead>
                                    <tbody>
                             <?php
                          $dbname = "schehe5_htdatabase";
                          $conn = mysql_connect("localhost:3306", "schehe5_htadmin", "saad2025110");
                          if(!$conn) {
                              die('could not connect: '. mysql_error());
                          }
                          
                          mysql_select_db($dbname);
                          
                          $query = "SELECT Tuition.idRequest, Tuition.idTuition, Tuition.idStudent,Student.StdName, Tuition.idTutor,Tutor.TutName, Tuition.idCourse, Courses.CourseName  FROM `Tuition`, `Tutor` ,`Student`,`Courses` WHERE  Student.idStudent = Tuition.idStudent AND Tutor.idTutor = Tuition.idTutor  AND Courses.idCourses = Tuition.idCourse";
                          
                          $data = mysql_query($query, $conn);
                          if(!$data) {

                              die("could not get the data: " . mysql_error());
                          }
                          
                         
                          
                          while($row = mysql_fetch_assoc($data)){ 
                               
                          ?>
                              <tr>
                                  <td><?php echo $row['idTuition']; ?></td>
                                 <td><?php echo $row['StdName']; ?></td>
                                 <td><?php echo $row['TutName']; ?></td>
                                 <td><?php echo $row['CourseName']; ?></td>
                                 <td>
                                <span class="label label-success">Active</span>
                                </td>
                              </tr>
                              <?php
                                  }
                                  mysql_close($conn);
                              ?>
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nicescroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>

<!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
  </body>
</html>
