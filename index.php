<html>
	<head>
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap-theme.min.css">
		<script type="text/javascript" src="dist/js/bootstrap-min.js"></script>
	</head>
	<style type="text/css">
		body {
		  padding-top: 40px;
		  padding-bottom: 40px;
		  background-color: #eee;
		}

		.form-signin {
		  max-width: 330px;
		  padding: 15px;
		  margin: 0 auto;
		}
		.form-signin .form-signin-heading,
		.form-signin .checkbox {
		  margin-bottom: 10px;
		}
		.form-signin .checkbox {
		  font-weight: normal;
		}
		.form-signin .form-control {
		  position: relative;
		  font-size: 16px;
		  height: auto;
		  padding: 10px;
		  -webkit-box-sizing: border-box;
		     -moz-box-sizing: border-box;
		          box-sizing: border-box;
		}
		.form-signin .form-control:focus {
		  z-index: 2;
		}
		.form-signin input[type="text"] {
		  margin-bottom: -1px;
		  border-bottom-left-radius: 0;
		  border-bottom-right-radius: 0;
		}
		.form-signin input[type="password"] {
		  margin-bottom: 10px;
		  border-top-left-radius: 0;
		  border-top-right-radius: 0;
		}
	</style>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	      <div class="container">
	        <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
		        <a class="navbar-brand" href="home.php">Tickit</a>
	        </div>
	        <div class="collapse navbar-collapse">
	          <ul class="nav navbar-nav">
	            <li><a href="home.php">Home</a></li>
	            <li><a href="calendar.php">Calendar</a></li>
	            <li><a href="profile.php">Profile</a></li>
	            <li><a href="email.php">Email</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>

		<div class="container">
      		<form class="form-signin">
		        <h2 class="form-signin-heading">Sign In To Tickit</h2>
		        <input type="text" class="form-control" placeholder="Username" required autofocus>
		        <input type="password" class="form-control" placeholder="Password" required>
		        <label class="checkbox">
		        	<input type="checkbox" value="remember-me"> Remember me
		        </label>
		        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	      	</form>
    	</div>
	</body>