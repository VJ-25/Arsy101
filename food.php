<<<<<<< HEAD
<?php
if (isset($_POST['submit'])) {
	$file = $_FILES['file'];
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.',$fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg','jpeg','png' );

	if (in_array($fileActualExt,$allowed )) {
		if ($fileError === 0) {
			if ($fileSize < 1000000) {
				$fileNameNew = uniqid('',true).".".$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				header("Location : food.php?uploadsuccess");
			}
			else {
				echo "Your file is too big!";
			}
		} else {
			echo "There was an error uploading your file!";
		}
	}
	else
	{
		echo "You cannot upload files of this type!";
	}
}?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="exc.css">
	<title>Food</title>
</head>
<body>
	
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
			<a class="navbar-brand" href="#">ARSY</a>
	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	  			<span class="navbar-toggler-icon"></span>
	  		</button>
	  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
	  			<ul class="navbar-nav mr-auto">
	  				<li class="nav-item active" style="padding: 20px;">
	  					<a class="nav-link" href="comm.html">Home <span class="sr-only">(current)</span></a>
	  				</li>
	      			<li class="nav-item" style="padding: 20px;">
	        			<a class="nav-link" href="members.html">Members</a>
	      			</li>
	      			<li class="nav-item dropdown" style="padding: 20px;">
	        			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	        				Agricultural Products
	        			</a>
	        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	        				<a class="dropdown-item" href="food.html">Food</a>
	          				<a class="dropdown-item" href="fibre.html">Fibre</a>
	          				<a class="dropdown-item" href="fuels.html">Fuels</a>
	          				<a class="dropdown-item" href="raw.html">Raw Materials</a>
	          	        </div>
	          	    </li>
	      			
	      		</ul>
	      		<li class="nav-item dropdown " style="padding: 20px; " >
	        			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	        				Login
	        			</a>
	        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	        				<a class="dropdown-item" href="login.html">Login</a>
	          				<a class="dropdown-item" href="members.html">Sign Up</a>
	          	        </div>
	          	</li>
	      			
	    	</div>
	    </nav>
	</header>
	<?php include('upload.php') ?>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="file">
		<button type="submit" name="submit">UPLOAD</button>
		
		
	</form>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>



</body>
=======
<?php
if (isset($_POST['submit'])) {
	$file = $_FILES['file'];
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.',$fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg','jpeg','png' );

	if (in_array($fileActualExt,$allowed )) {
		if ($fileError === 0) {
			if ($fileSize < 1000000) {
				$fileNameNew = uniqid('',true).".".$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				header("Location : food.php?uploadsuccess");
			}
			else {
				echo "Your file is too big!";
			}
		} else {
			echo "There was an error uploading your file!";
		}
	}
	else
	{
		echo "You cannot upload files of this type!";
	}
}?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="exc.css">
	<title>Food</title>
</head>
<body>
	
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
			<a class="navbar-brand" href="#">ARSY</a>
	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	  			<span class="navbar-toggler-icon"></span>
	  		</button>
	  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
	  			<ul class="navbar-nav mr-auto">
	  				<li class="nav-item active" style="padding: 20px;">
	  					<a class="nav-link" href="comm.html">Home <span class="sr-only">(current)</span></a>
	  				</li>
	      			<li class="nav-item" style="padding: 20px;">
	        			<a class="nav-link" href="members.html">Members</a>
	      			</li>
	      			<li class="nav-item dropdown" style="padding: 20px;">
	        			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	        				Agricultural Products
	        			</a>
	        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	        				<a class="dropdown-item" href="food.html">Food</a>
	          				<a class="dropdown-item" href="fibre.html">Fibre</a>
	          				<a class="dropdown-item" href="fuels.html">Fuels</a>
	          				<a class="dropdown-item" href="raw.html">Raw Materials</a>
	          	        </div>
	          	    </li>
	      			
	      		</ul>
	      		<li class="nav-item dropdown " style="padding: 20px; " >
	        			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	        				Login
	        			</a>
	        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	        				<a class="dropdown-item" href="login.html">Login</a>
	          				<a class="dropdown-item" href="members.html">Sign Up</a>
	          	        </div>
	          	</li>
	      			
	    	</div>
	    </nav>
	</header>
	<?php include('upload.php') ?>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="file">
		<button type="submit" name="submit">UPLOAD</button>
		
		
	</form>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>



</body>
>>>>>>> ef67cf4f606dbbd93692ae1ec7538ef07f5a78dd
</html>