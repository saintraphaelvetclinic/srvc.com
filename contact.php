<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">  
    <link rel="stylesheet" href="css/main.css">  
   
        <link rel="stylesheet" href="css/contact.css">
    <title>Saint Raphael Veterinary Clinic</title>

    <link rel="icon" type="image/x-icon" href="img/logo.png">
    
</head>
<body>
    <?php

    //import database
    include("connection.php");

        
    

?>    


<div class="full-height">
    
        <table border="0">
       
            <tr>
                <td width="45%">
                    <font class="edoc-logo">SRVC </font>
                    <font class="edoc-logo-sub"> | Saint Raphael Veterinary Clinic. </font>
                </td>
                <td width="5%">
                    <a href="index.php"  class="non-style-link s"><p class="nav-item">HOME</p></a>
                 </td>
                 <td width="5%">
                    <a href="service.php"  class="non-style-link s"><p class="nav-item">SERVICE</p></a>
                 </td>
                <td width="5%">
                    <a href="contact.php"  class="non-style-link s"><p class="nav-item">CONTACT</p></a>
                 </td>
                <!-- <td width="5%">
                    <a href="login.php"  class="non-style-link s"><p class="nav-item">ABOUT</p></a>
                 </td>-->
                <td width="5%">
                   <a href="login.php"  class="non-style-link s"><p class="nav-item">LOGIN</p></a>
                </td>
                <td  width="5%">
                    <a href="signup.php" class="non-style-link"><p class="nav-item" style="padding-right: 40px;">REGISTER</p></a>
                </td>
            </tr>
           
              
               

                </table>
                </div>
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!4v1741725093749!6m8!1m7!1sLy1LH_Pw4J1Tbj0w1DhVzg!2m2!1d14.55960325445142!2d121.2061407118206!3f215.12010843857882!4f-3.487981665130519!5f0.9463719708075977" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
       
     <center>   <p class="heading-text">Saint Raphael Veterinary Clinic.</p> </center> </div>

<center>
    <div class="container">
        <table border="0" style="margin: 0;padding: 0;width: 80%;">
            <tr>
                <td>
                <a href="index.php">  <img alt="Brand" src="/img/logo.png"  height="200px"> </a>
                </td>
            </tr>
        <div class="form-body">
            <tr>
                <td>
                   <p class="sub-text">Saint Raphael Veterinary Clinic.</p>
                </td>
            </tr>
            <tr>
                <form action="contact.php" method="post" >
                <td class="label-td">
                    <label for="ccmail" class="form-label">Email: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td">
                    <input type="email" name="cemail" class="input-text" placeholder="" required>
                </td>
            </tr>
           
            <td class="label-td">
                    <label for="cemail" class="form-label">Messages </label>
                </td>
            </tr>
            <tr>
                <td class="label-td">
                    <textarea type="text" name="cmessage" class="input-text" placeholder="" required> </textarea>
                </td>
            </tr>


                <td>
                    <input type="submit" value="Send" class="login-btn btn-primary btn">
                </td>
            </tr>
        </div>
            
                        
    
                        
                    </form>
        </table>

    </div><!--
    <tr>
                <td colspan="3">
                   
                </td>
            </tr>
        </table>
     <p class="sub-text2 footer-hashen">Developed by Group 18</p>  -->
    </center>
    
    </div>
</center>

</body>
</html>