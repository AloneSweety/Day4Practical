<!DOCTYPE html>
<html>
<head>
    <title>printtable</title>
</head>
<body>
   
<?php

 //echo "Student
require_once 'dbconf.php'; //(conf/dbconf.php) (folder/file)
require_once 'myfun.php';

//PrintTable ("student",$connect);
//student($connect);
 
 $student_id = $_GET['student_id'];

Studentdetails($student_id,$connect);


?>


</body>
</html>