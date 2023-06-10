<?php
include 'connectDB.php';
// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     echo "submitted";
// }
if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $tel =$_POST['tel'];
    $sql = "insert into users (name, email, tel) values('$name','$email','$tel')";
    // if($name == null || $name == ''){
    //   echo "pleast input name";
    //   return false;
    // }
    $rs = mysqli_query($con,$sql);
    if($rs){
       header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>PHP USER</title>
</head>
<body>
    <div class="container">
    <form  method="POST">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="text" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label class="form-label">Tel</label>
    <input type="text" class="form-control" name="tel" >
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</body>
</html>