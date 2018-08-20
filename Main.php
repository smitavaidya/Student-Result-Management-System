<?php
 //create connection
 $connect=mysqli_connect('localhost','root','','result');
	
//check connection
 if(mysqli_connect_errno($connect))
 {
	echo 'Failed to connect to database: '.mysqli_connect_error();
}
else
	//echo 'Connected Successfully!!';
 ?>
<html>
<style type="text/css">
h1{
	margin-left:420px;
	font-family:serif;
	font-size:35px;
}
</style> 
 <head>
<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<h1>RESULT PORTAL</h1>
<body background="https://wallpapers.walldevil.com/wallpapers/a43/preview/pen-coffee-paper-eyeglasses.jpg">
<div class="bck">
<form action="http://localhost/connect/new.php">
    <input type="submit" value="STUDENT" id="but" />
</form>

<div>
<button onclick="document.getElementById('id01').style.display='block'">TEACHER</button>
</div>
</div>
<!-- The Modal (contains the Login In form) -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content animate" action="Main.php" method="post">
    <div class="container">
      <label><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>

      <label><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
     
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
       <button type="submit" class="signupbtn" name="submit_btn" id="sub">Login</button>
		</div>
    </div>
  </form>
</div>
</body>
</html>

<?php
if(isset($_POST['submit_btn']))
{
	 $username = $_POST['name'];
	 $email = $_POST['email'];
	 $password = $_POST['psw'];
		
		if($password=="12345")
		{
			$query= "insert into websiteusers values('$username','$email')";
			$query_run = mysqli_query($connect,$query);
			if($query_run)
			{ 
				header('location:teach.php');
			}
			else
			{
				echo '<script type="text/javascript">alert("error")</script>';				
			}

		}
		else
		{
				echo '<script type="text/javascript">alert("wrong password")</script>';
		}
}
?>