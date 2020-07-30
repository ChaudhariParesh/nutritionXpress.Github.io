<!DOCTYPE html>
<html lang="en">
<head>
<title>Nutrition Xpress</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

   <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="<?=base_url()?>css/carousel.min.css">
	
	 <link rel="stylesheet" href="<?=base_url()?>css/theme.min.css"> 
	<link rel="stylesheet" href="<?=base_url()?>css/transitions.css">
	<link rel="stylesheet" href="<?=base_url()?>css/owl.css">
	<link rel="stylesheet" href="<?=base_url()?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=base_url()?>css/owl.theme.min.css">
	<link href="<?=base_url()?>css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="<?=base_url()?>css/style.css" rel="stylesheet">
		<link href="<?=base_url()?>css/responsive.css" rel="stylesheet">
</head>
<body>
<section>
	<nav class="navbar navbar-default nav-parent">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 logo">	
						<a href="<?=base_url()?>"><img src="<?=base_url()?>images/nx_logo.png"></a>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 qs-navbar padding-zero">
						<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div id="navbar" class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-right nav-list">
								<li><a href="<?=base_url()?>">Home</a></li>
							
								<!--<li><a href="<?=base_url()?>enquiry">Enquiry us</a></li>-->
								<li class="list-services list-services-a " id="show_menu"><a href="javascript:void(0)">Services<i class="fa fa-chevron-down "></i></a>
									<ul class="list-control-service">
										<!--<li><a href="<?=base_url()?>upload_info">Upload Info</a></li>-->
										<li><a href="<?=base_url()?>under_construction">Home Delivery</a></li>         
										<li><a href="<?=base_url()?>diet_plan">Diet Plan</a></li>
										<li><a href="<?=base_url()?>gym_installation">Gym  Installation</a></li>
										<li><a href="<?=base_url()?>retail">Retail Wholesale</a></li>
										<li><a href="<?=base_url()?>consultancy">Consultancy Business </a></li>
									</ul>
								</li>
									<li><a href="<?=base_url()?>about">About us</a></li>
								<li><a href="<?=base_url()?>contact">Contact Us</a></li>
								<!--<li class="add-registration"><a class="ad-registration" href="<?=base_url()?>contact">Contact Us</a></li>
									<li><a href="<?=base_url()?>contact">Contact Us</a></li>-->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
</section>
<section>
	<!--<div class="enquiry-btn-control">
		<div class="container">
			<div class="fixed-btn">
				<div class="row">
					<p><i class="fa fa-comments-o" aria-hidden="true"></i>enquiry us</p>
				</div>
			</div>
		</div>
	</div>-->
<div class="modal fade" id="enquiry_Form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class="modal-header">
			<h3 class="modal-title" id="exampleModalLabel">Talk with us!</h3>
		</div>
     
      <div class="modal-body">
       <form method="post" id="enquiry_Form" name="enquiry_Form">
			<div class="form-group">
				<label  for="recipient-name" class="col-form-label">Name:<span class="text-danger">*</span></label>
				<input required type="text" class="form-control" id="first_name" name="first_name" 
								placeholder="Enter Your Name" value="<?php if(!empty($single)){echo $single->first_name;}?>">
			</div>
			<div class="form-group">
				<label for="recipient-name" class="col-form-label">Email:<span class="text-danger">*</span></label>
				<input required  type="email" class="form-control" id="contact_email" name="contact_email"
								placeholder="Enter Your Email" value="<?php if(!empty($single)){echo $single->contact_email;}?>">
			</div>
			<div class="form-group">
				<label for="recipient-name" class="col-form-label">Phone No:<span class="text-danger">*</span></label>
				<input required  type="tel" class="form-control" id="contact_phone" name="contact_phone" 
								placeholder="Enter Your Phone number" value="<?php if(!empty($single)){echo $single->contact_phone;}?>" >
			</div>
			<div class="form-group">
				<label for="message-text" class="col-form-label">Message:<span class="text-danger">*</span></label>
				<textarea class="text-contact" id="message" placeholder="Enter Your Message" 
									name="message" required ><?php if(!empty($single)){echo $single->message;}?></textarea>
			</div>
			<div class="form-group btn-c">
			   <button type="submit">Send</button>
			   <button type="submit"data-dismiss="modal">Close</button>
			</div>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<button type="button" class="btn btn-primary fixed-btn" data-toggle="modal" data-target="#enquiry_Form" id="myBtn"><span>enquiry us</span></button>
</section>
<script src="<?=base_url()?>js/jquery.min.js"></script>
<script>
   $(document).ready(function() {
	 $("#show_menu").click(function () {
		$( ".list-control-service" ).toggle();
		});  
				mybutton = document.getElementById("myBtn");
		window.onscroll =function(){scrollFunction()};
		
		function scrollFunction(){
			if(document.body.scrollTop >30 || document.documentElement.scrollTop > 30){
				mybutton.style.display = "block";1
			}else{
				mybutton.style.display ="none";
			}
		}
		function topFunction(){
			document.body.scrollTop= 0;
			document.documentElement.scrollTop=0;
			
		}
  });
</script>