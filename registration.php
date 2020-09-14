
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
				<fieldset >
				<legend align="center" > <h3><i>Registration</i></h3></legend>
				

				<table align="center" height="400" >
				
				<tr>
					<td>First Name:</td>
					<td><input type="text" name="fname" placeholder="Please give your first name"/></td>
				</tr>
				<tr>
					<td>Last Name:</td>
					<td><input type="text" name="lname" placeholder="(optional)"/></td>
				</tr>
				<tr>
					<td>DOB:</td>
					<td>Month
						<select name="month">
							<option value="January">January</option>
							<option value="February">February</option>
							<option value="March">March</option>
							<option value="April">April</option>
							<option value="May">May</option>
							<option value="June">June</option>
							<option value="July">July</option>
							<option value="August">August</option>
							<option value="September">September</option>
							<option value="October">October</option>
							<option value="November">November</option>
							<option value="December">December</option>
						</select>
					</td>
					<td>Date
						<select name="date">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							
							
							
						</select>
					</td>
					<td>Year
						<select name="year">
							<option value="1990">1990</option>
							<option value="1991">1991</option>
							<option value="1992">1992</option>
							<option value="1993">1993</option>
							<option value="1994">1994</option>
							<option value="1995">1995</option>
							<option value="1996">1996</option>
							<option value="1997">1997</option>
							<option value="1998">1998</option>
							<option value="1999">1999</option>
							<option value="2000">2000</option>
							<option value="2001">2001</option>
							<option value="2002">2002</option>
							<option value="2003">2003</option>
							<option value="2004">2004</option>
							<option value="2005">2005</option>
							<option value="2006">2006</option>
							<option value="2007">2007</option>
							<option value="2008">2008</option>
							<option value="2009">2009</option>
							<option value="2010">2010</option>
							<option value="2011">2011</option>
							<option value="2012">2012</option>
							<option value="2013">2013</option>
							<option value="2014">2014</option>
							<option value="2015">2015</option>
							<option value="2016">2016</option>
							
						</select>
					</td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td><input type="radio" name="gender" value="male" />Male</td>
					<td><input type="radio" name="gender" value="female" />Female</td>
					
				</tr>
				<tr>
					<td>Phone :</td>
					<td><input type="text" name="phone" placeholder="Please give your phone number"/></td>
				</tr>
				<tr>
					<td>Email :</td>
					<td><input type="text" name="email" placeholder="Please give your email"/></td>
				</tr>

				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" placeholder="Please give your password"/></td>
					
					
				</tr>	
				<tr>
					<td>Confirm Password:</td>
					<td><input type="password" name="cpassword" placeholder="Please retype your password"/></td>
					
					
				</tr>
				<tr>
					<td></td>
					
				</tr>			
				<tr>
					<td><a href="login.php"><input type="button" value="Back"/></a></td>
					<td align="center"><input type="submit" name="register" value="Register"/></td>					
				</tr>
				
					
				</table>
		
		</fieldset>
		</form>	

</body>
</html>
<!--HTML_Ends-->
<!--PHP_Starts-->

<?php

   
    if (isset($_POST['register'])) 
    {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $email=$_POST['email'];
   
    

    $monthArray31=array("January","March","May","July","August","Octeber","December");
    $monthArray30=array("April","June","September","November");
   
    $fnamevalid=0;
    $lnamevalid=0;
    $gendervalid=0;
    $phonevalid=0;
    $DOBvalid=0;
    $passvalid=0;
    $emailvalid=0;
    	
    	//first name val starts

    if($fname=="")
    {
        echo "First Name can't be empty"."<br/>";
    }

    else{

        if(ord($fname[0]) <= 57){
            echo "First Name Must start with letter"."<br/>";
        }
        
        
        else{
            for ($i=0; $i <strlen($fname) ; $i++){
            if (ord($fname[$i]) == 95 || ord($fname[$i]) == 32 || 
            ord($fname[$i]) == 46 || (ord($fname[$i])>=65 && ord($fname[$i])<=90))
                {
                    $fnamevalid=1;   
                }
            else
                $fnamevalid=0;
                }
            }

        
        }

        //last name val starts

    if($lname=="")
    {
        echo "First Name can't be empty"."<br/>";
    }

    else{

        if(ord($lname[0]) <= 57){
            echo "First Name Must start with letter"."<br/>";
        }
        
        
        else{
            for ($i=0; $i <strlen($lname) ; $i++){
            if (ord($lname[$i]) == 95 || ord($lname[$i]) == 32 || 
            ord($lname[$i]) == 46 || (ord($lname[$i])>=65 && ord($lname[$i])<=90))
                {
                    $lnamevalid=1;   
                }
            else
                $lnamevalid=0;
                }
            }

        
        }
   
   
        //gender val starts
        if(isset($_POST['gender'])){
        $gender = $_POST['gender'];
        
        if($gender=="")
        {
            echo "You must select one";
        }
        else
            $gendervalid=1;
    }
    else
    {
        $gendervalid=0;
        echo "Select a gender please"."<br/>";
    }
    //gender val ends

    //phone val starts
    if($phone=="")
    {
        echo "Must need to give a valid Phone number"."<br/>";
    }

    else {
        if(strlen($phone)!=11)
    {
        echo "Phone no should be 11 digit";

    }
    else{
            for ($k=0; $k <strlen($phone) ; $k++){
            if (ord($phone[$k]) >= 48 && ord($phone[$k]) <=57 ){
                    $phonevalid=1;

                }
            
            else
                $phonevalid=0;
            }
                
            }
        }
    
    //phone_val_ends
    //DOB_val_starts
    if($date=="" || $month=="" || $year==""){
        echo "Please give all information";
    }
    else {
        foreach ($monthArray31 as $key) {
            if(($month)==$key && ($date>="1" && $date<="31") && ($year>="1990" && $year<="2016")){
                
                $DOBvalid=1;
            }
        }
        foreach ($monthArray30 as $key) {
            if(($month)==$key && ($date>="1" && $date<="30") && ($year>="1990" && $year<="2016")){
                $DOBvalid=1;
            }
        }
        if(($month)=="February")
        {
            if(($date>="1" && $date<="29") && ($year>="1990" && $year<="2016")){
                
                $DOBvalid=1;
            }
        }

        
    }

    //Dob_Val_Ends
    //Email_Val_Starts
       $email = $_POST['email'];
	
	if($email=='')
	{
		echo "Must need to give a valid email!"."<br/>";
	}
	else{
		
		
		
		try {
		list($username, $domain) = explode('@', $email);
		
		///echo $username;
		//echo("<br>");
		//echo $domain;
		
		list($username, $domain) = explode('.', $domain);
		//list($username, $domain) = explode('.', $domain);
		//echo("<br>");
		//echo $username;
		////echo("<br>");
		//echo $domain;
} catch (Exception $e) {
    echo 'not valid';
}
	}
        

    //Email_Val_End

    //Pass_Val_Starts

      
                 
                  if(empty($_POST['password']))
                {
                    
                    
                    echo "Password is require"."<br/>";
                    
                }

                 if(empty($_POST['cpassword']))
                {
                    
                    echo "Confirm Password is require"."<br/>";
                    
                }

                if ($password!=$cpassword) 
                {
                    
                    echo "You need to give same  password and Confirm Password"."<br/>";
                    
                }
                else if(strlen($password)<1) 
                {
                
                    echo "Password at least  6 characters"."<br/>";
                    
                }
                else{
                    $passvalid=1;
                }
                //pass_val_ends
                //Database_starts
               // if($fnamevalid===1  && $gendervalid===1 && $phonevalid===1  && $passvalid===1 && $emailvalid===1){
                	$con=mysqli_connect("localhost","root","","jamir");
                	if(!$con)
						{
							die("Connection Error: ".mysqli_connect_error()."<br/>");
						}
						else
						{
							$dob="$date"." "."$month"." "."$year";
							 $gender=$_POST['gender'];
							$sql="INSERT INTO users(fname,lname,dob,gender,phone,email,password) VALUES('$fname','$lname','$dob','$gender','$phone','$email','$password')";
							if(mysqli_query($con,$sql))
							{
								//header("Location:login.php");
								echo "Registration Complete";

							}
							else
							{
								echo "This Email is all ready used...please Enter another valid email";
							}
						}
							
						mysqli_close($con);		
						//}
						
                }
                             
?>

<!--PHP_Ends-->