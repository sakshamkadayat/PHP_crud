<?php include('connection.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration Form</title>
	<style>
		.form{
		 border:2px solid purple;
		 padding:17px;
		 width:40%;
		 margin-left:30%;

		}
		.form-field{
			padding-top:12px;
		}
		[type="submit"]{
			background-color:green;
			color:white;
			border:1px solid purple;
			border-radius: 5px;	
		}
		h3{
			display:flex;
			margin-left:30%;
		}
	</style>
</head>
<body>
	<h3>User Registration Form</h3>
	<form action="#" method="post" class="form">
        <div class="form-field">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value=""/>
        </div>

        <div class="form-field">
            <label for="email">Email : </label>
            <input type="email" name="email" id="email" value=""/>
        </div>

        <div class="form-field">
            <label for="password">Password : </label>
            <input type="password" name="password" id="password" value=""/>
        </div>
		<!-- <div class="form-field">
            <label for="photo">Profile : </label>
            <input type="file" name="photo" id="photo" value=""/>
        </div> -->
        <div class="form-field">
            <input type="submit" name="Submit"  id="Submit"></input>
        </div>
    </form>
<?php
if($_POST['Submit']){
		$name = $_POST["name"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		// $photo = $_FILES["photo"]; 
$querry = "insert into std_img (Name,Email,Password) values('$name','$email','$password')";
$data= mysqli_query($conn,$querry);
}
?>
</body>
</html>
