<?php
include './include/config.php';

  if (!empty($_POST)){


$email = $_POST['email'];
$username = $_POST['username'];
$branch = $_POST['branch'];
$year = $_POST['year'];
$contact_no = $_POST['contact_no'];
$address = $_POST['address'];
$enrollment_no = $_POST['enrollment_no'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];



// $pass = password_hash($password, PASSWORD_BCRYPT);
// $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

// $emailquery = "select * from student where email = '$email'";
// $query = mysqli_query($con, $emailquery);

// $emailcount = mysqli_num_rows($query);

// if($emailcount>0){
//   echo "Email already exists";
// }
// else
// {
//   if($password === $cpassword)
//   {


    $query =  "insert into student (email, username, branch, year, contact_no, address,
     enrollment_no, password, cpassword) values ('$email', '$username', '$branch', '$year', 
     '$contact_no', '$address', '$enrollment_no', '$password', '$cpassword')";


    //  $iquery = mysqli_query($con, $insertquery);

     if(mysqli_query($con, $query)){

       if(mysqli_affected_rows($con)>0){
       
       ?>
       <script> 
     alert("INSERTED successfully!");
     </script>
     <?php
     }
    }
     else{
       ?>
     <script>
     alert("Unable to insert data");
     </script>
     <?php
     }

    
  }
  
  // else
  // {
  //   echo "passwords are not matching";
  // }


?>

<!-- ====================================html======================================== -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/S4.css">
    <title>Register</title>
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
                  <li><a href="./login.php">LOGIN</a></li>

                  <li><a href="http://www.scs.dauniv.ac.in/about.php">ABOUT US</a></li>
                    
                    <li><a href="http://www.scs.dauniv.ac.in/studentlife.php">STUDENT LIFE</a></li>
                    <!-- <li><a href="#">SIGN IN</a></li> -->
                    
                    <li><a href="http://www.scs.dauniv.ac.in/feedback.php">feedback</a></li>
                    
                </ul>
            </nav> 
            
        </div>
      
    </header>


    <!-- ===========================  header ends ============================= -->

    <div>   
        
                  <form action = "registration.php" method = "post">    
        
                    <h4 class="text-warning text-center pt-5">Student Registration Page</h4>  

                    
                    
                    <label>     
        
                      <input type="email"
                      required
                      class="input"
                      
                      name="email" 
                      
                      placeholder="EMAIL"/>                  
                      
                      <div class="line-box">          
        
                      <div class="line"></div>        
        
                      </div>    
        
                    </label>     
        
                    
                    <label>     
        
                        <input 
                           required
                               type="text" 
          
                               class="input" 

                               id="username"
          
                               name="username"        
          
                               placeholder="USERNAME"/>        
          
                        <div class="line-box">         
          
                          <div class="line"></div>        
          
                        </div>    
          
                      </label>
        
                    <label>     
        
                      <input 
        
                             type="text" 
        
                             class="input" 

                             id="branch"
        
                             name="branch"        
        
                             placeholder="BRANCH"/>        
        
                      <div class="line-box">         
        
                        <div class="line"></div>        
        
                      </div>    
        
                    </label>     

                    <label>     
        
                        <input 
          
                               type="alphanumeric" 
          
                               class="input" 

                               id="year"
          
                               name="year"        
          
                               placeholder="YEAR"/>        
          
                        <div class="line-box">         
          
                          <div class="line"></div>        
          
                        </div>    
          
                      </label>     
        
                      <label>     
        
                        <input 
          
                               type="tel" 
          
                               class="input" 

                               id="contact_no"
          
                               name="contact_no"        
          
                               placeholder="CONTACT NUMBER"/>        
          
                        <div class="line-box">         
          
                          <div class="line"></div>        
          
                        </div>    
          
                      </label>   
                      <label>     
        
                        <input 
          
                               type="pattern" 
          
                               class="input" 

                               id="address"
          
                               name="address"        
          
                               placeholder="ADDRESS"/>        
          
                        <div class="line-box">         
          
                          <div class="line"></div>        
          
                        </div>    
          
                      </label>     
        
                    <label>     
                        <label>     
        
                            <input 
                                   required
                                   type="pattern" 
              
                                   class="input" 

                                   id="enrollment_no"
              
                                   name="enrollment_no"        
              
                                   placeholder="ENROLLMENT NO."/>        
              
                            <div class="line-box">         
              
                              <div class="line"></div>        
              
                            </div>    
              
                          </label>   
        
                      <input 
                              required
                             type="password" 
        
                             class="input" 

                             id="password"
        
                             name="password" 
        
                             placeholder="PASSWORD"/>        
        
                      <div class="line-box">          
        
                        <div class="line"></div>        
        
                      </div>    
        
                    </label>     
        
                    
        
                    <label>     
        
                      <input 
                             required
                             type="password" 
        
                             class="input" 
        
                             name="cpassword" 
        
                             placeholder="CONFIRM PASSWORD"/>      
        
                      <div class="line-box">        
        
                        <div class="line"></div>      
        
                      </div>    
        
                    </label>     
        
                    
        
                    <!-- <button class = "btn">submit</button>   -->
                    <input class = "btn" type = "submit" name = "submit" value = "REGISTER"/>
        
                  </form> 
        
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
