<html>
    <head>
        <title>File Upload and view With PHP and MySql</title>
    </head>
    <body>
        <h5 align="right"><a href="login.php">log out</a></h5>
        
        <form  action="upload.php" method="post" enctype="multipart/form-data">
            <table width="30%" align="center">
                <tr>
                    <td>
                         <input type="file" name="file" />
                    </td>
                    <td>  <input type="submit" name="upload" value="upload" /></td>
                </tr>
                <tr align="center">
                    <td><button><a href="view.php">View alll Files</a></button>  </td>
                </tr>
            </table>          
         </form>  
    </body>
</html>