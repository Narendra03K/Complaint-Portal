<?php
include './include/config.php';

         session_start();
         if(!$_SESSION['auth'])
         {
             header('location:login.php');
         }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/S3.css">
    

    <title>admin</title>
</head>


<body>
    <!-- ===========================  header starts ============================= -->


    <header>
        <div class="wrapper"></div>

          <img src="images/scs-logo-1.png" height="100px" />
         
          
            <!-- <h1><span class="color"></span>SCSIT</h1> -->
            
            
            <nav>
                <ul>
                  <!-- <li><a href="./index.php">HOME</a></li> -->
                  <li><a href="./login.php">LOG OUT</a></li>
                    
                </ul>
            </nav> 
            
        </div>
      
    </header>

	<body>
	


	</body>




    <footer>
        <div class="wrapper">
            <div id="footer-info">
                <p>Copyright 2021 SCSIT. All rights reserved.</p>
                <p><a href="#">Terms of Service</a> I <a href="#">Privacy</a></p>
            </div>
            <div id="footer-links">
                <ul>
                    <li>SCSIT, D.A.V.V<br/>
                        Takshashila Campus,<br/>
                        Khandwa Road,<br/>
                        Indore, 452001<br/>
                        Madhya Pradesh,<br/>
                        India</a></li>
                </ul>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">+91 731-2438518</a></li>
                    <li><a href="">scsit.davv@gmail.com</a></li>
                    <li><a href="#">www.scs.dauniv.ac.in</a></li>


                </ul>
              
            </div>
            <div class="clear"></div>
        </div>
    </footer>
</html>