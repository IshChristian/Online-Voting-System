<?php
session_start();

 $sel=mysqli_query($conn, "SELECT * FROM voter'");
while($get=mysqli_fetch_array($sel)){
$vo_id=$_POST['id'];
}

$sq=mysqli_query($conn, "INSERT INTO votes VALUES ('','$_SESSION['v-id']','$vo_id','1',)");
if($sq){
    echo "yes";
    
}

?>