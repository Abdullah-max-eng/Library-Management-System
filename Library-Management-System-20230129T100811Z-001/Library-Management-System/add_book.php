<?php include("conn.php");
$alert="";
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['sub']))
{

  $bookname=$_POST['booksname'];
  $authorname=$_POST['authorname'];
  $id=$_POST['book_id'];  
  $copy=$_POST['copies'];
  $dept=$_POST['dept'];
  $avl_cpy=$copy;
  

  if($bookname!="" && $authorname!="" && $id!="" && $copy!="")
  {  
     
  
     $file_name = $_FILES['file']['name'];
	  $new_file_name=$id.".pdf";
    $file_tmp_loc = $_FILES['file']['tmp_name'];
	   $file_store = "ebooks/";
     $fpath=$file_store.$new_file_name;
	 $accepted=array("pdf");

	 
	 
	if(!in_array(pathinfo($file_name,PATHINFO_EXTENSION),$accepted))
	{
	$msg= $file_name."<br> is not acceptable file type";
	}
	else
	{
	  move_uploaded_file($_FILES['file']['tmp_name'],$file_store.$new_file_name);
	  
	 }

       
      
      $insert="INSERT INTO `book`(`b_id`,`booksname`,`authorname`,`copies`,`avl_cpy`,`dept`,`file_name`,`path`) VALUES('".$id."','".$bookname."','".$authorname."','".$copy."','".$avl_cpy."','".$dept."','".$new_file_name."','".$fpath."')";
      $data=mysqli_query($conn,$insert); 
      if($data)
	  {
	  
	  
	    $alert= " Book Sccessfully Added";
	  }
      else{
          $alert="Insertion Failed!";
      }
   }
	  else
	  {
	    $alert= "Fields cannot not be left empty";
	  }
}

?>
<html>

<head>
<title>Add_Book</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<style>
body{
  background: url(2.jpeg);
}
.box{
  width:74%;
  height:160px;
  background-color:black;
  background-size: cover;
  margin-left: 13%;
  margin-top: 3%;
  opacity: 1  ;
  border-radius:12px;
  box-shadow:0px 0px 30px black ;
   border:solid 1px black;
  border-radius: 12px;
}

	 .header{
	    width:400px;
			color:#FFFFFF;
			 display: inline-block;
			 width:73.5%;
			 height:370px;
			 margin-left:13%;
    
       background-size: cover;
			 box-shadow:0px 0px 15px lightgreen;
       border-radius:12px;
         border:solid 1px #CF0403;

			 }


	.title
	       {
				color:#FFFFFF;
			   font-size:20px;
			 	font-weight:10px;
				
				
     
        margin-top: 4%;
				margin-right:56%;
				padding-left:10%;
				font-style:italic;
				}


        
	.title h2{
	           background:#660000;
			   border:none;
         margin-left:20px;
         margin-top: 10px;
			  padding-top:3px;
        padding-bottom: 2px;
			    padding-left:150px;
				border-radius:10px;
        width:280px;
	           }


	.container{
        margin-top: 25px;
	            margin-left:30%;

				font-weight:10px;
				height:450px;
				background:rgba(0,0,0,0.6);
				padding-left:5%;
                width:600px;
        box-shadow:0px 0px 15px Black;
        /* background-color: gray; */
        border-radius:18px;
        overflow:auto;
				}
   






   .header input[type="submit"]
          {

		    font-size:25px;
		    text-align:center;
			border:none;
			height:40px;
			margin-left:110% ;
            margin-top: 10px;
			background:#660000;
			color:#FFFFFF;
			border-radius:18px;
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
  padding-left:12%;

}


</style>
</head>
<body>


  <div class="box">
   <table  style ="border-color:red; font-size:16pt"  align="center" width="100%" height="100%">
      <tr>
         <td style="color:Black; background-color:Gray;"><h1 align="center"><i>Welcome to the Library System</i> </h1></td></tr>
      </tr>
      
      <tr>
        <td style="color:white" align="center"><b><i>Add Books to  Database</i></b></td>
      </tr>
    </table>
  </div>

  

  
<br><br><br>

<form action="" method="POST" enctype="multipart/form-data">




<div class = "container">

<div class="title">
    <h2>Add Book</h2>
</div>

  <table style= "color:#FFFFFF;padding-top:10px; text-weight:Bo">

  <tr>
     <td>Book Name:</td>
     <td><input type="text" name="booksname" class="form-control-plaintext" style ="background-color:white;" placeholder="Book Name"/></td>
  </tr>

	<tr>
	  <td>Author Name:</td>
	  <td><input type="text" name="authorname" class="form-control-plaintext" style ="background-color:white;"  placeholder="Book Author"/></td>
    <td style="color:green;font-weight:bold;text-align:center;"><?php echo $alert; ?></td>
	</tr>

  <tr>
     <td>Book ID:</td>
     <td><input  type="text" name="book_id" class="form-control-plaintext" style ="background-color:white;" placeholder="ISBN"/></td>
	</tr>

	<tr>
	  <td>Number Of Copies:</td>
	  <td><input type="text" name="copies" class="form-control-plaintext" style ="background-color:white;" placeholder="Available Copies"/></td>
	</tr>
   
   <tr>
	  <td >Department:</td>
	 <td>

	 <select name="dept" class="btn btn-secondary dropdown-toggle" style= "background-color:blue;">
	   <option value="CS">Computer Science</option>
	   <option value="Business">Business</option>
	   <option value="Law">Law</option>
	   <option value="PoliticalScience">Political Science</option>

	   </select>
	   
	</td>
	</tr>

	<tr>
	 <td>Upload an e-book:</td>
	 <td><input type="file" name="file"  /></td>
	</tr>


    <tr>
	    <td>
        <h2><input style="margin-left:180%;margin-top:10%;" class="btn btn-success" type="submit" name="sub" value="SUBMIT"/></h2>
      </td>
	  </tr>


   </table>
 </form>
</div>



<div class="nav">
<ul>
  <li><a href = "admin.php">Home</a></li>
  <li ><a href = "add_book.php"  style="background-color:Black">Add Book</a></li>
  <li><a href = "edit_book.php">Edit Book</a></li>
    <li><a href = "delbook.php">Delete Book</a></li>
  <li><a href = "index.php">Logout</a></li>
</ul>
</div>



</body>
</html>
