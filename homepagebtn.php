<!DOCTYPE html>
<html>
<head>
<title>Welcome to the Arcade Center :D!</title>
<link rel = "stylesheet" href = "https://bootswatch.com/4/slate/bootstrap.min.css">
</head>
<body>

<?php
	if(isset($_POST['btn-sigin1'])){
?>
<!-- <form method = "post" action = "index.php">
<button type="submit" class="btn btn-link">Log Out</button>
</form> -->
<h1>Sign In to Arcade Center</h1>
<div class="jumbotron" style="text-align:center;">
<form method=post action="accessaccounts.php">
        <h2>Sign In Page</h2>
        <div class="container">
            <label for="username"><b>Username</b></label>
            <br>
            <input type="text" placeholder="Enter Username" name="username" required>
            <br>
            <label for="pwrd"><b>Password</b></label>
            <br>
            <input type="password" placeholder="Enter Password" name="pwrd" required>
            <br>
            <br>

            <button type="submit" class="btn btn-primary btn-sm"> Signin </button><button type="submit" class="btn btn-danger btn-sm" name="cancel-btn1" formaction= "homepagebtn.php" formnovalidate> Cancel </button>
        </div>
</form>
</div>
<?php
	}else if(isset($_POST['btn-register1'])){
?>
<h1>Register to Arcade Center</h1>
<div class="jumbotron" style="text-align:center;">
<form method=post action="accessaccounts.php">
        <h2>Register Page</h2>
        <div class="container">
            <label for="name"><b>Name</b></label>
            <br>
            <input type="text" placeholder="Enter Full Name" name="name" required>
            <br>
            <label for="email"><b>Email</b></label>
            <br>
            <input type="text" placeholder="Enter Email" name="email" required>
            <br>

            <label for="username"><b>Username</b></label>
            <br>
            <input type="text" placeholder="Enter Username" name="username" required>
            <br>
            <!--TODO; Create a limit on the length of password-->
            <label for="pwrd"><b>Password</b></label>
            <br>
            <input type="password" placeholder="Enter Password" name="pwrd" required>
            <br>

            <label for="pwrd2"><b>Confirm Password</b></label>
            <br>
            <input type="password" placeholder="Confirm Enter Password" name="pwrd2" required>
            <br>
            <br>
            <!-- formnovalidate allows for an element to skip the validation process when required is used for other elements :D -->
            <button type="submit" class="btn btn-primary btn-sm"> Register </button><button type="submit" class="btn btn-danger btn-sm" name="cancel-btn1" formaction= "homepagebtn.php" formnovalidate> Cancel </button>
        </div>
</form>
</div>
<?php
	}else{
		print("No button was clicked");
    }
    
    if(isset($_POST['cancel-btn1'])){
        header("Location: index.php");
        exit();
    }
?>
</body>
</html>



