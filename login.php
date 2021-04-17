<!--
Group 136
Smriti Singh 73
Shishir Tripathi 72
Saurabh Tiwari 71
--->
<?php
    if(isset($_COOKIE['user_name']) && !empty($_COOKIE['user_email']))
    {
       header("location:menu.php");
    }
   # var_dump ($_COOKIE);
?>
<!DOCTYPE html>
<style>
    body{
        color: white;
        background-color:blue;
        background-image: url("me1.jpg");
    }
</style>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microelectronics</title>
</head>
<body>
<center><h1>Microelectronics: An Information Resource</h1></center>
<h2> <center>LOGIN:</center></h2>
<form method="POST">
        <center>
        <label for="firstname"><h3>Name: </label>
        <input type="text" required name="name" placeholder="NAME" id="name"> <br>
        <label for="email">E-Mail: </label>
        <input type="text" required name="email" placeholder="E-MAIL"> <br>
        <label for="password">Password: </label>
        <input type="password" required name="password" placeholder="PASSWORD"></h3> <br>
	    <input type="submit" name="submit" value="LOGIN">
        </center>
    
</body>
</html>

<?php 

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $email=filter_var($email,FILTER_SANITIZE_EMAIL);
    if(filter_var($email,FILTER_VALIDATE_EMAIL))
    {
    setcookie("user_name",$name,time()+3600,"/");
    setcookie("user_email",$email,time()+3600,"/");
    setcookie("user_password",$password,time()+3600,"/");
    }
    else
    {
        echo "Data Incorrect";
    }
    $fileopen=fopen("login_details.txt","a+");
    fwrite($fileopen,"\nE-Mail ID: ".$email);
    fwrite($fileopen,"\nPassword: ".$password);
    fwrite($fileopen,"\n_");
    #echo "Entry for".$name."was SUCCESSFUL";
    fclose($fileopen);
}       


?>