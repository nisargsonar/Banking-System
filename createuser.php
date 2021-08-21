<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Customer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
</head>

<body style="background-color : #1F2833;">
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Customer Successfully created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>

        <h2 class="text-center pt-4" style="color : #C5C6C7 ;">Create a New Customer</h2>
        <br>

  <div class="background">
  <div class="container">
    <div class="screen">
      <!-- <div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div> -->
      </div>
      <div class="screen-body">
        <div class="screen-body-item left" style="background: #1F2833" >
          <img class="img-fluid" src="img/adduser1.png" style="border: none; border-radius: 5%;">
        </div>
        <div class="screen-body-item"  >
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Enter Name" type="text" name="name" required style="color: #C5C6C7;" >
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Enter Email" type="email" name="email" required style="color: #C5C6C7;">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Balance" type="number" name="balance" required style="color: #C5C6C7;">
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="Create" name="submit" style="color:white;"></input>
              <input class="app-form-button" type="reset" value="Reset" name="reset"></input><br><br><br><br>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="text-center mt-5 py-2" style="color: white;">
        <p>&copy 2021. Made by <b>Nisarg Sonar</b> 
        <a href="https://www.linkedin.com/in/nisarg-sonar-771287217/"target="_blank" style="color: white;" >Linkedin Profile</a><br>INDIAN CORPORATION BANK</p>
      </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>