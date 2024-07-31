<?php
    include 'config3.php';
    $error = "";
    if(isset($_REQUEST["submit"])){
        $first_name = $_REQUEST["fname"];
        $last_name = $_REQUEST["lname"];
        $email = $_REQUEST["mail_ID"];
        $passw = $_REQUEST["userpassword"];
        $dob = $_REQUEST["dob"];
        $ins = "INSERT into signupdetail(First_Name, Last_Name, Email_ID, Password, Date_of_Birth	
        ) VALUES ('$first_name', '$last_name', '$email', '$passw', '$dob')";
        $query = mysqli_query($connection , $ins);
        echo "<script>alert('Successfully Logged In');</script>";
        echo "<meta http-equiv='refresh' content='0;url=Patient_login.php'>";
        
        if (!$query){
            die("Error: " . mysqli_error($connection));
        }
    }
        
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="animation.css">  
    <link rel="stylesheet" href="patient.css">  
    <link rel="stylesheet" href="sigup.css">
        
    <title>Patient Sign Up</title>
    
</head>
<style>
    body{
        background-image: url("img1.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover; 
        background-position: center; 
        height: 50%;
        overflow: auto; 
    }
</style>
<body>
<center>
    <div class="container">
        <table border="0">
            <tr>
                <td colspan="2">
                    <p class="header-text">Let's Get Started</p>
                    <p class="sub-text">Add Your Personal Details to Continue</p>
                </td>
            </tr>
            <tr>
                <form method="POST" >
                <td class="label-td" colspan="2">
                    <label for="name" class="form-label">Name: </label>
                </td>
            
            <tr>
                <td class="label-td">
                    <input type="text" name="fname" class="input-text" placeholder="First Name" required>
                </td>
                <td class="label-td">
                    <input type="text" name="lname" class="input-text" placeholder="Last Name" required>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="Email" class="form-label">Email: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="email" name="mail_ID" class="input-text" placeholder=" Enter Your Email" required>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="nic" class="form-label">Password: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="password" name="userpassword" class="input-text" placeholder="Enter Your Password" required>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="dob" class="form-label">Date of Birth: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="date" name="dob" class="input-text" required>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="reset" value="Reset" class="login-btn btn-primary-soft btn" >
                </td>
                <td>
                    
                        <input type="submit" name="submit" value="Next" class="login-btn btn-primary btn">
                    
                </td>

            </tr>
            <tr>
                <td colspan="2">
                    <br>
                    <label for="" class="sub-text" style="font-weight: 280;">Already have an account&#63; </label>
                    <a href="Patient_login.php" class="hover-link1 non-style-link">Login</a>
                    <br><br><br>
                </td>
            </tr>

                    </form>
            </tr>
        </table>

    </div>
</center>
</body>
</html>