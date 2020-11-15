<?php
$server="127.0.0.1";
$user ="root";
$password ="";
$database = "edu_hub";
$con_stat=false;
$con = mysqli_connect($server,$user,$password,$database);


if("POST"==$_SERVER['REQUEST_METHOD']){
    $showalert=false;


    $username=$_POST['email_l'];
    $pass=$_POST['pass_l'];
    $cpass=$_POST['conf_l'];

$wrong_p=false;

$sql_1= "SELECT * FROM `data` WHERE email= '$username' ";
$res_1=mysqli_query($con,$sql_1);
$check_1=   mysqli_num_rows($res_1);
echo $check_1;
if($check_1){
$showalert=true;
}
else{

    if($pass===$cpass){
        $sql= "INSERT INTO `data` (`email`, `password`) VALUES ('$username', '$pass')";
        $res= mysqli_query($con,$sql);
        if($res){
            header('location:login.php');
        }
        else{
            $wrong_p=true;
        }

    }


}
}
else{
    $con_stat=true;
}











?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body  style="background-image: url(../images/d3ecbzg-045f95bb-8610-4dbb-84ab-e1d08fb037d7.jpg);opacity: 0.8">
<?php
if($showalert){
    echo '<div class="alert alert-primary" role="alert">
  This email is already exist.!
</div>';
}




if($wrong_p){
    echo '<div class="alert alert-primary" role="alert">
  Password is not matched.
</div>';
}



?>


<div class="container" style="opacity: 1.0;background-color: #1b1a1b;margin-top: 50px">

    <h1 class="text-center"style="color: white">Signup</h1>
<form  class="text-center" action="signup.php" method="post">

    <div class="form-group">
        <label for="exampleInputEmail1" style="color: white">Email address</label>
        <input style="width: 50%;margin: auto;" type="email" class="form-control" name="email_l" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1" style="color: white">Password</label>
        <input style="width: 50%;margin: auto;"type="password" class="form-control" name="pass_l" id="exampleInputPassword1">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1" style="color: white">ConfirmPassword</label>
        <input  style="width: 50%;margin: auto;"type="password" class="form-control" name="conf_l" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>
<a href="login.php" class="text-center"  style="color: wheat;">Login? If you have already account?</a>


</div>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
</html>


