<?php
                         $AdName = $_Post['AdName'];
                         $AdPass = $_Post['AdName'];
                         
                         $AdName = stripcslashes($AdName);
                         $AdPass = stripcslashes($AdPass);
                         $AdName = mysql_real_escape_string($AdName);
                         $AdPass = mysql_real_escape_string($AdPass);
                         
                          $dbname = "schehe5_htdatabase";
                          $conn = mysql_connect("localhost:3306", "schehe5_htadmin", "saad2025110");
                          if(!$conn) {
                              die('could not connect: '. mysql_error());
                          }
                          
                          mysql_select_db($dbname);
                          
                          $query = mysql_query("select * from admin where AdName ='$AdName' and AdPass = '$AdPass'")
                          
                          $data = mysql_fetch_array($query);
                          if($row = ['AdName'] == $AdName && $row = ['AdPass'] == $AdPass) {

                              die("could not get the data: " . mysql_error());
                          }
                          
                              <?php
                                  }
                                  mysql_close($conn);
                              ?>