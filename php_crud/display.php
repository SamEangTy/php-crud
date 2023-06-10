<?php 
  include 'connectDB.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>DISPLAY</title>
</head>
<body>
    <div class="container">
        <button name="" class="btn btn-primary " ><a href="user.php" class='text-light'>Add user</a></button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Tel</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "select * from users";
    $rs = mysqli_query($con,$sql);
    if($rs){
      while($row=mysqli_fetch_assoc($rs)){
        $id = $row['user_id'];
        $name = $row['name'];
        $email = $row['email'];
        $tel = $row['tel'];

        echo  "
          <tr>
          <td>".$id."</td>
          <td>".$name."</td>
          <td>".$email."</td>
          <td>".$tel."</td>
          <td>
          <button class='btn btn-primary'><a href='update.php?updateid=$id' class='text-light'>Edit</a></button>
          <button class='btn btn-danger'><a href='delete.php?deleteid=$id' class='text-light'>Delete</a></button>
          </td>
          </tr>
        ";
      }
    }

    ?>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
    </div>
</body>
</html>