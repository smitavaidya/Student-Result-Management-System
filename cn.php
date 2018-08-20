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
font-family:serif;
font-weight:200;
color:white;
font-size:50px;
text-shadow:1px 1px 1px #000;
}
.box{
	padding-top:10px;
	padding-bottom:10px;
	padding-left:20px;
}
.box1{
	background-color:cornsilk;
	padding-top:50px;
	padding-bottom:50px;
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
table.gridtable th{
	border-width:3px;
	border-style:solid;
	padding:15px;
	border-color:#666666;
	background-color:lightgray;
}
table.gridtable td{
	border-width:3px;
	border-style:solid;
	padding:15px;
	border-color:#666666;
	background-color:lightgray;
}
.clickMe {
	background-color:black;
    -moz-appearance: button;
    -ms-appearance: button;
    -o-appearance: button;
    -webkit-appearance: button;
    appearance: button;
    text-decoration: none;
    color: white;
    padding: 1em 1.5em;
	font-size:18px;
	font-family:serif;
	margin-left:1150px;
}​
</style>
<div class="box">
<body background="https://thumbs.dreamstime.com/z/abstract-background-colorful-wet-paint-blur-effect-modern-digital-art-texture-backdrop-your-project-54803181.jpg">
<h1>CN UPDATE</h1>
</div>
</body>
</html>
<?php
if(isset($_POST['ab']))
{	
	$query1 = "UPDATE test1 SET T1CN='$_POST[num1]' WHERE USN='$_POST[hidden]'";
	$query_run1 = mysqli_query($connect,$query1);
	$query2 = "UPDATE test2 SET T2CN='$_POST[num2]' WHERE USN='$_POST[hidden]'";
	$query_run2 = mysqli_query($connect,$query2);
	$query3 = "UPDATE test3 SET T3CN='$_POST[num3]' WHERE USN='$_POST[hidden]'";
	$query_run3 = mysqli_query($connect,$query3);

	$query4 = "UPDATE noofclassesattended SET CN='$_POST[num5]'WHERE USN='$_POST[hidden]'";
	$resZ=mysqli_query($connect,$query4);
	$st=$_POST['num5'];
	$queryY = "UPDATE attendance_teacher SET CN=(SELECT ATTENDANCE(\"$st\") AS CN) WHERE USN='$_POST[hidden]'";
	$resY=mysqli_query($connect,$queryY);
	$qry = "Select * from attendance_teacher where USN='$_POST[hidden]'";
	$ress=mysqli_query($connect,$qry);
};
$query = "SELECT A.USN,B.T1CN,C.T2CN,D.T3CN
FROM details A,test1 B,test2 C,test3 D
WHERE A.USN=B.USN
AND A.USN=C.USN
AND A.USN=D.USN";
$res=mysqli_query($connect,$query);?><div class="box1"><?php
echo "<table width=600 border=1 cellpadding=1 cellspacing=1 class=gridtable align=center>
<tr>
<th>USN</th>
<th>TEST 1</th>
<th>TEST 2</th>
<th>TEST 3</th>
<th>NO OF CLASSES ATTENDED OUT OF 50</th>
<th>ATTENDANCE</th>
<th>SUBMIT</th>
</tr>";
while($row=mysqli_fetch_array($res))
{
	echo "<form action=cn.php method=post>";
	echo "<tr>";
	echo  "<td>".$row['USN']."</td>";
	
	echo "<td><input type=number name=num1 value=".$row['T1CN']."></td>";
	
	echo "<td><input type=number name=num2 value=".$row['T2CN']."></td>";

	echo "<td><input type=number name=num3 value=".$row['T3CN']."></td>";
	?><?php
	
$var=$row['USN'];	 
$query100 = "SELECT A10.USN,A10.CN
FROM noofclassesattended A10,details B10
WHERE A10.USN=B10.USN
AND A10.USN='$var'";
$res100=mysqli_query($connect,$query100);
$row100=mysqli_fetch_array($res100);
	echo "<td><input type=number name=num5 value=".$row100['CN']."></td>";
	
	$queryA = "SELECT A1.USN,A1.CN
FROM attendance_teacher A1,details B1
WHERE A1.USN=B1.USN
AND A1.USN='$var'";
$resA=mysqli_query($connect,$queryA);
$rowA=mysqli_fetch_array($resA);

	  echo "<td><input name=num4 value=".$rowA['CN']."></td>";
	 
?><?php	
	
	echo "<input type=hidden name=hidden value=".$row['USN'].">";

	echo"<td><input type=submit name=ab value=submit></td>";
	echo "</form></tr>";

}
?>
<a class="clickMe" href="http://localhost/connect/teach.php">BACK</a>
</div>