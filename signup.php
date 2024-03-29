<?php

/*******************************************
 * signup.php is the frontend page for a
 * user to signup for an account and submits
 * a form to the signup-helper file. 
 ******************************************/

require "includes/header.php"
?>
<link rel="stylesheet" href="css/signup.css">
<main>
    <div class="bg-cover">
    	<div class="h-100 container center-me">
    		<div class="my-auto">
    			<div class="signup-form">

				<!-- form that submits to signup-helper.php using HTTP POST method -->
    				<form action="includes/signup-helper.php" method="post">
    					<h2>Register</h2>
    					<p class="hint-text">Create your account!</p>
    					<div class="form-group">
    						<div class="row">
    							<div class="col">
    								<input type="text" class="form-control" name="fname" placeholder="First Name" required="required">
    							</div>
    							<div class="col">
    								<input type="text" class="form-control" name="lname" placeholder="Last Name" required="required">
    							</div>
    						</div>
    					</div>
    					<div class="form-group">
    						<input type="text" class="form-control" name="uname" placeholder="Username" required="required">
    					</div>
    					<div class="form-group">
    						<input type="email" class="form-control" name="email" placeholder="E-mail" required="required">
    					</div>
    					<div class="form-group">
    						<input type="password" class="form-control" name="pwd" placeholder="Password" required="required">
    					</div>
    					<div class="form-group">
    						<input type="password" class="form-control" name="con-pwd" placeholder="Confirm Password" required="required">
						</div>
						<div class="form-group">
    						<input type="test" class="form-control" name="phone" placeholder="Phone Number" required="required">
    					</div>
						<div class="form-group">
    						<input type="test" class="form-control" name="genre" placeholder="Favorite Genre" required="required">
    					</div>
						<div class
						="form-group">
    						<button type="submit" name="signup-submit" class="btn btn-success btn-lg btn-block">Register</button>
    					</div>
    				</form>
    				<div class="text-center">Already a member? <a href="login.php">Sign in</a></div>
    			</div>
    		</div>
    	</div>
    </div>
</main>
