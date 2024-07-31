<?php
    include 'config1.php';

    if(isset($_REQUEST["submit"])){
        $first_name = $_REQUEST["fname"];
        $last_name = $_REQUEST["lname"];
        $speciality = $_REQUEST["speciality"];
        $SD_Code = $_REQUEST["code"];
        $dob = $_REQUEST["dob"];
        $ins = "INSERT into signupdetail(First_Name, Last_Name, Speciality, SD_Code, Date_of_Birth	
        ) VALUES ('$first_name', '$last_name', '$speciality', '$SD_Code', '$dob')";
        $query = mysqli_query($connection , $ins);
        
        if (!$query){
            die("Error: " . mysqli_error($connection));
        }
        if(($first_name == 'Pranav' && $last_name == 'Phatak' && $SD_Code == '1445') || ($first_name == 'Aaryan' && $last_name == 'Lunis' && $SD_Code == '2807') || ($first_name == 'Dvvit' && $last_name == 'Patel' && $SD_Code == '0902') || ($first_name == 'Divy' && $last_name == 'Shah' && $SD_Code == '1610')){
            echo "<script>alert('Successfully Logged In');</script>";
            echo "<meta http-equiv='refresh' content='0;url=login.php'>";
            exit;
        }
        else {
            echo "<script>alert('Invalid Credentials');</script>";
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
    <link rel="stylesheet" href="main.css">  
    <link rel="stylesheet" href="sigup.css">
        
    <title>Sign Up</title>
    
</head>
<style>
    body{
        background-image: url("img1.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover; 
        height: 100%;
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
                <form action="" method="POST" >
                <td class="label-td" colspan="2">
                    <label for="name" class="form-label">Name: </label>
                </td>
            </tr>
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
                    <label for="speciality" class="form-label">Speciality: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <select id="speciality" name="speciality" class="input-text" required>
                        <option disabled selected>Select Speciality</option>
                        <option value="Cardiologist">Cardiologist</option>
                        <option value="Neurologist">Neurologist</option>
                        <option value="Oncologist">Oncologist</option>
                        <option value="Dermatologist">Dermatologist</option>
                        <option value="Psychiatrist">Psychiatrist</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="nic" class="form-label">SD Code: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="text" name="code" class="input-text" placeholder="SD Code" required>
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
                    <a href="login.php" class="hover-link1 non-style-link">Login</a>
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
