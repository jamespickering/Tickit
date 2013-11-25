<html>
	<head>
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap-theme.min.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="dist/js/bootstrap.js"></script>
		<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
		<link rel="stylesheet" type="text/css" href="css/datepicker.css">
		<script type="text/javascript">
			$(document).ready(function(){
				//alert($('form-post').height());
				//$('.post-input').css('height', $('form-post').css('height'));
				var $input = $('.post-type-input');
				var $from = $('#input-from');
				var $to = $('#input-to');
				var $due = $('#input-due');
				var $on = $('#input-on');
				$from.datepicker({format:'mm-dd-yyyy'});
				$to.datepicker({format:'mm-dd-yyyy'});
				$due.datepicker({format:'mm-dd-yyyy'});
				$on.datepicker({format:'mm-dd-yyyy'});
				$on.hide();
				$due.hide();
				$to.hide();
				$from.hide();
				$input.change(function(){
					if ($input.val() == "Quiz" || $input.val() == "Test") {
						$on.show();
						$due.hide();
						$to.hide();
						$from.hide();
					}
					else if ($input.val() == "Assignment") {
						$on.hide();
						$due.show();
						$to.hide();
						$from.hide();
					}
					else if ($input.val() == "Event") {
						$on.hide();
						$due.hide();
						$to.show();
						$from.show();
					}
					else{
						$on.hide();
						$due.hide();
						$to.hide();
						$from.hide();
					}
				});
			});
		</script>
		<title>Tickit | Home</title>
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

		.v-spacer{
			height: 30px;
			position: relative;
		}

		.h-spacer{
			width: 20px;
			color: eee;
		}

		table, tr{
			width: 50%;
		}

		.link-local:hover{
			text-decoration: none;
		}

		/* Left Bar */

		.left-heading{
			font-size: 13pt;
			font-weight: 600;
		}

		.container-right, .container-left, .h-spacer{
			float: left;
			margin: 0 auto;
		}

		.container-left, .container-right{
			box-shadow: 3px 3px 3px ddd;
			padding: 15px;
			
			background-color: white;
		}

		.container-left{
			width: 200px;
			/*text-align: right;*/
		}

		.container-left a{
			font-size: 13pt;
		}

		/* Center */

		.container-right{
			width: 70%;
			margin: 0 auto;
		}

		.classname, .teacher{
			font-size: 15pt;
		}

		.post-poster, .post-type{
			font-size: 13pt;
		}

		.post-type{
			color: #888888;
		}

		.comments{
			padding: 10px;
		}

		.comment-input{
			width: 200px;
			font-size: 10pt;
			height: 28px;
			padding: 5px;
		}

		.comment-go{
			height: 28px;
			font-size: 10pt;
		}

		.v-spacer-min{
			height: 5px;
		}

		.post-input{
			width: 100%;
			padding: 8px;
		}

		table, tr, td{
			width: 100%;
		}

		.post-type-input{
			-webkit-appearance: none;
  			-webkit-border-radius:0px;
			width: 101px;
			height: 35px;
			
		}

		.post-type-input option{
			border-bottom-right-radius: 0px;
			border-bottom-left-radius: 0px;
		}

		.post-go{
			border-top-right-radius: 0px;
			border-top-left-radius: 0px;
			border-bottom-left-radius: 0px;
			padding-left: 36px;
			padding-right: 36px;
			height: 35px;
		}

		.form-post{
			float: right;
			position: relative;
			top: 23px;
		}

		.post-buttons{
			position: relative;
			top: -58px;
		}

		.center-input{
			width: 101px;
			height: 35px;
			border-radius: 0px;
			position: relative;
			margin: 0;
		}
		input:focus{
			z-index: 2;
		}

		select:focus{
			z-index: 2;
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
			        <a class="navbar-brand link-local" href="home.php">Tickit</a>
		        </div>
		        <div class="collapse navbar-collapse">
		         	<ul class="nav navbar-nav">
			            <li><a class="link-local" href="home.php">Home</a></li>
			            <li><a class="link-local" href="calendar.php">Calendar</a></li>
			            <li><a class="link-local" href="profile.php">Profile</a></li>
			            <li><a class="link-local" href="Email.php">Email</a></li>
		         	</ul>
		        </div>
	      	</div>
	    </div>
	    <div class="v-spacer">
	    </div>
		<div class="container">
			<div class="container-left">
				<span class="left-heading">Filter</span><br>
				&nbsp;&nbsp;<a class="link-local" href="#all">All</a><br>
				&nbsp;&nbsp;<a class="link-local" href="#1">Algebra 2 Acc</a><br>
				&nbsp;&nbsp;<a class="link-local" href="#2">English 9</a><br>
				&nbsp;&nbsp;<a class="link-local" href="#3">Latin 2</a><br>
				&nbsp;&nbsp;<a class="link-local" href="#4">Spanish 2</a><br>
				&nbsp;&nbsp;<a class="link-local" href="#5">Physics 1</a>
			</div>
			<div class="h-spacer">
				s
			</div>
			<div class="container-right">
				<span class="classname">Algebra 2 Acc</span>
				<a href="#" class="teacher link-local">George Watson</a>
				<hr>
				<textarea rows="3" type="text" class="form-control post-input"></textarea>
				<div class="form-post">
					<form class="form-inline post-buttons">	
						<select class="form-control post-type-input">
							<option val="Post">Post</option>
							<option val="Assignment">Assignment</option>
							<option val="Event">Event</option>
							<option val="Quiz">Quiz</option>
							<option val="Test">Test</option>
						</select>
						<input type="text" class="form-control center-input" id="input-from" placeholder="From...">
						<input type="text" class="form-control center-input" id="input-to" placeholder="To...">
						<input type="text" class="form-control center-input" id="input-due" placeholder="Due...">
						<input type="text" class="form-control center-input" id="input-on" placeholder="On...">
						<button type="submit" class="btn btn-primary comment-go post-go">Post</button>
					</form>
				</div>
				<br>
				<div class="post">
					<a href="#" class="post-poster link-local">George Watson</a>
					<span class="post-type">Assignment</span><br>
					<span class="post-content">Do pages 1-4 in the review packet.</span>
					<div class="comments">
						<a class="comment-poster link-local">James Pickering</a>
						<span class="comment-content">Whats the homework again?</span><br>
						<a href="#" class="comment-poster link-local">Elliot Anderson</a>
						<span class="comment-content">READ THE ABOVE POST!</span><br>
						<a href="#" class="comment-poster link-local">James Pickering</a>
						<span class="comment-content">Boul I mean no tengo el sheeto chill out boul.</span><br>
						<div class="v-spacer-min"></div>
						<form class="form-inline" role="form">
					  		<div class="form-group">
					    		<input type="text" class="form-control comment-input" placeholder="Comment...">
					  		</div>
						  	<button type="submit" class="btn btn-default comment-go">Comment</button>
						</form>
					</div>
				</div>

				<div class="post">
					<a href="#" class="post-poster link-local">George Watson</a>
					<span class="post-type">Assignment</span><br>
					<span class="post-content">Do pages 1-4 in the review packet.</span>
					<div class="comments">
						<a class="comment-poster link-local">James Pickering</a>
						<span class="comment-content">Whats the homework again?</span><br>
						<a href="#" class="comment-poster link-local">Elliot Anderson</a>
						<span class="comment-content">READ THE ABOVE POST!</span><br>
						<a href="#" class="comment-poster link-local">James Pickering</a>
						<span class="comment-content">Boul I mean no tengo el sheeto chill out boul.</span><br>
						<div class="v-spacer-min"></div>
						<form class="form-inline" role="form">
					  		<div class="form-group">
					    		<input type="text" class="form-control comment-input" placeholder="Comment...">
					  		</div>
						  	<button type="submit" class="btn btn-default comment-go">Comment</button>
						</form>
					</div>
				</div>

				<div class="post">
					<a href="#" class="post-poster link-local">George Watson</a>
					<span class="post-type">Assignment</span><br>
					<span class="post-content">Do pages 1-4 in the review packet.</span>
					<div class="comments">
						<a class="comment-poster link-local">James Pickering</a>
						<span class="comment-content">Whats the homework again?</span><br>
						<a href="#" class="comment-poster link-local">Elliot Anderson</a>
						<span class="comment-content">READ THE ABOVE POST!</span><br>
						<a href="#" class="comment-poster link-local">James Pickering</a>
						<span class="comment-content">Boul I mean no tengo el sheeto chill out boul.</span><br>
						<div class="v-spacer-min"></div>
						<form class="form-inline" role="form">
					  		<div class="form-group">
					    		<input type="text" class="form-control comment-input" placeholder="Comment...">
					  		</div>
						  	<button type="submit" class="btn btn-default comment-go">Comment</button>
						</form>
					</div>
				</div>
			</div>
    	</div>
	</body>