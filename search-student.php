<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="style2.css">

<title>Student Management System</title>
<script type='text/javascript' src='student.js'></script>

</head>
<body>
<header>
<img src="student.jpg" style=" height:100px;width:160px;margin:20px 20px;float:left">
<p style="font-size:55px;color:white;float:left;margin:20px 270px;">Displaying Student </p>
</header>

<form action="search-student.php" method="post" name="myForm"  onsubmit='return getId()'>

<h3 class="label">Enter Student ID</h3>
<input type="text" placeholder="Student ID" name="id" class="texts"  required>
<input type="submit" value="Search Student" name="submit" id="submit" >
</form>
<div id="container" class="container">
<table class="gridtable" id="tablemain">
<thead>
<tr class="tableheader">
<th>Student ID</th>
<th>Student Name</th>
<th>Gender</th>
<th>Date of Birth</th>
<th>City</th>
<th>State</th>
<th>EmailID</th>
<th>Qualification</th>
<th>Stream</th>

</tr>
</thead>
<tbody>
<?php
$id=$_POST['id'];
 if(isset($_POST["submit"]))
 {
if(($csvfile=fopen("student.csv","r")) !==FALSE ){
	while(($csvdata=fgetcsv($csvfile,1000,",")) !==FALSE){
			echo '<tr>';
	if($csvdata[0]==$id){
		echo '<td>'.$csvdata[0].'</td>';
		echo '<td>'.$csvdata[1].'</td>';
		echo '<td>'.$csvdata[2].'</td>';
		echo '<td>'.$csvdata[3].'</td>';
		echo '<td>'.$csvdata[4].'</td>';
		echo '<td>'.$csvdata[5].'</td>';
		echo '<td>'.$csvdata[6].'</td>';
		echo '<td>'.$csvdata[7].'</td>';
		echo '<td>'.$csvdata[8].'</td>';
		
	}
	echo '</tr>';
	}
	fclose($csvfile);
}
}
?>

</tbody>
</table>
</div>
</body>
</html>
