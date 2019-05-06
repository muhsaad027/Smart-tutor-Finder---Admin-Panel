<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>


      <link rel="stylesheet" href="css1/style.css">
      <link rel="stylesheet" href="css/bootstrap-theme.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />


  <title>HOME TUITION -Admin Panel</title>

</head>

<body>

  <div class="logmod">
  <div class="logmod__wrapper">
    <span class="logmod__close">Close</span>
    <div class="logmod__container">
        
      <ul class="logmod__tabs">
        <li data-tabtar="lgm-2"><a href="#">Super Admin</a></li>
        <li data-tabtar="lgm-1"><a href="#">Sub Admin</a></li>

      </ul>
                        <?php
                        $message="";
                        if(count($_POST)>0) {
                          $dbname = "schehe5_htdatabase";
                          $conn = mysql_connect("localhost:3306", "schehe5_htadmin", "saad2025110");
                         
                    	$result = mysqli_query($conn,"SELECT * FROM Admin WHERE user_name='" . $_POST["AdName"] . "' and password = '". $_POST["AdPass"]."'");
                    	$count  = mysqli_num_rows($result);
                    	if($count==0) {
	                       	$message = "Invalid Username or Password!";
	                    } else {
	                	$message = "You are successfully authenticated!";
                        	}
                        }
                        ?>

      <div class="logmod__tab-wrapper">
      <div class="logmod__tab lgm-1">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your username and password  <strong>to sign in</strong></span>
        </div>
        <div class="logmod__form">
            <div class="message"><?php if($message!="") { echo $message; } ?></div>
          <form accept-charset="utf-8" method="post" action="" class="simform">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Username*</label>
                <input type="text" name="AdName" placeholder="User Name" class="login-input"></td>
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-pw">Password*</label>
                <input type="password" name="AdPass" placeholder="Password" class="login-input"></td>
                            <span class="hide-password">Show </span>
              </div>
            </div>
            <div class="simform__actions">
              <input type="submit" name="submit" value="Submit" class="button">


            </div> 
          </form>
        </div> 
        <div class="logmod__alter">
          <div class="logmod__alter-container">
            
          </div>
        </div>
      </div>
      <div class="logmod__tab lgm-2">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your username and password <strong>to sign in</strong></span>
        </div> 
        <div class="logmod__form">
          <form accept-charset="utf-8" method="post" action="" class="simform">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Username*</label>
                <input type="text" name="AdName" placeholder="User Name" class="login-input"></td>
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-pw">Password*</label>
                <input type="password" name="AdPass" placeholder="Password" class="login-input"></td>
                						<span class="hide-password">Show</span>
              </div>
            </div>
             <div class="simform__actions">
              <input type="submit" name="submit" value="Submit" class="button">
            
            </div> 
          </form>
         
        </div> 
          </div>
      </div>
    </div>
  </div>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>

</body>

</html>