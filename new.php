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
<head>
<div class="box">
<h1>RNSIT 5TH SEMESTER RESULTS</h1>
<h2>Internal marks and its Average</h2>
<style type="text/css">
.bb{
 padding-left:100px;
}
input[type=text]{
    width:20%;
    padding: 12px 20px;
    margin-top:-300px;
	margin-bottom:100px;
	margin-left:90px;
    display: inline-block;
    border: 3px solid black;
    box-sizing: border-box;
	font-family:serif;
	font-size:1em;
	background-color:navajowhite;
}
.box1{
	background-color:black;	
	padding-top:6px;
	padding-left:auto;
	padding-right:auto;
}
h1{
font-family:serif;
font-weight:200;
color:black;
font-size:35px;
text-shadow:1px 1px 1px #000;
}
h2{
font-family:serif;
font-weight:300;
color:black;
font-size:25px;
padding-top:0px;
}
.box{
	background-color:#00FFFF;
	padding-top:10px;
	padding-bottom:10px;
	padding-left:20px;
}
footer{
  padding-top:25px;
  padding-bottom:10px;
  padding-left:20px;
  background:rgba(192,192,192,0.9);
  margin-top:-80px;
  bottom:0;
  z-index:-1 !important;
  font-family: 'Roboto', sans-serif;
  font-size: 1.15em;
  margin-left:-95px;
}
.img{
  margin-left:650px;
  margin-top:40px;
}
#ab{
	background-color:navajowhite;
	color:black;
	font-family:serif;
	font-size:1em;
	padding-top:12px;
	padding-bottom:12px;
	 display: inline-block;
    border: 3px solid black;
    box-sizing: border-box;
	 margin-top:-200px;
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
	margin-left:1080px;
	margin-top:-140px;
}
</style>
</head>
</div>
<div class="box1">
<h1></h1>
</div>
<tr>
<td>
<img class="img" src="http://img.click.in/classifieds/images/164/17_5_2013_17_27_02_qdioibovtfgpmubmvaab3cdb27_pp6z34vakd.jpg"></img>
</td>
<td>
<div class="bb">
 <form action="new.php"  method="post">
 <input type="text"name="search"placeholder="USN IN CAPITALS">
 <input type="submit"value=">>" id="ab">
 </form>
 <td>
 </tr>
 <a class="clickMe" href="http://localhost/connect/Main.php">BACK</a>
  <footer>
  Designed and devloped by <b><a target="_blank" href="https://codepen.io/Smita2197/full/EXKGQj/">Smita Vaidya.</a></b><br/>
         <p class="copyright text-muted small">Copyright &copy; All Rights Reserved</p> 
 </footer>
</html>
<html>
<head>
<style type="text/css">
.modal {
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: white; 
    padding-top: 60px;
}
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    border: 1px solid #888;
    width: 80%; 
}

.close {
    position: absolute;
    right: 35px;
    top: 15px;
    color: #000;
    font-size: 40px;
    font-weight: bold;
} 

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
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
	background-color:#dedede;
}
table.gridtable td{
	border-width:3px;
	border-style:solid;
	padding:15px;
	border-color:#666666;
	background-color:#dedede;
}
.value{
	font-family:verdana,ariel,sans-serif;
	font-size:25px;
	margin-left:432px;
}
#text{
	font-family:serif;
	font-weight:200;
	color:black;
	font-size:35px;
	text-shadow:1px 1px 1px #000;
	text-align:center;
	margin-top:-20px;
}
</style>
</head>
<body>
<?php
if(isset($_POST['search']))
{
	?>
	<div class="modal" id=id02>
	<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
	<h1 id="text">RNSIT INSTITUTE OF TECHNOLOGY</h1>
	<?php 
	$searchq = $_POST['search'];
	$query="select * from details WHERE USN='$searchq'";
	$res=mysqli_query($connect,$query);
	if(mysqli_num_rows($res)>0)
		{  
			$query0="select * from details WHERE USN='$searchq'";
			$sql0=mysqli_query($connect,$query0);
			$row0 = mysqli_fetch_array($sql0);
			echo '<div class="value">'.'NAME:'.$row0['NAME'] ."<br>" .'USN:'.$row0['USN']. "<br>" .'CLASS:'.$row0['CLASS'].'</div>';
			
	?>
	<table class="gridtable" align="center">
	<!-- first row -->
		<tr>
			<th>SUBJECT</th>
			<th>TEST 1</th>
			<th>TEST 2</th>
			<th>TEST 3</th>
			<th>AVERAGE</th>
			<th>ATTENDANCE</th>
		</tr>
	<?php
			$query1="select * from test1 WHERE USN='$searchq'";
			$sql1=mysqli_query($connect,$query1);
			$row1 = mysqli_fetch_array($sql1);
			/* second row */
			echo "<tr>"; ?>
				<td>MES</td>
		<?php
			echo "<td>".$row1['T1MES']."</td>";
			$query2="select * from test2 WHERE USN='$searchq'";
			$sql2=mysqli_query($connect,$query2);
			$row2 = mysqli_fetch_array($sql2);
			echo "<td>".$row2['T2MES']."</td>";
			$var1=$row1['T1MES'];
			$var2=$row2['T2MES'];
			
			$query3="select * from test3 WHERE USN='$searchq'";
			$sql3=mysqli_query($connect,$query3);
			$row3 = mysqli_fetch_array($sql3);
			echo "<td>".$row3['T3MES']."</td>";
			$var3=$row3['T3MES'];
			
			$a=MAX($var1,$var2);
			$b=MAX($var1,$var3); 
			$c=MAX($var2,$var3);
			if($a!=$b)
				$sm=$a+$b;
			else
				$sm=$a+$c;
			$av=$sm/6;
			$avr=round($av);
			
			$query100="UPDATE average SET MES=$avr WHERE USN='$searchq'";
			$sql100=mysqli_query($connect,$query100);
			$query4="SELECT * FROM AVERAGE WHERE USN='$searchq'";
			$sql4=mysqli_query($connect,$query4);
			$row14 = mysqli_fetch_array($sql4);
			echo "<td>".$row14['MES']."</td>";
			
			$queryA="select * from attendance_teacher WHERE USN='$searchq'";
			$sqlA=mysqli_query($connect,$queryA);
			$rowA=mysqli_fetch_array($sqlA);
			echo "<td>".$rowA['MES']."</td>";
			
			/* third row*/
			$query5="select * from test1 WHERE USN='$searchq'";
			$sql5=mysqli_query($connect,$query5);
			$row5 = mysqli_fetch_array($sql5);
						echo "<tr>"; ?>
				<td>CN</td>
		<?php
			echo "<td>".$row5['T1CN']."</td>";
			$query6="select * from test2 WHERE USN='$searchq'";
			$sql6=mysqli_query($connect,$query6);
			$row6 = mysqli_fetch_array($sql6);
			echo "<td>".$row6['T2CN']."</td>";
			$var4=$row5['T1CN'];
			$var5=$row6['T2CN'];
			
			$query7="select * from test3 WHERE USN='$searchq'";
			$sql7=mysqli_query($connect,$query7);
			$row7 = mysqli_fetch_array($sql7);
			echo "<td>".$row7['T3CN']."</td>";
			$var6=$row7['T3CN'];
			
			$a1=MAX($var4,$var5);
			$b1=MAX($var4,$var6); 
			$c1=MAX($var5,$var6);
			if($a1!=$b1)
				$sm1=$a1+$b1;
			else
				$sm1=$a1+$c1;
			$av1=$sm1/6;
			$avr1=round($av1);
			
			$query101="UPDATE average SET CN=$avr1 WHERE USN='$searchq'";
			$sql101=mysqli_query($connect,$query101);
			$query8="select * from average WHERE USN='$searchq'";
			$sql8=mysqli_query($connect,$query8);
			$row8 = mysqli_fetch_array($sql8);
			echo "<td>".$row8['CN']."</td>";
			
			$queryB="select * from attendance_teacher WHERE USN='$searchq'";
			$sqlB=mysqli_query($connect,$queryB);
			$rowB=mysqli_fetch_array($sqlB);
			echo "<td>".$rowB['CN']."</td>";
			
			
			
				/* fourth row*/
			$query9="select * from test1 WHERE USN='$searchq'";
			$sql9=mysqli_query($connect,$query9);
			$row9 = mysqli_fetch_array($sql9);
						echo "<tr>"; ?>
				<td>DBMS</td>
		<?php
			echo "<td>".$row9['T1DBMS']."</td>";
			$query10="select * from test2 WHERE USN='$searchq'";
			$sql10=mysqli_query($connect,$query10);
			$row10 = mysqli_fetch_array($sql10);
			echo "<td>".$row10['T2DBMS']."</td>";
			$var7=$row9['T1DBMS'];
			$var8=$row10['T2DBMS'];
			
			$query11="select * from test3 WHERE USN='$searchq'";
			$sql11=mysqli_query($connect,$query11);
			$row11 = mysqli_fetch_array($sql11);
			echo "<td>".$row11['T3DBMS']."</td>";
			$var9=$row11['T3DBMS'];
			
			$a2=MAX($var7,$var8);
			$b2=MAX($var7,$var9); 
			$c2=MAX($var8,$var9);
			if($a2!=$b2)
				$sm2=$a2+$b2;
			else
				$sm2=$a2+$c2;
			$av2=$sm2/6;
			$avr2=round($av2);


			$query102="UPDATE average SET DBMS=$avr2 WHERE USN='$searchq'";
			$sql102=mysqli_query($connect,$query102);
			$query12="select * from average WHERE USN='$searchq'";
			$sql12=mysqli_query($connect,$query12);
			$row12 = mysqli_fetch_array($sql12);
			echo "<td>".$row12['DBMS']."</td>";
		
			$queryC="select * from attendance_teacher WHERE USN='$searchq'";
			$sqlC=mysqli_query($connect,$queryC);
			$rowC=mysqli_fetch_array($sqlC);
			echo "<td>".$rowC['DBMS']."</td>";
			
		
			/* fifth row*/
			$query13="select * from test1 WHERE USN='$searchq'";
			$sql13=mysqli_query($connect,$query13);
			$row13 = mysqli_fetch_array($sql13);
						echo "<tr>"; ?>
				<td>ATC</td>
		<?php
			echo "<td>".$row13['T1ATC']."</td>";
			$query14="select * from test2 WHERE USN='$searchq'";
			$sql14=mysqli_query($connect,$query14);
			$row14 = mysqli_fetch_array($sql14);
			echo "<td>".$row10['T2ATC']."</td>";
			$var10=$row13['T1ATC'];
			$var11=$row14['T2ATC'];
			
			$query15="select * from test3 WHERE USN='$searchq'";
			$sql15=mysqli_query($connect,$query15);
			$row15 = mysqli_fetch_array($sql15);
			echo "<td>".$row15['T3ATC']."</td>";
			$var12=$row15['T3ATC'];
			
			$a3=MAX($var10,$var11);
			$b3=MAX($var10,$var12); 
			$c3=MAX($var11,$var12);
			if($a3!=$b3)
				$sm3=$a3+$b3;
			else
				$sm3=$a3+$c3;
			$av3=$sm3/6;
			$avr3=round($av3);
			
			
			$query103="UPDATE average SET ATC=$avr3 WHERE USN='$searchq'";
			$sql103=mysqli_query($connect,$query103);
			$query16="select * from average WHERE USN='$searchq'";
			$sql16=mysqli_query($connect,$query16);
			$row16 = mysqli_fetch_array($sql16);
			echo "<td>".$row16['ATC']."</td>";
			
			$queryD="select * from attendance_teacher WHERE USN='$searchq'";
			$sqlD=mysqli_query($connect,$queryD);
			$rowD=mysqli_fetch_array($sqlD);
			echo "<td>".$rowD['ATC']."</td>";
			
			
			/* sixth row*/
			$query17="select * from test1 WHERE USN='$searchq'";
			$sql17=mysqli_query($connect,$query17);
			$row17 = mysqli_fetch_array($sql17);
						echo "<tr>"; ?>
				<td>JAVA</td>
		<?php
			echo "<td>".$row17['T1JAVA']."</td>";
			$query18="select * from test2 WHERE USN='$searchq'";
			$sql18=mysqli_query($connect,$query18);
			$row18 = mysqli_fetch_array($sql18);
			echo "<td>".$row18['T2JAVA']."</td>";
			$var13=$row17['T1JAVA'];
			$var14=$row18['T2JAVA'];
			
			$query19="select * from test3 WHERE USN='$searchq'";
			$sql19=mysqli_query($connect,$query19);
			$row19 = mysqli_fetch_array($sql19);
			echo "<td>".$row19['T3JAVA']."</td>";
			$var15=$row19['T3JAVA'];
			
			$a4=MAX($var13,$var14);
			$b4=MAX($var13,$var15); 
			$c4=MAX($var14,$var15);
			if($a4!=$b4)
				$sm4=$a4+$b4;
			else
				$sm4=$a4+$c4;
			$av4=$sm4/6;
			$avr4=round($av4);
			
			$query104="UPDATE average SET JAVA=$avr4 WHERE USN='$searchq'";
			$sql104=mysqli_query($connect,$query104);
			$query20="select * from average WHERE USN='$searchq'";
			$sql20=mysqli_query($connect,$query20);
			$row20 = mysqli_fetch_array($sql20);
			echo "<td>".$row20['JAVA']."</td>";
			
			$queryE="select * from attendance_teacher WHERE USN='$searchq'";
			$sqlE=mysqli_query($connect,$queryE);
			$rowE=mysqli_fetch_array($sqlE);
			echo "<td>".$rowE['JAVA']."</td>";
			
			
				/* seventh row*/
			$query21="select * from test1 WHERE USN='$searchq'";
			$sql21=mysqli_query($connect,$query21);
			$row21 = mysqli_fetch_array($sql21);
						echo "<tr>"; ?>
				<td>AI</td>
		<?php
			echo "<td>".$row21['T1AI']."</td>";
			$query22="select * from test2 WHERE USN='$searchq'";
			$sql22=mysqli_query($connect,$query22);
			$row22 = mysqli_fetch_array($sql22);
			echo "<td>".$row22['T2AI']."</td>";
			$var16=$row21['T1AI'];
			$var17=$row22['T2AI'];
			
			$query23="select * from test3 WHERE USN='$searchq'";
			$sql23=mysqli_query($connect,$query23);
			$row23 = mysqli_fetch_array($sql23);
			echo "<td>".$row23['T3AI']."</td>";
			$var18=$row23['T3AI'];
		
			$a5=MAX($var16,$var17);
			$b5=MAX($var16,$var18); 
			$c5=MAX($var17,$var18);
			if($a5!=$b5)
				$sm5=$a5+$b5;
			else
				$sm5=$a5+$c5;
			$av5=$sm5/6;
			$avr5=round($av5);
			
		
			$query105="UPDATE average SET AI=$avr5 WHERE USN='$searchq'";
			$sql105=mysqli_query($connect,$query105);
			$query24="select * from average WHERE USN='$searchq'";
			$sql24=mysqli_query($connect,$query24);
			$row24 = mysqli_fetch_array($sql24);
			echo "<td>".$row24['AI']."</td>"; 
			
			$queryF="select * from attendance_teacher WHERE USN='$searchq'";
			$sqlF=mysqli_query($connect,$queryF);
			$rowF=mysqli_fetch_array($sqlF);
			echo "<td>".$rowF['AI']."</td>";
		} 
		else
		{ 
			echo '<script type="text/javascript">alert("invalid usn")</script>';
		}
		
} ?>
</tr>
</table>
</form>
</div>
</body>
</html>