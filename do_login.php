<?php
if(isset($_POST['do_login']))
{
 $host="localhost:3306";
 $username="schehe5_htadmin";
 $password="saad2025110";
 $databasename="schehe5_htdatabase";
 $connect=mysql_connect($host,$username,$password);
 $db=mysql_select_db($databasename);

 $email=$_POST['email'];
 $pass=$_POST['password'];
 
 $select_data=mysql_query("select * from Admin where Admin.AdEmail='$email' and Admin.AdPass='$pass'");
 if($row=mysql_fetch_array($select_data))
 {
  
  echo "success";
 }
 else
 {
  echo "fail";
 }
 exit();
}
?>