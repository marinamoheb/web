<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title> update</title>
<script>
function validateForm() {
  var a = document.forms["myform"]["isbn"].value;
  var x = document.forms["myform"]["title"].value;
  var l = document.forms["myform"]["edition"].value;
  var y = document.forms["myform"]["author"].value;
  var z = document.forms["myform"]["publication"].value;
  if (a== "") {
    alert("ISBN  must be filled out");
    return false;
  }
  if (x== "") {
    alert("Title  must be filled out");
    return false;
  }
  if (l == "") {
    alert("Edition must be filled out");
    return false;
  }
  if (xy== "") {
    alert("Author  must be filled out");
    return false;
  }
  if (z == "") {
    alert("Publication  must be filled out");
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
<form name ="myform" action="/updatebook.php" onsubmit="return validateForm()" method="post">

     <center>
   <label>update book details<lable> </br>
   <label>Isbn</label>
   <input type="text" name="isbn" placeholder="enter isbn"/></br>
   <label>Title</label>
   <input type="text" name="title" placeholder="enter title"/></br>
   <label>Author</label>
   <input type="text" name="author"placeholder="enter author"/> </br>
   <label>Edition</label>
   <input type="text" name="edition"placeholder="enter edition"/> </br>
   <label>Publication</label>
   <input type="text" name="publication"placeholder="enter publication"/></br>
   <input type="submit" name="update" value="update data " style=style="background-color: #1771F1; font-size: 20px; color: white; border: none;border-radius: 5px; margin-left: 40%"/></br>
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
    $isbn=$_POST['isbn'];
    $query="UPDATE'books' SET title='$_POST[title]',author='$_POST[author]',edition='$_POST[edition]',publication='$_POST[publication]' WHERE isbn='$_POST[isbn]'";
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
