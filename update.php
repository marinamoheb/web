<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title> update</title>
<script>
function validateForm() {
  var x = document.forms["myform"]["id"].value;
  var z = document.forms["myform"]["username"].value;
  var y = document.forms["myform"]["password"].value;
  var m = document.forms["myform"]["email"].value;
  if (x == "") {
    alert("ID  must be filled out");
    return false;
  }
  if (z == "") {
    alert("Username  must be filled out");
    return false;
  }
  if (y == "") {
    alert("Password  must be filled out");
    return false;
  }
  if (m == "") {
    alert("Email must be filled out");
    return false;
  }
}
</script>
</head>
<body>
<title> update</title>

</head>
<body>
<div class="index">
<div class="body">
			<ul>
                <li><a href="#Contact">Contact</a></li>
                <li><a href="#Support">Support</a></li>
                <li><a href="Why US">Why us</a></li>
                <li><a href="#Services">Services</a></li>
                <li><a href="#About Us" >About us</a></li>
                <li><a href="#Home">Home</a></li>
                <li style="float:left; padding: 10px 10px 10px 50px;"><a style="font-size:30px;" href="#U_librarby">UniLibrary</a></li>
            </ul>
        </div>
    
<div class="form">
<form name ="myform" action="/update.php" onsubmit="return validateForm()" method="post">

<center>
   <label>update user details<lable> </br>
   <label> User ID</label>
   <input type="text" name="id" placeholder="enter user id "/></br>
   <label>Username</label>
   <input type="text" name="username"placeholder="enter username"/> </br>
   <label> User Email</label>
   <input type="text" name="email"placeholder="enter email"/></br>
   <label>Password</label>
   <input type="text" name="password"placeholder="enter  password"/></br>
   <input type="submit" name="update" value="update data "/></br>

   </center>
  </form>
  </div>
</div>
</body>
</html>

<?php
$connection=mysqli_connect('127.0.0.1','root','');
$db=mysqli_select_db($connection,'user');

if(isset($_POST['update']))
{
    $id=$_POST['id'];
    $query="UPDATE'user' SET username='$_POST[username]',email='$_POST[email]',password='$_POST[password]' WHERE id='$_POST[id]";
    $query_run=mysqli_query($connection,$query);
    if($query_run)
    {
    echo'<script type="text/javascript"alert("data updated")</script>';
    }
    else
    {
        echo'<script type="text/javascript"alert("data  not updated")</script>';
    }
}
?> 