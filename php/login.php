<?php
$server="127.0.0.1";
$user ="root";
$password ="";
$database = "edu_hub";
$con_status=false;
$con = mysqli_connect($server,$user,$password,$database);


if($con) {

    if ('POST' == $_SERVER['REQUEST_METHOD']) {
        $email = $_POST['email_l'];
        $pass = $_POST['pass_l'];

$err=false;
        $sql = "select * from data where email='$email' && password='$pass'";
        $result = mysqli_query($con, $sql);
$check = mysqli_num_rows($result);

        if ($check) {
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$email;
            header('location:../index.php');


        } else {
            $err=true;


        }


    }
}
else{

    $con_status=true;

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

    <title>Log in</title>
</head>
<body style="background-image: url(../images/d3ecbzg-045f95bb-8610-4dbb-84ab-e1d08fb037d7.jpg);opacity: 0.8">
<?php
if($err){
    echo '<div class="alert alert-primary" role="alert">
  Invalid credentials
</div>';
}
if($con_status){
    echo '<div class="alert alert-primary" role="alert">
  Some problem related to backend connection.
  Check your server or try after sometime.
</div>';
}

?>


<div class="container" style="opacity: 1.0;background-color: #1b1a1b;margin-top: 50px">

    <h1 class="text-center" style="color: #a71d2a;font-weight: bold">Login</h1>
<form class="text-center"   action="login.php" method="post">

    <div class="form-group">
        <label for="exampleInputEmail1" style="color: white">Email address</label>
        <input style="width: 50%;margin: auto" required type="email" class="form-control" name="email_l" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1" style="color: white">Password</label>
        <input  style="width: 50%;margin: auto" required type="password" class="form-control" name="pass_l" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary" style="margin-bottom: 50px">Submit</button>


</form>

<p style="color: white"><a href="signup.php" >Don't have account? Click here to signup!</a> </p>

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


