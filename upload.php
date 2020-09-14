<?php
if(isset($_POST['upload']))
   {    
     
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder="uploads/";
    $email=$_POST['email'];
   // move_uploaded_file($file_loc,$folder.$file);

   $con=mysqli_connect("localhost","root","","jamir");
       	if(!$con)
		{
			die("Connection Error: ".mysqli_connect_error()."<br/>");
		}
						
     $sql="INSERT INTO files(name,type,size,email) VALUES('$file','$file_type','$file_size','$email')";
    if(mysqli_query($con,$sql))
		{
			echo "File Uploaded Successfully...";

		}
		else
		{
			echo "Error in file uploading";
		}
		
mysqli_close($con);	
   }
?>