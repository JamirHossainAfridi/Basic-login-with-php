<!DOCTYPE html>
<html>
<head>
<title>File Upload and view With PHP and MySql</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" />
<button type="submit" name="btn-upload">upload</button>
</form>
</body>
</html>


<?php
if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);

 $con=mysqli_connect("localhost","root","","jamir");
                	if(!$con)
						{
							die("Connection Error: ".mysqli_connect_error()."<br/>");
						}
						else
 $sql="INSERT INTO files(file,type,size) VALUES('$file','$file_type','$file_size')";
 mysql_query($sql); 
}
?>