<?php 
session_start();
ob_start();

include("ayar-1.php");

if (!empty($_SESSION['uye']) == 1) {
    
header("Location: anasayfa.php");

}
else{



}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
   
<div class="col-md-4 offset-md-4" style="margin-top:124px;">
<h4 class="text-center">Login Form</h4>
<form action="" method="post">

  <label for="exampleFormControlInput1" class="form-label">Username</label>
  <input class="form-control" type="text" placeholder="username"  style="margin:10px 5px;" maxlength="24" name="username">


  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <input class="form-control" type="password" placeholder="password"  style="margin:10px 5px;" maxlength="15" name="password">

<button type="submit" class="btn btn-success col-12">Giriş</button>
</form>    
</div>    


<?php 

$oturum= new User();

if(!empty($_POST['username']) && !empty($_POST['password'])){

$oturum->giris($_POST['username'],$_POST['password']);
$oturumAc=$oturum->dondur();

header("Location: anasayfa.php");


}

?>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>