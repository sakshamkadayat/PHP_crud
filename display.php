<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <style>
        body{
            background-color:#D071f9;
        }
        table{
            background-color:white;
        }
        h2{
            background-color:lightgreen;
            text-align: center;

        }
    </style>
</head>
<body>
    <h2>All Records</h2>
</body>
</html>



<?php
include('connection.php');
error_reporting(0); //This function will hide all the error shown by the local host 
$query = "SELECT * FROM std_img"; //display all data stored in database
$data = mysqli_query($conn,$query); //fetch data from database
$total = mysqli_num_rows($data); //count no of rows

if($total!=0)
{
    ?>

   
    <table  border=1px  width="100%">
         <tr>
            <th  width=10%">ID</th>
            <th  width="30%">Name</th>
            <th  width="10%">Email</th>
            <th  width="20%"> Password</th>
            <th  width="30%">Operation</th>

        </tr>
    <?php
     while($result = mysqli_fetch_assoc($data))
        {
        echo" <tr>
                <td>$result[id]</td>
                <td>$result[Name]</td>
                <td>$result[Email]</td>
                <td>$result[Password]</td>
                <td><a href='update.php ? id=$result[id] & name=$result[Name] & email= result[Email] & pass=$result[Password]'>update</a>
                <a href='delete.php ? id=$result[id] & name=$result[Name] & email= result[Email] & pass=$result[Password]'>Delete</a></td>


            </tr>";
        }
    
    }

    ?>
</table>