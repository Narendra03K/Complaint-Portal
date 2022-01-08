<?php
include './include/config.php';

?>



<!-- ================================================================================================ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/S3.css">
    <title>Student Profile</title>
</head>

<body>
   
<!-- ==================================================  header starts ================================ -->
    <header>
        <div class="wrapper"></div>

          <img src="images/scs-logo-1.png" height="100px" />
         
          
            <!-- <h1><span class="color"></span>SCSIT</h1> -->
            
            
            <nav>
                <ul>
            
                  <li><a href="./login.php">LOG OUT</a></li> 

                </ul>
            </nav> 
            
        </div>
      
    </header>
    <!-- ===========================  header ends ============================= -->

    <div class = 'container_border'>

        <h4><b>STUDENT PROFILE</b></h4><br><hr><br>
        
        <?php
        // ob_start();
         session_start();
         if(!$_SESSION['auth'])
         {
             header('location:login.php');
         }
      
             echo 'Hello,' . ' ' . $_SESSION['name'] ;
        ?>
        
        <br><br><br>
        
    
        
        <b><strong>Your profile</strong></b><br><br><br>
        
           Email ID: <?php echo $email ?>  <br><br>
           Branch: <?php echo $_SESSION["branch"]; ?>  <br><br>
           Year: <?php echo $_SESSION["year"]; ?>  <br><br>
           Contact number: <?php echo $_SESSION["contact"]; ?>  <br><br>
           Address: <?php echo $_SESSION["address"]; ?>  <br><br>
        
                    
                            
                         <br><hr><br>
                         
                         <b>Your Enrollment No.</b>
                         <br><br><br>
                         <?php echo $_SESSION['enrollment_no']; ?>
                         
                         <br>
                            
                            
                         <br><hr><br>
                         
                         
                         
                         
                         
                         
                         <b>Lodge a complaint for any fault/irregularity inside college campus</b>
                         <br><br>
                         
                         
                         <form action = "studentprofile.php" method = 'post' name = "sample">
              
              <textarea name = "message" rows = "5" cols = "80" class="form-control"></textarea><br>
              <!-- <input type = 'button' value = 'Post' name = 'comp'' class="btn onlcick = "addStudent();" btn-success">  -->
              <input type = "button"  name = "add" value = "Add " onclick = "addStudent();"> 
              </form><br><hr><br>
                 
             <b><strong>Previous Complaints/Queries</strong></b><br><br><br>
            
            
                            <table id = 'tbl' class = "table" border = "1">

        <thead>

                            <th>COMPLAINTS/QUERIES</th>
                            <!-- <th>DATE</th> -->
                            <th>STATUS</th>
                            <th>UPDATE</th>
                            <th>DELETE</th>

        </thead>

                                <tbody>

                                </tbody>

                            </table>
                
        </form>

                                    <script type= "text/javascript" >
                                    
                            function addStudent()
                            {
                                var message = document.sample.message.value;
                            
                                var tr = document.createElement('tr');
                            
                                var td1 = tr.appendChild(document.createElement('td'));
                            
                                td1.innerHTML = message;
                            
                                document.getElementById('tbl').appendChild(tr);

                            }


                               </script>
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




<!-- hello sir, i am was able to download my fee receipt after the fee submission and now the link is closed. 
What should i do to get the fee receipt ? -->