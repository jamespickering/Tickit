<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap-theme.min.css">
		<link rel='stylesheet' type='text/css' href='css/fullcalendar.css' />
		<link rel="stylesheet" type="text/css" href="css/datepicker.css">
		<link rel="stylesheet" type="text/css" href="css/jquery.timepicker.css">
		<title>Tickit | Calendar</title>
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
			
			.calendar-create-title{
				font-weight:13pt;
			}
			.modal-form{
				/*width: 200px;*/
			}
			.modal-group{
				float: left;
			}
		</style>
	</head>
	<body>
		<button id="editEvent" style="display:none" data-toggle="modal" data-target="#myModal">
		</button>
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
			            <li><a class="link-local" href="email.php">Email</a></li>
		         	</ul>
		        </div>
	      	</div>
	    </div>
	    <div class="v-spacer">
	    </div>
		<div class="container">
			<div class="container-left">
				<form role="form" >
					<div klass="form-group">
						<label>Create Event:</label>
					</div>
					<div class="form-group modal-group">
						<input type="text" class="form-control" id="event-name" placeholder="Event Name">
					</div>
					<div class="form-group modal-group">
						<input type="text" class="form-control" id="start-date" placeholder="Starts...">
					</div>
					<div class="form-group modal-group">
						<input type="text" class="form-control" id="start-time" placeholder="At...">
					</div>
					<div class="form-group modal-group">
						<input type="text" class="form-control" id="end-date" placeholder="Ends...">
					</div>
					<div class="form-group modal-group">
						<input type="text" class="form-control" id="end-time" placeholder="At...">
					</div>
					<div class="form-group">
						<input type="button" class="form-control btn btn-primary btn-large comment-go create-event" onClick="" value="Create">
						<hr>
					</div>
				</form>
				
				<input type="button" class="form-control btn btn-primary btn-large comment-go refreshCalendar" onClick="" value="Refresh">
			</div>
			<div class="h-spacer">
				s
			</div>
			<div class="container-right">
				<div id='calendar'></div>
			</div>
    	</div>
    	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="editEventTitle" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="editEventTitle"></h4>
					</div>
					<form class="form-inline">
						<div class="modal-body">
							<table>
								<tr>
									<td>
										<span>Title:&nbsp;</span>
									</td>
									<td>
										<input type="text" class="form-control modal-form" id="event-nameE" placeholder="Event Name">
									</td>
								</tr>
								<tr>
									<td>
										<span>Start:&nbsp;</span>
									</td>
									<td>
										<input type="text" class="form-control modal-form" id="start-dateE" placeholder="Starts...">
									</td>
								</tr>
								<tr>
									<td>
										<span>Time:&nbsp;</span>
									</td>
									<td>
										<input type="text" class="form-control modal-form" id="start-timeE" placeholder="At...">
									</td>
								</tr>
								<tr>
									<td>
										<span>End:&nbsp;</span>
									</td>
									<td>
										<input type="text" class="form-control modal-form" id="end-dateE" placeholder="Ends...">
									</td>
								</tr>
								<tr>
									<td>
										<span>Time:&nbsp;</span>
									</td>
									<td>
										<input type="text" class="form-control modal-form" id="end-timeE" placeholder="At...">
									</td>
								</tr>
							</table>
						</div>
					</form>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary" id="save-edit-changes" date-dismiss="modal">Save changes</button>
					</div>
				</div>
			</div>
		</div>
    	<script type='text/javascript' src='js/jquery.js'></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/fullcalendar.js"></script>
		<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
		<script type="text/javascript" src="js/jquery.timepicker.js"></script>
		<script>
				$(document).ready(function() {
					$('#start-date').datepicker({format: 'yyyy-mm-dd'});
					$('#end-date').datepicker({format: 'yyyy-mm-dd'});
					$('#start-time').timepicker({'timeFormat': 'h:i A'});
					$('#end-time').timepicker({'timeFormat': 'h:i A'});
					$('#start-dateE').datepicker({format: 'yyyy-mm-dd'});
					$('#end-dateE').datepicker({format: 'yyyy-mm-dd'});
					$('#start-timeE').timepicker({'timeFormat': 'h:i A'});
					$('#end-timeE').timepicker({'timeFormat': 'h:i A'});
					$('#calendar').fullCalendar({
						header: {
						left: 'prev,next today',
						center: 'title',
						right: 'month,agendaWeek,agendaDay'
						},
						events: 'http://108.16.18.81/events.php', 
						eventRender: function(event, element, view) {
		    				if (event.allDay === 'true') {
		     					event.allDay = true;
		    				} else {
		     					event.allDay = false;
		    				}
		   				},
		   				selectable: true,
						editable: true,
						eventClick: function(calEvent, jsEvent, view){
							$('#editEventTitle').text(calEvent.title)
							var startDate = new Date(calEvent.start);
							$('#event-nameE').attr('value', calEvent.title);
							$('#start-dateE').attr('value', startDate.getFullYear() + '-' + (startDate.getMonth()+1) + '-' + startDate.getDate());
							var finalTime = startDate.getHours();
							var minutesFinal = startDate.getMinutes();
							if (startDate.getMinutes()<10) {
								minutesFinal = '0' + startDate.getMinutes();
							};
							if (startDate.getHours()>12) {
								finalTime = (startDate.getHours()-12) + ':' + minutesFinal + ' PM';
							}
							else if (startDate.getHours()==0) {
								finalTime = '12:' + minutesFinal + ' AM';
							}
							else{
								finalTime = finalTime + ':' + minutesFinal + ' AM';
							}
							console.log(finalTime);
							var finalTimeArray = finalTime.split(':');
							var hours = parseInt(finalTimeArray[0]);
							console.log(hours);
							if (hours<10) {
								finalTimeArray[0] = '0' + hours;
							};
							finalTime = finalTimeArray.join(':');
							$('#start-timeE').attr('value', finalTime);
							startDate = new Date(calEvent.end);
							finalTime = startDate.getHours();
							minutesFinal = startDate.getMinutes();
							if (startDate.getMinutes()<10) {
								minutesFinal = '0' + startDate.getMinutes();
							};
							if (startDate.getHours()>12) {
								finalTime = (startDate.getHours()-12) + ':' + minutesFinal + ' PM';
							}
							else if (startDate.getHours()==0) {
								finalTime = '12:' + minutesFinal + ' AM';
							}
							else{
								finalTime = finalTime + ':' + minutesFinal + ' AM';
							}
							console.log(finalTime);
							var finalTimeArray = finalTime.split(':');
							var hours = parseInt(finalTimeArray[0]);
							console.log(hours);
							if (hours<10) {
								finalTimeArray[0] = '0' + hours;
							};
							finalTime = finalTimeArray.join(':');
							$('#end-dateE').attr('value', startDate.getFullYear() + '-' + (startDate.getMonth()+1) + '-' + startDate.getDate());
							$('#end-timeE').attr('value', finalTime);
							//$('#end-dateE').datepicker({format: 'yyyy-mm-dd'});
							//$('#start-timeE').timepicker();
							//$('#end-timeE').timepicker();
							$('#editEvent').click();
							$('#save-edit-changes').click(function(){
								var startTimeArray = $('#start-timeE').val().split(':');
								var firstStartTime = parseInt(startTimeArray[0]);
								if (startTimeArray[1].indexOf('AM')) {
									if (firstStartTime == 12) {
										startTimeArray[0] = '00';
									};
									startTimeArray[1] = startTimeArray[1].replace(' AM', '');
								}
								else{
									if (firstStartTime < 12) {
										alert(toString(firstStartTime + 12));
										startTimeArray[0] = toString(firstStartTime + 12);
									};
									startTimeArray[1] = startTimeArray[1].replace(' PM', '');
								};
								var finalStartString = startTimeArray.join(':');
								endTimeArray = $('#end-timeE').val().split(':');
								console.log(endTimeArray);
								if (endTimeArray) {
									firstendTime = parseInt(endTimeArray[0]);
									if (endTimeArray[1].indexOf('AM')) {
										alert('PM');
										if (firstendTime == 12) {
											endTimeArray[0] = '00';
										};
										endTimeArray[1] = endTimeArray[1].replace(' AM', '');
									}
									else{

										if (firstendTime < 12) {
											endTimeArray[0] = toString(firstendTime + 12);
										};
										endTimeArray[1] = endTimeArray[1].replace(' PM', '');
									};
									var finalEndString = endTimeArray.join(':');
								}
								else{
									finalEndString = '';
								}
								var start = $('#start-date').val() + ' ' + finalStartString;
					   			var end = $('#end-date').val() + ' ' + finalEndString;
					   			var url;
					   			$.ajax({
					   				url: 'http://108.16.18.81/add_events.php',
					   				data: 'title='+ $('#event-name').val()+'&start='+ start +'&end='+ end+ '&url=',
					   				type: "POST",
					   				success: function(json) {
					   					alert('Added Successfully');
					   				}
					   			});
								calEvent.fullCalendar('renderEvent', {title: $('#event-name').val(), allDay: false, start: start, end: end}, true);
							});
						},
						selectHelper: true,
					   	select: function(start, end, allDay) {
					   		var title = prompt('Event Title:');
					   		var url = prompt('Type Event url, if exits:');
					   		if (title) {
					   			var start = $.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss");
					   			var end = $.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss");
					   			$.ajax({
					   				url: 'http://108.16.18.81/add_events.php',
					   				data: 'title='+ title+'&start='+ start +'&end='+ end +'&url='+ url ,
					   				type: "POST",
					   				success: function(json) {
					   					//alert('Added Successfully');
					   				}
					   			});
					   			calendar.fullCalendar('renderEvent',
					   			{
					   				title: title,
					   				start: start,
					   				end: end,
					   				allDay: allDay
					   			},
					   				true // make the event "stick"
					   			);
					   		}
					   		calendar.fullCalendar('unselect');
					   	},
					   
					   	editable: true,
					   	eventDrop: function(event, delta) {
					   	var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
					   	var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
					   	$.ajax({
					   			url: 'http://108.16.18.81/update_events.php',
					   			data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
					   			type: "POST",
					   			success: function(json) {
					    			//alert("Updated Successfully");
					   			}
					   		});
					   	},
					   	eventResize: function(event) {
					   		var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
					   		var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
					   		$.ajax({
					    		url: 'http://108.16.18.81/update_events.php',
					    		data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
					    		type: "POST",
					    		success: function(json) {
					     			//alert("Updated Successfully");
					    		}
							});
						}
					});
					$('.create-event').click(function(){
						/*$('#calendar').fullCalendar(
							'renderEvent', {title: "$('#event-name').val()", start: $('#start-date').val(), end: $('#end-date').val()}
						);*/
						var startTimeArray = $('#start-time').val().split(':');
						var firstStartTime = parseInt(startTimeArray[0]);
						if (startTimeArray[1].indexOf('AM')) {
							if (firstStartTime == 12) {
								startTimeArray[0] = '00';
							};
							startTimeArray[1] = startTimeArray[1].replace(' AM', '');
						}
						else{
							if (firstStartTime < 12) {
								alert(toString(firstStartTime + 12));
								startTimeArray[0] = toString(firstStartTime + 12);
							};
							startTimeArray[1] = startTimeArray[1].replace(' PM', '');
						};
						var finalStartString = startTimeArray.join(':');
						endTimeArray = $('#end-time').val().split(':');
						console.log(endTimeArray);
						if (endTimeArray) {
							firstendTime = parseInt(endTimeArray[0]);
							if (endTimeArray[1].indexOf('AM')) {
								alert('PM');
								if (firstendTime == 12) {
									endTimeArray[0] = '00';
								};
								endTimeArray[1] = endTimeArray[1].replace(' AM', '');
							}
							else{

								if (firstendTime < 12) {
									endTimeArray[0] = toString(firstendTime + 12);
								};
								endTimeArray[1] = endTimeArray[1].replace(' PM', '');
							};
							var finalEndString = endTimeArray.join(':');
						}
						else{
							finalEndString = '';
						}
						var start = $('#start-date').val() + ' ' + finalStartString;
			   			var end = $('#end-date').val() + ' ' + finalEndString;
			   			var url;
			   			$.ajax({
			   				url: 'http://108.16.18.81/add_events.php',
			   				data: 'title='+ $('#event-name').val()+'&start='+ start +'&end='+ end+ '&url=',
			   				type: "POST",
			   				success: function(json) {
			   					alert('Added Successfully');
			   				}
			   			});
						$('#calendar').fullCalendar(
							'renderEvent', {title: $('#event-name').val(), allDay: false, start: start, end: end}, true
						);
					});
					$('.refreshCalendar').click(function(){
						$('#calendar').fullCalendar('refetchEvents');
					});
				});
		</script>
	</body>