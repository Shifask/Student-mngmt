<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="style1.css">

<title>Student Management System</title>
<script type='text/javascript' src='student.js'></script>
</head>
<body>
<div id="main">
<br>
<form action="student.php" method="post" name="myForm"  onsubmit='return validator()'>
<h3 class="label">Student ID</h3>
<input type="text" placeholder="Enter Student ID" name="id" class="texts"  required>
<h3 class="label">Student Name</h3>
<input type="text" placeholder="Enter Student Name"  name="name" class="texts"  required>
<h3 class="label">Gender</h3>
<input type="radio" class="radio" name="gender" value="Male" required>Male  <br>
<input type="radio" class="radio" name="gender" value="Female" required>Female
<br>
<h3 class="label">Date of Birth</h3>
<input type="date" name="date" class="texts" required>
<h3 class="label">City</h3>
<input type="text" placeholder="Enter City" name="city" class="texts"  required>
<h3 class="label">State</h3>
<input type="text" placeholder="Enter State"  name="state" class="texts" required>
<h3 class="label">EmailId</h3>
<input type="text" placeholder="Enter EmailId"  name="email" class="texts"  required>

<h3 class="label">Qualification</h3>
<input type="text" placeholder="Enter Qualification"  name="qual" class="texts"  required>
<h3 class="label">Stream</h3>
<input type="text" placeholder="Enter Stream"  name="stream" class="texts" required>
<br>
<input type="submit" value="submit" name="submit" id="submit" >

</form>
</div>
</body>
</html>
