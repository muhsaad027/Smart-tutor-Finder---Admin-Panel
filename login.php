<?php
                          $dbname = "schehe5_htdatabase";
                          $conn = mysql_connect("localhost:3306", "schehe5_htadmin", "saad2025110");
                          if(!$conn) {
                              die('could not connect: '. mysql_error());
                          }
    
    include("config.php");
    session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $AdName = mysqli_real_escape_string($db,$_POST['Username']);
      $AdPass = mysqli_real_escape_string($db,$_POST['Password']); 
      
      $sql = "SELECT idAdmin FROM Admin WHERE AdName = '$htadmin' and AdPass = '$112233'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("AdName");
         $_SESSION['login_user'] = $AdName;
         
         header("location: home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
   ?>