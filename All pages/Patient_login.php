<?php
    include 'config2.php';
    $error = "";
    if(isset($_REQUEST["submit"])){
        $mail = $_REQUEST["useremail"];
        $passw = $_REQUEST["userpassword"];
        
        $ins = "INSERT into logindetails(Email_ID, Password) VALUES ('$mail', '$passw')";
        $query = mysqli_query($connection , $ins);
        echo "<script>alert('Successfully Logged In');</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.html'>";

        if (!$query){
            die("Error: " . mysqli_error($connection));
        }
    }
        
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="animation.css">  
    <link rel="stylesheet" href="patient.css">  
    <link rel="stylesheet" href="login.css">
        
    <title>Patient Login</title>

</head>
<style>
    body{
        background-image: url("img2.jpg");
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
        <table border="0" style="margin: 0;padding: 0;width: 60%; margin-top: 30px;">
            <tr>
                <td>
                    <p class="header-text">Welcome Back!</p>
                </td>
            </tr>
        <div class="form-body">
            <tr>
                <td>
                    <p class="sub-text">Login with your details to continue</p>
                </td>
            </tr>
            <tr>
                <form action="" method="POST" >
                <td class="label-td">
                    <label for="useremail" class="form-label">Email: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td">
                    <input type="email" name="useremail" class="input-text" placeholder="Email Address" required>
                </td>
            </tr>
            <tr>
                <td class="label-td">
                    <label for="userpassword" class="form-label">Password: </label>
                </td>
            </tr>

            <tr>
                <td class="label-td">
                    <input type="Password" name="userpassword" class="input-text" placeholder="Password" required>
                </td>
            </tr>

            <tr>
                <td><br>
                <?php echo $error ?>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" name="submit" value="Login" class="login-btn btn-primary btn">
                </td>
            </tr>
        </div>
            <tr>
                <td>
                    <br>
                    <label for="" class="sub-text" style="font-weight: 280;">Don't have an account&#63; </label>
                    <a href="signup.php" class="hover-link1 non-style-link">Sign Up</a>
                    <br><br><br>
                </td>
            </tr>
                        
                        
    
                        
                    </form>
        </table>

    </div>
</center>
</body>
</html>