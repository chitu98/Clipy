<?php
include('include\config.php');

if(isset($_POST['save'])){
    
    $title = htmlspecialchars(trim($_POST['title']));
    $clip = htmlspecialchars(trim($_POST['clip']));
    $id = htmlspecialchars(trim($_POST['id']));
    $user = $_COOKIE['user'];
    
    $sql = "UPDATE clips SET title='$title', clip='$clip' WHERE id='$id' AND user_id='$user'";
    
    mysqli_query($conn,$sql);
    
    header('Location: dashboard.php?save=updated');
} else{
    header('Location: dashboard.php?save=failed_update');
}

?>