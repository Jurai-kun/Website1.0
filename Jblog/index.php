<?php
require_once('connect/dbinfo.inc.php');
session_start();
$user_info = array('Siojo'=>'admin1234');
echo<<<EOD
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <title>J Blogger</title>
  <link rel="stylesheet" type="text/css" href="CSS/MBCHome_styles.css?version=2" />
  <link rel="shortcut icon" type="image/x-icon" href="images/jb_icon.png" />
</head>

<body class="bgimg-1">

<div class="Header">
<right><img src="images/JBlogger.png" width="150px" height="60px">
</div>

<br><br><br>

<div class="home">

<div class="login">
<center><b><font face="SNAP ITC"><h1>LOG-IN</h1><br></b>
<form method="POST">

Username &nbsp<input  type="text" name="username" placeholder="Username" size="30" maxlength="20" style="height: 30px">
<br><br>
Password &nbsp<input type="password" name="password" placeholder="Password" size="30" maxlength="20" style="height: 30px">

<br><br>
<!-- Login-->
<input type="submit" name="login" value="LOG-IN" style="color: white; width:100px; height:40px; font-family:SNAP ITC; font-size:10pt;background-color:blue;">


</form>

<br><br><br>



</center></b>
</div>

</div>







</body>
</html>

EOD;

if(isset($_POST['username'])) {
  if ($user_info[$_POST['username']] == $_POST['password']) {
    $_SESSION['username'] = $_POST['username'];
    if ($_SESSION['username'] == 'Siojo') {
      header("Location: home.php");
    }
  }
    else {
    echo "<script>confirm('Invalid Username/Password')</script>";
  }
}  
?>