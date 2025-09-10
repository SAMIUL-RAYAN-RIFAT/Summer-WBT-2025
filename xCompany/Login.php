<?php
$userName=$password="";
$userNameErr=$passwordErr="";
$val1=$val2=false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (empty($_POST["userName"])) {
    $userNameErr = " User name is required";
  } else {
    $userName = test_input($_POST["userName"]);
    $val1=true;
  }

  if (empty($_POST["password"])) {
    $passwordErr = " password is required";
  } else {
    $password = test_input($_POST["password"]);
    $val2=true;
  }

  $value="registration.php";

  if($val1==true && $val2==true)
{
    $val1=$val2=false;
    if($userName=="rifat" && $password=="12"){
    header("Location:dashboard.php");}
    else
        {$userNameErr="username or pass Dont match";
        $passwordErr="username or pass Dont match";}
}

  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header>
        <div>
            <img src="aiub.png" alt="">
            <h1>Company</h1>
        </div>
        <div>
            <a href="Home.php">Home</a>
            <a href="Login.php">Login</a>
            <a href="Registration.php">Registration</a>
        </div>
    </header>
    <hr>
        
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <label>Login</label><br><br>
        <label for="name"> <strong>User Name: </strong></label>
            <input type="text" id="name" value="<?php echo($userName)?>" name="userName" autocomplete="off" class="form_input" style="margin_left: 10px">
            <span style="color:red;"><?php echo $userNameErr;?></span><br><br>

        <label for="password"><strong>Password: </strong></label>
            <input type="text" id="password" value="<?php echo($password)?>" name="password" autocomplete="off" class="form_input" >
            <span style="color:red;"><?php echo $passwordErr;?></span><br><br>
        <hr>
        <br>
        <input type="checkbox">Remember me
        <br><br>
        <input type="submit" name="submit">
        <a href="forgotpass.php">Forgot Password?</a>
    </form>
    
    <footer>
        <hr>
        Copyright &copy; 2017
    </footer>

    
</body>
</html>