<?php 
include('include\config.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $user = $_COOKIE['user'];
    
    $sql = "DELETE FROM clips WHERE id='$id'";
    
    mysqli_query($conn,$sql);
    
    header('Location: dashboard.php?save=deleted');
}else {
    header('Location: dashboard.php?save=failed_delete');
}

?>