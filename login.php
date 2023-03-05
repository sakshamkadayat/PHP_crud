<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
.form{
    border: 2px solid black;
    width:50vh;
    margin-top:10%;
    margin-left:20%;
    box-shadow:12px 12px green;
}
.container{
    padding:20px;
    background-color:purple;
    color:white;
}
.form-field{
    margin-top:12px;
}
    </style>
</head>
<body>
<form action="#" method="POST" class="form">  
    <div class="container">
        <h3>User Login Portal </h3>   
        <div class="form-field">
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" > 
        </div>
             
        <div class="form-field">
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" > 
        </div>     
        <div class="form-field">
             <button type="submit" name="login">Login</button>
        </div>
    </div>   
    </form>    

</body>
</html>
<?php
include("connection.php");
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $pwd = $_POST['password'];
    $query= "SELECT * FROM std_img WHERE email='$username' && password='$pwd'";
    $result = mysqli_query($conn,$query);
    $total= mysqli_num_rows($result);
    if($total == 1)
    {
?>

        <meta http-equiv = "refresh" content = "0; url = http://localhost/WEB(lab)/display.php" />
    
<?php
    }
    else{
        echo"Login failed";
    }
}
?>