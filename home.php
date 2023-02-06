<?php 
   session_start();
   include("db_conn.php");
   include "php/read.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title> Admin Panel </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <?php if ($_SESSION['role'] == 'admin'){?>

			<!-- admin -->
      		<div class="card">
			  <div class="card-body text-center">
			    <h5 class="card-title">
			    	<?=$_SESSION['name']?><br>
					<?=$_SESSION['id']?>
			    </h5>
			    <a href="logout.php" class="btn btn-primary"> Logout <i class="bx bx-log-in"></a>  
				<br>
			  </div>
			</div>
<br
<!-- Button trigger modal -->
&nbsp <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Add Users
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> Add Users </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

	  <div class="container">
		<form action="php/create.php" 
		      method="post">
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="name">Name</label>
		     <input type="name" 
		           class="form-control" 
		           id="name" 
		           name="name" 
		           value="<?php if(isset($_GET['name']))
		                           echo($_GET['name']); ?>" 
		           placeholder="Enter name" required>
		   </div>

		   <div class="form-group">
		     <label for="email">Email</label>
		     <input type="email" 
		           class="form-control" 
		           id="email" 
		           name="email" 
		           value="<?php if(isset($_GET['email']))
		                           echo($_GET['email']); ?>"
		           placeholder="Enter email">
		   </div>

		   <button type="submit" 
		          class="btn btn-primary"
		          name="create">Create</button>
	    </form>
	</div>

	
    </div>
  </div>
</div>


			</div>
      	<?php }else { ?>

      		<!-- users -->
      		<div class="card">
			  <div class="card-body text-center">
			    <h5 class="card-title">
			    	<?=$_SESSION['email']?>
			    </h5>
			    <a href="logout.php" class="btn btn-primary"> Logout <i class="bx bx-log-out"></a>  
			  </div>
			</div>
		
      	<?php } ?>
      </div>

<br><br><br>
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>

			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Name</th>
			      <th scope="col">Email</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?=$i?></th>
			      <td><?=$rows['name']?></td>
			      <td><?php echo $rows['email']; ?></td>
			      <td>	


				  <a href="update.php?id=<?=$rows['id']?>" 
			      class="btn btn-success"> Edit Profile </a>

				  <a href="php/delete.php?id=<?=$rows['id']?>" 
			      class="btn btn-danger">Delete</a>
			      
				  
				</td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			
	  
</body>
</html>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>