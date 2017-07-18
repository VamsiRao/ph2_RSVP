<?php

/**
 * Template Name: Landing
 */

    get_header();
?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-6">
			<h5 class="soiree-header font-marcellus">Soiree</h5>
			<p class="soiree-text font-inherit" >ColoredCow celebrates every first Saturday of the month with family and friends. This custom has been started to take a little time off from work and enjoy some moments in life. we believe in sharing moments and learning with each other. Come and join us over music, food, drinks and some moments full of laughter and joy.</p>
			<hr>				
			<div class="col-md-odffset-1 col-md-12 col-xs-12 text-center">
				<h5 class="join-header font-marcellus">Wanna Join The Party?</h5>				
				<button type="button" class="btn btn-outline-warning btn-lg join-button" data-toggle="modal" data-target="#request_modal">Request Invite</button>
			</div>
		</div>
		<div class="col-xs-12 col-md-6">
			
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