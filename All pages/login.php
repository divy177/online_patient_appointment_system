<!-- <?php
    include 'config.php';

    if(isset($_REQUEST["submit"])){
        $name = $_REQUEST["doctor's_name"];
        $passw = $_REQUEST["doctor's_password"];
        
        $ins = "INSERT into logindetails(Doctor_Name, Password) VALUES ('$name', '$passw')";
        $query = mysqli_query($connection , $ins);
        
    if (!$query){
        die("Error: " . mysqli_error($connection));
    }
        if(($name == 'Pranav Phatak' && $passw == '1445') || ($name == 'Aaryan Lunis' && $passw == '2807') || ($name == 'Dvvit Patel' && $passw == '0902') || ($name == 'Divy Shah' && $passw == '1610')){
            echo "<script>alert('Successfully Logged In');</script>";
            echo "<meta http-equiv='refresh' content='0;url=#'>";
            exit;
        }
        else {
            echo "<script>alert('Invalid Credentials');</script>";
        }
    }
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="animation.css">  
    <link rel="stylesheet" href="main.css">  
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<style>
    body{
        background-image: url("img2.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover; 
        background-position: center; 
        height: 100%;
        overflow: auto; 
    }
</style>
<body>
<center>   
    <div class="container">
        <table border="0" style="margin: 0;padding: 0;width: 60%;">
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
                <form action="#" method="POST">
                <td class="label-td">
                    <label for="useremail" class="form-label">Doctor's Name: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td">
                    <input type="text" id="fname" name="doctor's_name" class="input-text" placeholder="Doctor's Name" required>
                </td>
            </tr>
            <tr>
                <td class="label-td">
                    <label for="userpassword" class="form-label">SD Code: </label>
                </td>
            </tr>

            <tr>
                <td class="label-td">
                    <input type="Password" id="sd_code" name="doctor's_password" class="input-text" placeholder="SD Code" required>
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