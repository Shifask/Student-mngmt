<?php
$name=$_POST['name'];
$id=$_POST['id'];
$gender=$_POST['gender'];
$date=$_POST['date'];
$city=$_POST['city'];
$state=$_POST['state'];
$email=$_POST['email'];
$qual=$_POST['qual'];
$stream=$_POST['stream'];


if(isset($_POST["submit"]))
   { 
	$file_open=fopen("student.csv","a");
	
	$form_data=array(
	'id'=> $id,
	'name'=> $name,
	'gender'=> $gender,
	'date' => $date,
	'city'=> $city ,
	'state'=> $state, 
	'email'=> $email,
	'qual'=>$qual,
	'stream'=> $stream
		);
	fputcsv($file_open,$form_data);
	echo $name.' has been added to our system';
	echo '<br>';
	echo 'her emailId is '.$email;
	$id='';
	$name='';
	$gender='';
	$date='';
	$city='';
	$state='';
	$email='';
	$qual='';
	$stream='';
		
    }
	?>