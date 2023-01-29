

<?php




include("conn.php");

$error="";

session_start();

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit']))
{  
   $count=0;
   $data=mysqli_query($conn,"select * from student_registration where emailid='$_POST[username]' && password='$_POST[password]'");
   $count=mysqli_num_rows($data);
   $row = mysqli_fetch_array($data);
   
   if($count==0)
   {
      $error= "Invalid username or password";
   }
   
  else {
        if($row["type"]=="admin")
         {
          header("Location:admin.php"); 
         }
       else{
           $_SESSION["sname"]=$row["name"];
           $_SESSION["semail"]=$row["emailid"];
           $_SESSION["sgender"]=$row["gender"];
           header("Location:sdb.php");
           }
}
   
}
?>




<!DOCTYPE html>
<html>

<head><title>Log In Page</title></head>
   <script src="jquery-3.6.0.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    
<style>
body{
  background: url(5.jpeg);
  
}
.box{
  margin-top:6%;
  width:74%;
  height:160px;
  background-size: cover;
  margin-left: 13%;
  background-color:gray;
  opacity: 0.9;
  border-radius:12px;
  box-shadow:0px 0px 15px Black;
   border:solid 5px Black;
  border-radius: 12px;
}


.five{
  padding:10px 0px 10px 10px;
  margin-top: 30px;
  margin-left: 55%;
  border-radius:42px;
  width:500px;
  margin-right: 5%;
  box-shadow:0px 0px 55px Black;
  font-size:25px;
  

}
.boxfour{
  
 
}
#boxx{
  margin-right: 40%;
}



</style>





<script>

var myusername = $['#myuserName'];
var mypass= $['#mypassword'];

function EmailValidation(){

    var regexE = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    if(myusername.value.match(regexE)){
      $['#myerror'].html("Invalid Email");
  
    }else{
      $['#myerror'].html("Valid Email");

    }
  }

  valid();
    
function valid(){
EmailValidation();

}

</script>










  <div class="box">
   <table  style ="border-color:red; font-size:16pt"  align="center" width="100%" height="100%">
      <tr>
        <td style="color:Black"><h1 align="center">Welcome to the Library System</h1></td>
      </tr>
      <tr>
        <td style="color:Black" align="center"><b><i>Login Page</i></b></td>
      </tr>
    </table>
  </div>


    <br>
    <br>

<div id="boxx">
<form method="post" action="">

    
        <fieldset align="center" style="  background:rgba(0,0,0,0.7); margin-right: 10%; "  class="five" >


          <div class="boxfour">
            <h3 style="color:white;text-align:center;;padding-top:10px;padding-bottom: 1px;background:#660000;border-radius:12px;margin-top:-13px;margin-left:-12px;height:50px">Login Here</h3>
          </div>



        <table style="font-size:16pt;width:300px;height:50px;margin-right:45px;" align="Right">
        <tr>
            <td><br></td>
        </tr>


        <tr>
            <td><label style="color:white">Username:</label></td>
            <td><input type="text"  name="username" id= myuserName placeholder="Username" style= "border-radius:10px;"></td>
            <br>
        </tr>
        <tr>
            <td><br></td>
        </tr>

        <tr>
            <td><label style="color:white">Password:</label></td>
            <td><input class="form-control-plaintext" id= mypassword style ="background-color:white; border-radius:10px; height:35px;" type="password" name="password" placeholder="**********"  ></td>
        </tr>

        <tr>
            <td  ><input  class="btn btn-success"style= "height:50px; width: 250px; margin-top:20%;margin-left:70%; font-size:20px; weight:Bold;" type="submit" name="submit" value="Login"></td>
        </tr>

        <p style="color:white;font-weight:bold;font-size:20px;text-align:center;background:rgba(255, 255, 255, 0.1)"><?php echo $error;?></p>
          
        <tr>
            <td  class="btn btn-success" style=  "height:50px;  width: 250px; margin-top:20%;margin-left:70%;" ><a href="registration.php" style="color:white; text-decoration:none; font-size:20px; weight:Bold;"  >Sign Up</a></td>
            
        </tr>

        <tr>
            <td ><br></td>
            <td><br></td>
          </tr>
        </table>
      </fieldset>
      </div >
    </form>
    </div>
    <H1 id="myerror"><H1>





</html>
