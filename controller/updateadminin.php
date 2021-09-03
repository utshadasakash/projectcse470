<?php


$con=mysqli_connect('localhost','root');
	 mysqli_select_db($con,'project');
	 if(isset($_POST['submit'])){
	 $id=$_GET["ID"];

	 $newname=$_POST['name'];
     $newid=$_POST['id'];
     $newdepartment=$_POST['department'];
     $newpassword=$_POST['password'];
	 
	 $query="update instructor set Name=$newname,ID=$newid,Department=$newdepartment,Password=$newpassword WHERE ID=$id";
	 
	 $qu=mysqli_query($con,$query);
	if($qu)
	 header('location:adminpanel.php');
    else echo "hoyni";
}
?>

<!doctype html>
 <head> 
 <title>update instructor</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
 
 </head>

<body>

<form action="" method="post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" required>
    
  </div>
  <div class="form-group">
    <label for="id">ID</label>
    <input type="number" class="form-control" name="id" required>
   
  </div>
  
   <div class="form-group">
    <label for="department">Department</label>
    <select class="form-control" name="department" required>
      <option>CSE</option>
      <option>EEE</option>
      <option>BBS</option>
      
    </select>
  </div>
   
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" required>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>