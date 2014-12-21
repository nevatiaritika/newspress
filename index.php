<?php
$error="";
$dbc=mysqli_connect('localhost','root','','ndb')
      or die("error connecting to the database");
session_start();
if(isset($_POST['submit']))
{ $error="";
// username and password sent from Form 
$myusername=addslashes($_POST['username']); 
$mypassword=addslashes($_POST['password']); 

$sql="SELECT * FROM users WHERE username='{$_POST['username']}' and password='{$_POST['password']}'";
$result=mysqli_query($dbc,$sql);
$row=mysqli_fetch_array($result);

$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{

//setcookie( "userlogin", $row["creatorid"], time() + 60*60 ,"/");
session_start();

$_SESSION['login_user']=$row["username"];

header("location:author_dashboard.php");
}
else 
{
$error="Your Login Name or Password is invalid";
}
}
?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Newspress Login</title>

    <style>
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
  margin: 0;
  padding: 0;
  background: #fff;

  color: #fff;
  font-family: Arial;
  font-size: 12px;
}

.body{
  position: absolute;
  top: -20px;
  left: -20px;
  right: -40px;
  bottom: -40px;
  width: auto;
  height: auto;
  background-image: url('img/bg.jpg');
  background-size: cover;
  -webkit-filter: blur(2px);
  z-index: 0;
}

.grad{
  position: absolute;
  top: -20px;
  left: -20px;
  right: -40px;
  bottom: -40px;
  width: auto;
  height: auto;
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
  z-index: 1;
  opacity: 0.7;
}

.header{
  position: absolute;
  top: calc(50% - 35px);
  left: calc(50% - 255px);
  z-index: 2;
}

.header div{
  float: left;
  color: #eee;
  font-family: 'Exo', sans-serif;
  font-size: 40px;
  font-weight: 300;
  
}

.header div span{
  color: #F9690E   !important;
}

.login{
  position: absolute;
  top: calc(50% - 75px);
  left: calc(50% - 50px);
  height: 150px;
  width: 350px;
  padding: 10px;
  z-index: 2;
}

.login input[type=text]{
  width: 250px;
  height: 30px;
  background: transparent;
  border: 1px solid rgba(255,255,255,0.6);
  border-radius: 2px;
  color: #fff;
  font-family: 'Exo', sans-serif;
  font-size: 16px;
  font-weight: 400;
  padding: 4px;
}

.login input[type=password]{
  width: 250px;
  height: 30px;
  background: transparent;
  border: 1px solid rgba(255,255,255,0.6);
  border-radius: 2px;
  color: #fff;
  font-family: 'Exo', sans-serif;
  font-size: 16px;
  font-weight: 400;
  padding: 4px;
  margin-top: 10px;
}

.login input[type=button]{
  width: 260px;
  height: 35px;
  background: #fff;
  border: 1px solid #fff;
  cursor: pointer;
  border-radius: 2px;
  color: #a18d6c;
  font-family: 'Exo', sans-serif;
  font-size: 16px;
  font-weight: 400;
  padding: 6px;
  margin-top: 10px;
}

.login input[type=button]:hover{
  opacity: 0.8;
}

.login input[type=button]:active{
  opacity: 0.6;
}

.login input[type=text]:focus{
  outline: none;
  border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
  outline: none;
  border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
  outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
</style>

    <script src="js/prefixfree.min.js"></script>

</head>

<body>

  <div class="body"></div>
    <div class="grad"></div>
    <div class="header">
      <div>News<span>press</span></div>
    </div>
    <br>

    <div>
      <form class="login" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
              <h2 class="form-signin-heading">Please Log In</h2>
              <input type="text" name="username" placeholder="Username" autofocus>
              <input type="password" name="password" placeholder="Password">
              <p><?php echo $error ?></p>
              <input type="submit" class="btn btn-lg btn-primary btn-block" value="Login" name="submit">
              <br>
            </form>
    </div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

</body>

</html>