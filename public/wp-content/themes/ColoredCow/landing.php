<?php

/**
 * Template Name: Landing
 */

    get_header();
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-6">
			<h class="soiree-header">Soiree</h>
			<p class="soiree-text">ColoredCow celebrates every first Saturday of the month with family and friends. This custom has been started to take a little time off from work and enjoy some moments in life. we believe in sharing moments and learning with each other. Come and join us over music, food, drinks and some moments full of laughter and joy.</p>
			<hr>				
			<div class="col-md-odffset-1 col-md-12 col-sm-12 text-center">
				<h class="join-header">Wanna Join The Party?</h>
				<div>				
					<button type="button" class="btn btn-outline-warning btn-lg join-button" data-toggle="modal" data-target="#request_modal">Request Invite</button>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 event-col">
			<div class="event-name">Event Name</div>
			<br>
			<div class="event-date-location">
				<i class="fa fa-calendar" style=" color:black;" aria-hidden="true"></i> Date
			</div>
			<br>
			<div class="event-date-location">
				<i class="fa fa-map-marker fa-lg" style=" color:black;" aria-hidden="true"></i> Location
			</div>
			<br>			
		</div>
	</div>	
	<div class="container carousel-section">
		<div class="col-sm-12 col-md-12 carousel-col">
			<h class="carousel-heading"><i class="fa fa-camera-retro fa-1x"></i>&nbsp;Event Gallery</h>
			<div id="carousel-indicators" class="carousel slide"  data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-indicators" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-indicators" data-slide-to="1"></li>
					<li data-target="#carousel-indicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<img class="d-block img-fluid images_carousel" src="<?php echo get_template_directory_uri(); ?>/dist/img/soiree1.jpg" alt="1">
					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid images_carousel" src="<?php echo get_template_directory_uri(); ?>/dist/img/soiree2.jpg" alt="2">
					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid images_carousel" src="<?php echo get_template_directory_uri(); ?>/dist/img/soiree3.jpg" alt="3">
					</div>
				</div>
					<a class="carousel-control-prev" href="#carousel-indicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carousel-indicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
			</div>
		</div>
	</div>	
</div>

<div id="request_modal" class="modal fade" role="form">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Request Form</h4>				
				<button class="close" type= "button" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">				
				<div class="row">						
					<form  id="request_form" class="col-sm-12" name="request_form" data-toggle="validator">
						<div class="form-group  col-sm-12">
							<label for="request_name" class="control-label" >Name</label>
							<input type="text" class="form-control" id="request_name" name="request_name" placeholder="Your Name" required>
						</div>
						<div class="form-group  col-sm-12">
							<label for="request_email" >Email Address</label>
							<input type="email" class="form-control" id="request_email" name="request_email" placeholder="Your Email Addr." required>
						</div>
						<div class="form-group  col-sm-12">
							<label for="request_phone" >Phone Number</label>
							<input type="number" class="form-control" id="request_phone" name="request_phone" placeholder="Your Phone No." required>
						</div>
						<div class="col-sm-12">
							<strong>Gender:</strong>																
							<div class="row">
								<div class="col-sm-12">
								</div>										
								<div class="col-sm-4">
									<label class="radio-inline" >
										<input type="radio" name="inlineRadioOptions" id="male" value="male"> Male
									</label>
								</div>
								<div class="col-sm-4">
									<label class="radio-inline">
								  		<input type="radio" name="inlineRadioOptions" id="female" value="female" required> Female
									</label>
								</div>
								<div class="col-sm-4">
									<label class="radio-inline">
								  		<input type="radio" name="inlineRadioOptions" id="others" value="others" required> Other
									</label>
								</div>										
							</div>
						</div>								
					</form>
				</div>						
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success btn-green-round-default"  id="request_submit" onclick="validate_request_form()">Submit
				</button>
			</div>									
		</div>
	</div>
</div>

<?php 
    get_footer(); 
?>