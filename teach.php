<?php
	if(isset($_POST['Submit']))
	{
		session_destroy();
		header('location:Main.php');
	}
	
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
<body background="http://www.creativehdwallpapers.com/uploads/large/background/dark-blue-background-high-quality.jpg">
<style type="text/css">
h1{
font-family:serif;
font-weight:200;
color:white;
font-size:35px;
text-shadow:1px 1px 1px #000;
}
.box{
	background-color:black;
	padding-top:10px;
	padding-bottom:10px;
	padding-left:20px;
}
.box1{
	background-color:black;	
	padding-top:6px;
	padding-left:auto;
	padding-right:auto;
}
table.gridtable{
	font-family:verdana,ariel,sans-serif;
	font-size:15px;
	color:#333333;
	border-width:3px;
	border-color:#666666;
	border-collapse:collapse;
	margin-top:40px;
}

table.gridtable td{
	border-center:2px;
	border-style:solid;
	padding:15px;
	padding-right:100px;
	border-color:#666666;
	background-color:#dedede;
}
input[type=submit]{
	background-color:black;
	color:white;
	font-size:20px;
    padding: 12px 20px;
    margin-left:100px;
	margin-right:-70px;
    display: inline-block;
    border: 1px solid black;
    box-sizing: border-box;
}
label{
	font-family:serif;
	font-style:bold;
	font-size:20px;
}
#sub{
	background-color:black;
	color:white;
	font-family:serif;
	font-size:20px;
	padding:10px;
	border-color:black;
	margin-left:1150px;
	margin-top:-50px;
}
footer{
  background-color:black;
  bottom:0;
  z-index:-1 !important;
  font-family: 'Roboto', sans-serif;
  font-size: 1.15em;  
  color:white;
  padding-bottom:40px;
  margin-top:60px;
  padding-left:20px;
  padding-top:20px;
}
</style>
<div class="box">
<h1>5TH SEMESTER INTERNAL MARKS UPDATE</h1>
</div>
<div class="box1">
<h1></h1>
</div>
<form action="mes.php" method="post">
<table align="center" class="gridtable">
<tr>
<td>
<label>ME</label>
  <td><input type="submit" value="UPDATE" name="sub1" /><br></td>
	</form>
	</td>
</tr>
<tr>	
<td>
<form action="cn.php" method="post">
<label>CN</label>
    <td><input type="submit" value="UPDATE" name="sub2" /><br></td>
</form>
</td>
</tr>
<tr>
<td>
<form action="dbms.php" method="post">
<label>DBMS</label>
   <td> <input type="submit" value="UPDATE" name="sub3" /><br></td>
	</form>
	</td>
	</tr>
<tr>
<td>
<form action="atc.php" method="post">
<label>ATC</label>
	<td><input type="submit" value="UPDATE" name="sub4" /><br></td>
	</form>
	</td>
	</tr>
	<tr>
	<td>
	<form action="java.php" method="post">
<label>JAVA</label>
	<td><input type="submit" value="UPDATE" name="sub5" /><br></td>
	</form>
	</td>
	</tr>
	<tr>
	<td>
	<form action="ai.php" method="post">
<label>AI</label>
   <td><input type="submit" value="UPDATE" name="sub6" /><br></td>
	</form>
	</td>
	</tr>
	</table>
<form action="teach.php" method="post">
<button type="submit" name="Submit" id="sub">LOGOUT</button>
</form>
  <footer>
  Designed and devloped by <b><a target="_blank" href="https://codepen.io/Smita2197/full/EXKGQj/">Smita Vaidya.</a></b><br/>
         <p class="copyright text-muted small">Copyright &copy; All Rights Reserved</p> 
 </footer>
</body>	
</html>