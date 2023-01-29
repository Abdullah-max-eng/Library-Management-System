<?php include("conn.php");
$alert = "";
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit']))

{
  $name=$_POST['name1'];
  $roll=$_POST['roll'];
  $gender=$_POST['gender'];  
  $dept=$_POST['department'];
  $year=$_POST['year'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $_SESSION["sname"]=$name;
  $_SESSION["semail"]=$email;

    
    if($name!="" && $roll!="" && $dept!="" && $year!="" && $email!="" && $password!="" )
  { 
      $insert="INSERT INTO `student_registration`(`roll`,`gender`,`name`,`dept`,`year`,`emailid`,`password`) VALUES('".$roll."','".$gender."','".$name."','".$dept."','".$year."','".$email."','".$password."')";
      $data=mysqli_query($conn,$insert); 
            if($data)
            {
                  header("Location:thnk.php"); 
            }
            else
            {
              $alert = "Either Email of roll number is already taken";
            }
        
    }
    else{
      $alert = "Fields Should Not Be Empty..!!";
    }
}?>

<!DOCTYPE html>
<html>

<style type="text/css">
body{
  background: url("11.jpeg");
  background-repeat: no-repeat;
  background-size: cover;
   
}
.h1{
  background:#106dc7ba;
  margin-top: 20px;
  margin-left:400;
  margin-right:400;
  border-radius:10px;

 
}
.title{
  width:100%;
  


}

.title h2{
      background:#106dc7;
       border:none;
       margin-left:9px;
      margin-top: -05px;
      padding-top:3px;
      padding-bottom: 2px;
        padding-left:100px;
      border-radius:10px;
      width:98.2%;
      color:white;
           }
.one{
  margin-top: 10.5%;
  margin-left:30%;
  margin-right:20%;
  opacity: .9;
  box-shadow:0px 0px 15px black;
  height:320px;
  background:rgba(0,0,0,0.8);
  width:50%;
}
.boxtwo{
  background-size: 50% 50%;
  border-radius:20px;
  align="center";
  margin-right:10%;
}







.boxtwo input[type="submit"]
   {
position:center;
     font-size:25px;
     text-align:center;
   border:none;
   height:50px;
   width: 170px;
   
   margin-left:90% ;
   margin-top: 10px;
   background:#106dc7;
   color:#FFFFFF;
   border-radius:10px;
   }


   .boxtwo input[type="reset"]
   {
position:center;
     font-size:25px;
     text-align:center;
   border:none;
   height:50px;
   width: 170px;
   
   margin-left:90% ;
   margin-top: 10px;
   background:#106dc7;
   color:#FFFFFF;
   border-radius:10px;
   }

</style>




<head>
  <title>
    Registration
  </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</head>
<body>


  <div class="h1">
   <table  style =" font-size:16pt;color:white;font-size:25pt;" align="center">
      <tr>
          <td  align="center"><b>Registration Page </b></td>
      </tr>
    </table>
  </div>


  <br><br>


<div  class="boxtwo" >

    
<fieldset align="center" style="color:black;" class="one">

    <div class="title">
    <h2>Personal Information</h2>
    </div>



<form action="" method="post">
<table align="Right" style="color:white;font-size:16pt;  margin-right:30% ;">

	  <tr>
			<td>Name:</td>
      <td ><input type="text" required="required" name="name1" size="17" maxlength="30" style="color:blue"/></td>
	  </tr>



    <tr>
      <td>Gender:</td>
      <td> 
        <input type="radio" name="gender" value="m" checked> Male
        <input type="radio" name="gender" value="f"> Female</td>
    </tr>



<tr>
   <td>University ID:</td>

  <td>
   <input type="text" name="roll" required="required" size="17" maxlength="30" style="color:blue"/>
  </td>
  
</tr>




<tr>
<td>Department:</td>
 <td>
    <select required name="department">
     <option value="CS">Computer Science</option>
	   <option value="Business">Business</option>
	   <option value="Law">Law</option>
	   <option value="PoliticalScience">Political Science</option>
</select>
</td>
</tr>



<tr>
      <td>Year:</td>
      <td>
        <select required name="year">
          <option value="1st_year">1st Year</option>
          <option value="2nd_year">2nd Year</option>
          <option value="3rd_year">3rd Year</option>
          <option value="4th_year">4th Year</option>
          </select>
      </td>
</tr>



<tr>
  <td>Email Address:</td>
  <td><input type="email" name="email" required="required" size="17" maxlength="30" style="color:blue"/></td>
</tr>



<tr>
     <td>Password:</td>

      <td>
      <input type="text" name="password" required="required" size="17" maxlength="30" style="color:black"/>
      </td>

</tr>

<tr>
  <td>
    <input type="submit" name="submit" value="Submit">
  </td>
</tr>


<tr> 
  <td>
    <input type="reset" name="" value="Reset">
  </td>
</tr>


<tr> 
<td>
    <p style="color:red;font-weight:bold;text-align:center; background:white ;"> <?php echo $alert; ?></p>
</td>
</tr>




</table>
</form>
 </fieldset>
 
</div>





  

</div>
</body>
</html>
