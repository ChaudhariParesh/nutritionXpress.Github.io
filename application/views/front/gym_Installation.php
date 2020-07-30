<?php include('header.php')?>
<!-- <section>
<div class="product-banner" style="background-image: url(<?=base_url()?>images/corporate.jpg)">
	<div class="banner-head">
		<h2>Registration Form<h2>
	</div>
</div>
</section> -->
<section>
<div class="register-c" style="background-image:url(<?=base_url()?>images/nx_enquiry.jpg)">
	<div class="container">
		<div class="row">
			<div class="register-Now">
				<h3>Gym Installation Form</h3>
			</div>
			<form class="form form-reg" method="post" id="registration_form" name="registration_form">
				
				<div class="sub-ins-form">
					<div class="col-lg-6 form-group">
						<label for="exampleInputName">Name<span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="gym_name" name="gym_name"
						placeholder="Enter Your Name" value="<?php if(!empty($single)){echo $single->contact_email;}?>">
					</div>
					<div class="col-lg-6 form-group ">
						<label for="exampleInputEmail1">Email<span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="gym_email" name="gym_email"
						placeholder="Enter Your Email" value="<?php if(!empty($single)){echo $single->contact_email;}?>">
					</div>
					<div class="col-lg-12 form-group">
						<label for="exampleInputEmail1">Where To Installation<span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="gym_installation" name="gym_installation"
						placeholder="Enter Your location" value="<?php if(!empty($single)){echo $single->contact_email;}?>">
					</div>
					<div class="col-lg-6 form-group">
						<label for="exampleInputEmail1">Contact No<span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="gym_contact" name="gym_contact"
						placeholder="Enter Your contact no" value="<?php if(!empty($single)){echo $single->contact_email;}?>">
					</div>
					<div class="col-lg-6 form-group">
						<label for="exampleInputEmail1">Land Area in sqft<span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="gym_land" name="gym_land"
						placeholder="Enter Your area in sqft" value="<?php if(!empty($single)){echo $single->contact_email;}?>">
					</div>
					<div class="col-lg-6 form-group">
						<label for="exampleInputEmail1">Installation Budget<span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="gym_budget" name="gym_budget"
						placeholder="Enter Your Budget" value="<?php if(!empty($single)){echo $single->contact_email;}?>">
					</div>
					<div class="clearfix"></div>
					<div class="col-lg-12 form-group">
								<label for="exampleInputtext1">Which type Gym  you Want To Installation<span class="text-danger">*</span></label><br>
									<textarea class="text-contact" id="message" placeholder="Enter Your Message" 
									name="message"><?php if(!empty($single)){echo $single->message;}?></textarea>
					</div>
					<div class="clearfix"></div>
					<div class="form-group btn-c">
							   <button type="submit">Send</button>
					</div>
			</form>	
		</div>
	</div>
</div>
</section>
<?php include('footer.php')?>
<script>
$(document).ready(function(){
			$('#registration_form').validate({
						rules: {
						gym_name:{required:true},
						gym_email:{required:true},
						middle_name:{required:true},
						gym_installation:{required:true},
						gym_contact:{required:true},
						gym_land:{required:true},
						gym_budget:{required:true},
						phone_number:{required:true,number:true,minlength:10,maxlength:12},
						user_email:{required:true,email:true},
					},
					messages:{
						first_name:{required:"Please enter first name"},
						middle_name:{required:"Please enter  middle name"},
						last_name:{required:"Please enter  last name"},
						gym_installation:{required:"Please enter  Your Location"},
						gym_land:{required:"Please Enter Your area in sqft"},
						gym_budget:{required:"Please Enter Your Budget"},
						gym_contact:{required:"Please enter mobile no",minlength:"Please enter minimum 10 digits",maxlength:"Please enter maximum 12 digits"},
						user_email:{required:"Enter the email id",email:"Please Enater validate email"},
					},
					submitHandler: function (form){
						form.submit();		
					}
				});
			});
</script>