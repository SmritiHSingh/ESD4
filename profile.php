<!--
Group 136
Smriti Singh 73
Shishir Tripathi 72
Saurabh Tiwari 71
--->
<!DOCTYPE html>
<style>
    body
    {
        background-color: #0B337F;
        color: #99ccff;
    }
    .b_color
    {
        background-color: #0B597F;
        border-radius: 12px;
        color: #99ccff;
    }
    
</style>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
<?php
    echo "<h1><center>Profile Settings for ".$_COOKIE['user_name']."</center></h1>";
    echo "<br><h2>E-Mail: ".$_COOKIE['user_email']."<br>Password: ".$_COOKIE['user_password']."</h2>";
    echo "<h3><center>"."Would You Like To Upload Any Work?"."</h3></center>";
?>
<form action="" enctype="multipart/form-data" method="post">
        <center><h3>
        <strong> <label for="file">SELECT A FILE</label> 
        <br>
        <input type="file" required name="file" class="b_color"id="file"></strong>
        <br>
        <input type="submit" class="b_color" value="Upload" name="submit">    
        </h3></center>
</form>
<?php

if(isset($_POST['submit']))
{
        $filename=$_FILES['file']['name'];
        $filesize=$_FILES['file']['size'];
        $filetmp=$_FILES['file']['tmp_name'];
        $filetype=$_FILES['file']['type'];

        if(move_uploaded_file($filetmp,"uploaded_files/".$filename))
        {
            echo "<center><strong>"."Upload Successful<br>"."</strong></center>";
        }
        else
        {
            echo "Upload Error";
        }
        echo "File Name: ".$filename."<br>"."File Size: ".$filesize."<br>"."Temp Name:".$filetmp."<br>"."File Type: ".$filetype."<br>";    
}

?>
<br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br>

<a href="menu.php" style="text-align: right;"><h2>BACK</h2></a>


</html>