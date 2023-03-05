<?php include('connection.php');
$id=$_GET['id'];
$query = "DELETE  FROM std_img where id ='$id'"; 
$data = mysqli_query($conn,$query);
if($data){
    echo "Data deleted";
}
else{
    echo"failed";
}
?>
