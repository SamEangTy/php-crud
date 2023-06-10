<?php 
    include 'connectDB.php';
    $id =$_GET['updateid'];
    $sql = "select * from users where user_id =$id";
    $rs = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($rs);
    $name = $row['name'];
    $email = $row['email'];
    $tel = $row['tel'];
    if(isset($_POST['submit'])){

        $name =$_POST['name'];
        $email =$_POST['email'];
        $tel =$_POST['tel'];
        $sql = "update users set name='$name', email='$email', tel='$tel' where user_id=$id";
        if($name == null || $name == ''){
          echo "pleast input name";
          return false;
        }
        $rs = mysqli_query($con,$sql);
        if($rs){
            header('location:display.php');
            echo 'update successfully';
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
    <input type="text" class="form-control" name="name" value=<?php echo $name ?>>
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="text" class="form-control" name="email" value=<?php echo $email ?>>
  </div>
  <div class="mb-3">
    <label class="form-label">Tel</label>
    <input type="text" class="form-control" name="tel" value=<?php echo $tel ?>>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
    </div>
</body>
</html>