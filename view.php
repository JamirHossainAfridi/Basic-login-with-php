<html>
<head>
    <title></title>
</head>
<body>
<h2 align="center">All Project List</h2>
<table width="80%" border="1">
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
    <?php
    $con=mysqli_connect("localhost","root","","jamir");
	if(!$con)
	{
		die("Connection Error: ".mysqli_connect_error()."<br/>");
	}
 $sql="SELECT * FROM files";
 $result_set=mysqli_query($con,$sql);
 if(mysqli_num_rows($result_set)>0)
	{
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['name'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 }
}
 ?>
</table>

</body>
</html>