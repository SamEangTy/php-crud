<?php
    include 'connectDB.php';

    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql = "delete from users where user_id =$id";
        $rs = mysqli_query($con,$sql);
        if($rs){
            header("location:display.php");
        }else{
            die(mysqli_error($con));
        }
    }
?>