<!--
Group 136
Smriti Singh 73
Shishir Tripathi 72
Saurabh Tiwari 71
--->
<?php
setcookie("user_name","",time()-3600,"/");
setcookie("user_email","",time()-3600,"/");
setcookie("user_password","",time()-3600,"/");
header("location:login.php");
?>