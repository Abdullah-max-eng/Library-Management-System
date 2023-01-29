<?php
session_start();
$name=$_SESSION["sname"];
$email=$_SESSION["semail"];
$gender=$_SESSION["sgender"];


include("conn.php");
?>

<html>
<head>
<title>book info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    
<style>
body{
  background: url("2.jpg");
}


.box{
  width:74%;
  height:160px;
  background-size: cover;
  margin-left: 14%;
  color:Black;
  

  border-radius: 100px;

}





ul{
  padding: 0  ;
  list-style: none;
 
}
ul li{
  float: left;
  width: 200px;
  height: 40px;
  border-radius:15px;
  background-color: gray;

  line-height: 40px;
  text-align: center;
  font-size: 20px;
  margin-right: 2px;
}
ul li a{
  text-decoration: none;
  border-radius:15px;
  color: white;
  display: block;
}
ul li a:hover{
  background-color: black;
  border-radius:15px;
}
ul li ul li{
  display: none;
  
}
ul li:hover ul li{
  display: block;
  
}

.nav{
  padding-left:25%;
  padding-top:10%;

}
.three{
  margin-left: 30%;
  margin-top: 5px;
  box-shadow:0px 0px 30px black;
  background:white;
  border-radius:15px;
 
  
  
}
table,tr,td{
  text-align: center;
}


</style>


</head>
<body>

  <head><title>Books Info</title></head>


  <body>





    <div class="box">
     <table  style =" font-size:40pt"  align="center" width="100%" height="100%">
        <tr>
          <td align="center"><b><i>Your Books</i></b></td>
        </tr>
      </table>
    </div>








          
          

      
    <fieldset  style ="height:520px; width:650px;overflow:auto" class="three"  >
    <legend align="center" style="color:black"><b><u>Your Books</u></b></legend>

    <table width="100%" height="310px" class="table table-hover"  border="3"  align="center" style="color:black;  box-shadow:0px 0px 15px; font-size: 20px;">
      <tr>
        <th height="50">BOOK ID</th>
        <th>BOOK NAME</th>
        <th>RECIEVE DATE </th>
        <th>SUBMISSION DATE</th>
      </tr>
      
        




        <?php $query1="SELECT * FROM `student_book`  where `student_book`.`emailid` = '$email'";
        
        $data=mysqli_query($conn,$query1);
        
	              $row = mysqli_fetch_array($data);
                      if($row[0]!=""){   
                      
                        echo "<tr>";
                        echo "<td>" ;echo $row["book_1_id"]; echo "</td>";
                        echo "<td>";echo $row["book_1"]; echo "</td>";
                        echo "<td>"; echo $row["recive_date_1"]; echo "</td>";
                        echo "<td>"; echo $row["submisson_date_1"]; echo "</td>";
                        echo "</tr>";
                      
                      
                      
                    }
        
        else{
                        echo "<tr>";
                        echo "<td>" ;echo "You"; echo "</td>";
                        echo "<td>";echo "Have"; echo "</td>";
                        echo "<td>"; echo "No"; echo "</td>";
                        echo "<td>"; echo "Book"; echo "</td>";
                        echo "</tr>";
                      }

	            ?>
            
        
         <?php
        $query1="SELECT * FROM `student_book`  where  `student_book`.`emailid` = '$email'";
        
        $data=mysqli_query($conn,$query1);
        
            
        
	              $row = mysqli_fetch_array($data);
                      if($row[0]!=""){
                      
	                 
                      
                        echo "<tr>";
                        echo "<td>" ;echo $row["book_2_id"]; echo "</td>";
                        echo "<td>";echo $row["book_2"]; echo "</td>";
                        echo "<td>"; echo $row["recive_date_2"]; echo "</td>";
                        echo "<td>"; echo $row["submisson_date_2"]; echo "</td>";
                        echo "</tr>";
                          
                     
                      
                    }
             else{
                        echo "<tr>";
                        echo "<td>" ;echo "You"; echo "</td>";
                        echo "<td>";echo "Have"; echo "</td>";
                        echo "<td>"; echo "No"; echo "</td>";
                        echo "<td>"; echo "Book"; echo "</td>";
                        echo "</tr>";
                      }
        

	            ?>
        
    </table>
    </fieldset>






  <div class="nav">
        <ul>
          <li><a href="sdb.php">Home</a></li>
          <li><a  style="background-color: black" href="sbooks.php">Your Books Info</a></li>
          <li><a href="aboutus.php">About Us</a>
          </li>
          <li><a href="index.php">Logout</a></li>
        </ul>
    <br><br>





</body>
</html>
