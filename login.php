<?php
if (!empty($_POST)){

include './include/config.php';

$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['username'];
$pass = $_POST['password'];

$email = $_POST['email'];
$branch = $_POST['branch'];
$year = $_POST['year'];
$contact_no = $_POST['contact_no'];
$address = $_POST['address'];
$enrollment_no = $_POST['enrollment_no'];




$query = "SELECT username,password from student where
                        username = '$username' and password = '$password'";

$query1 = "SELECT id,pass from admin where
                        id = '$username' and pass = '$password'";

                        $result = mysqli_query($con, $query);
                        $result1 = mysqli_query($con, $query1);


                        if (mysqli_num_rows($result) == 1)

                        {

                            session_start();
                            $_SESSION['auth'] = 'true';
                            header('location: studentprofile.php');

                            // $_SESSION['name'] = $row['name'];
                                        $_SESSION['name'] = $username;
                                        // $_SESSION['email'] = $email;
                                        $_SESSION['branch'] = $branch;
                                        $_SESSION['year'] = $year;
                                        $_SESSION['contact'] = $contact;
                                        $_SESSION['address'] = $address;
                                        $_SESSION['enrollment_no'] = $enrollment_no;
                                        mysqli_close($con) ;
                        }
                        else if(mysqli_num_rows($result1) == 1)
                        {
                          session_start();
                            $_SESSION['auth'] = 'true';
                            header('location: admin.php');
                        }
                        else{


                            echo "Username or Password is incorrect.";
                        }


                    }


                                      
?>
<!-- ----------------------------------------------------------------------------------------------------- -->
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Student Login</title>
   
   
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/S2.css">
    
   
</head>
 
<body>


<!-- ===========================  header starts ============================= -->
    <header>
        <div class="wrapper"></div>

          <img src="images/scs-logo-1.png" height="100px" />
         
          
            <!-- <h1><span class="color"></span>SCSIT</h1> -->
            
            
            <nav>
                <ul>
                  <li><a href="./index.php">HOME</a></li>
                  <!-- <li><a href="./login.php">LOGIN</a></li> -->
                  <!-- <li><a href="#">CONTACT</a></li> -->
                  <li><a href="http://www.scs.dauniv.ac.in/about.php">ABOUT US</a></li>
                    
                    <li><a href="http://www.scs.dauniv.ac.in/studentlife.php">STUDENT LIFE</a></li>
                    <!-- <li><a href="#">SIGN IN</a></li> -->
                    
                    <li><a href="http://www.scs.dauniv.ac.in/feedback.php">feedback</a></li>
                    
                </ul>
            </nav> 
            
        </div>
      
    </header>


    <!-- ===========================  header ends ============================= -->





    <div id="hero-image">
        <div class="wrapper">
          <div class="login-page">
            <div class="form">
              <div class="login">
                <div class="login-header">
                    <h2>School of Computer Science and IT</h2>
                  <h3>Complaint Portal</h3>
                  <p>Please enter your credentials to login.</p>
                </div>
              </div>
              <form method = "post" action = "login.php" class="login-form">
                <input type="text" name = "username" placeholder="username" required />
                <input type="password" name = "password" placeholder="password" required/>
                <button type="submit" name = "login">login</button>
                <p class="message">Not registered? <a href="registration.php">Create an account</a></p>
              </form>
            </div>
          </div>
        </div>
    </div>





    <!-- ===========================  footer starts ============================= -->


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
                    <!-- <li><a href="#">Meet The Team</a></li>
                    <li><a href="#">What We Do</a></li>
                    <li><a href="#">Careers</a></li> -->
                </ul>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">+91 731-2438518</a></li>
                    <li><a href="#">scsit.davv@gmail.com</a></li>
                    <li><a href="#">www.scs.dauniv.ac.in</a></li>


                </ul>
              
            </div>
            <div class="clear"></div>
        </div>
    </footer>

    <!-- ===========================  footer ends ============================= -->
    
</body>
</html>