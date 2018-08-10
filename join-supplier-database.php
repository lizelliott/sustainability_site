<?php 
	
	$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	if (strpos($url,'c=1') !== false) {
	    $success = 'success';
	} elseif (strpos($url,'c=0') !== false) {
	    $success = 'error';
	} elseif (isset($_GET['errors']) && $_GET['errors'] == 'true') {
		$success = 'missing-fields';
	}
	
	session_start();
	if(isset($_SESSION)&&!empty($_SESSION)){
		$formdata = $_SESSION['formData'];
	}
?>

<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/pga1.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<!-- InstanceBeginEditable name="meta-desc" -->
	<meta name="description" content="PGA Social Responsibility Report">
	<!-- InstanceEndEditable -->
	<!-- InstanceBeginEditable name="title-r" -->
	<title>PGA Social Responsibility Report - Join Our Supplier Database</title>
	<!-- InstanceEndEditable -->
	<!-- Bootstrap --> 
	<link href="https://pgaimpact.org/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://pgaimpact.org/css/fonts.css" rel="stylesheet"> 
	<link href="https://pgaimpact.org/css/custom.css" rel="stylesheet">
	<link href="./css/dreamco.css" rel="stylesheet"> 
	<!-- InstanceBeginEditable name="head-r" -->
	
	<!-- InstanceEndEditable -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- InstanceParam name="bodyid" type="text" value="fostering-supplier" -->
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-2875023-49"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-2875023-49');
	</script>
</head>

<body id="fostering-supplier">
		
	<div class="container-fluid outer-wrap center-block">
		<div class="row pga-head"> 
			<div class="col-md-6 col-sm-6 head-col">
				<div class="pga-logo">
					<a href="index.html"><img class="logo" src="https://pgaimpact.org/images/logo-pga-white.svg" alt="PGA of America"></a>
		    	</div>
		    </div>    
		    <div class="col-md-6 col-sm-6 head-col">
		    	<div class="pga-hdr-text pull-right">
		    		<h5>Social Responsibility Report</h5>
		    	</div>
		    </div>
		</div>
		<div class="row">
			<div class="col-md-12 pga-nav">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>          
						</div>    
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav about-pages">            
								<li class="dropdown"> 
									<a href="#" class="dropdown-toggle about-pga-home" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About the PGA <br />of America</a>
									<ul class="dropdown-menu">
										<li><a href="about-the-pga.html" class="about-pga">About the PGA <br />of America</a></li> 
										<li><a href="about-q-and-a-president-ceo.html" class="about-qa">Q&A with our President & CEO</a></li>                
										<li><a href="about-this-report.html" class="about-report">About this Report</a></li>                
										<li><a href="about-gri-index.html" class="about-gri">GRI Index</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle fostering-diversity-home" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fostering Diversity<br />& Inclusion</a>
									<ul class="dropdown-menu">
										<li><a href="fostering-diversity-and-inclusion.html" class="fostering-diversity">Fostering Diversity<br />& Inclusion</a></li>
										<li><a href="fostering-education-and-training.html" class="fostering-education">Education & Training</a></li>
										<li><a href="fostering-workforce-diversification.html" class="fostering-workforce">Workforce Diversification</a></li>
										<li><a href="fostering-supplier-inclusion.html" class="fostering-supplier">Supplier Inclusion</a></li>                
										<li><a href="fostering-women-in-golf.html" class="fostering-women">Women in Golf</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle engaging-generation-home" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Engaging the<br />Next Generation</a>
									<ul class="dropdown-menu">
										<li><a href="engaging-the-next-generation.html" class="engaging-generation">Engaging the<br />Next Generation</a></li>  
										<li><a href="engaging-pga-junior-league.html" class="engaging-junior">PGA Jr. League</a></li>
										<li><a href="engaging-opportunities-for-under-resourced-youth.html" class="engaging-opportunities">Opportunities for Under-resourced Youth</a></li>   
										<li><a href="engaging-pga-pros-inspiring-young-golfers.html" class="engaging-professionals">PGA Professionals Inspiring Young Golfers</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle educating-workforce-home" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Educating the<br />Workforce of Tomorrow</a>
									<ul class="dropdown-menu">
										<li><a href="educating-the-workforce-of-tomorrow.html" class="educating-workforce">Educating the<br />Workforce of Tomorrow</a></li> 
										<li><a href="educating-lifelong-learning-and-education.html" class="educating-lifelong">Lifelong Learning and Education</a></li>
										<li><a href="educating-pga-pro-golf-management-program.html" class="educating-pga">PGA Professional Golf <br />Management Program</a></li>
										<li><a href="educating-business-operations.html" class="educating-business">Business Operations Simulation</a></li> 
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle enhancing-lives-home" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Enhancing Lives<br />through Golf</a>
									<ul class="dropdown-menu">
										<li><a href="enhancing-lives-through-golf.html" class="enhancing-lives">Enhancing Lives<br />through Golf</a></li> 
										<li><a href="enhancing-pga-hope.html" class="enhancing-hope">PGA HOPE</a></li>
										<li><a href="enhancing-pga-works.html" class="enhancing-works">PGA WORKS<br />Fellowship</a></li>                
										<li><a href="enhancing-supporting-golfers-with-disabilities.html" class="enhancing-supporting">Supporting Golfers with Disabilities</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle growing-game-home" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Growing the Game<br />around the Globe</a>
									<ul class="dropdown-menu">
										<li><a href="growing-the-game-around-globe.html" class="growing-game">Growing the Game<br />around the Globe</a></li> 
										<li><a href="growing-opportunities-abroad-for-pga-pros.html" class="growing-opportunities">Opportunities Abroad for PGA Professionals</a></li>
										<li><a href="growing-olympics-and-igf-coach-program.html" class="growing-olympics">Olympics & IGF Coach Educator Program</a></li>
										<li><a href="growing-academies.html" class="growing-academies">Academies</a></li>                
										<li><a href="growing-growth-in-international-golf-events.html" class="growing-growth">Growth in International Golf Events</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle improving-environmental-home" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Improving our<br />Environmental Footprint</a>
									<ul class="dropdown-menu">
										<li><a href="improving-our-environmental-footprint.html" class="improving-environmental">Improving our<br />Environmental Footprint</a></li> 
										<li><a href="improving-energy-efficiency.html" class="improving-energy">Energy Efficiency</a></li>
										<li><a href="improving-partnering-with-allied-organizations.html" class="improving-partnering">Partnering with Allied Organizations</a></li>
										<li><a href="improving-environmental-stewardship-in-action.html" class="improving-stewardship">Environmental Stewardship in Action</a></li> 
									</ul>
								</li>
							</ul> 
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 pga-content">
				
				<!-- InstanceBeginEditable name="body-r" -->
				<div class="row">
					<div class="container-fluid landing-hero-container">
						<div class="row">
							<div class="col-md-12">
								<img src="https://pgaimpact.org/images/fostering-hero-supplier.jpg" class="img-responsive" alt="US Pan Asian American Chamber of Commerce Event">
							</div>
						</div>
						<div class="row">     
							<div class="col-md-12">
								<div class="container-fluid inside-container">        	
									<div class="row">
										<div class="col-md-2 col-sm-2 hidden-xs">
											&nbsp;
										</div>
										<div class="col-md-8 col-sm-8 landing-center">
											<h1>Join Our Supplier Database</h1>  
											<p class="landing-large">Thank you for your interest in joining our supplier database. Please complete the following fields in their entirety for consideration. Qualified candidates will receive notifications of relevant bid opportunities. We appreciate your interest in partnering with the PGA of America.</p>
											
											<br>
											<?php if(isset($success) && $success == 'success'): ?>
												<div class="message success alert alert-success">
													Your supplier database entry has been received! Qualified candidates will receive notifications of relevant bid opportunities. Thank you for your interest in partnering with the PGA of America.
												</div>
											<?php endif; ?>
											<?php if(isset($success) && $success == 'error'): ?>
												<div class="message error alert alert-danger">
													There was an error with your submission, please try again.
												</div>
											<?php endif; ?>
											<?php if(isset($success) && $success == 'missing-fields'): ?>
												<div class="message error alert alert-danger">
													* All fields are required.
												</div>
											<?php endif; ?>
			
										</div>
										<div class="col-md-2 col-sm-2 hidden-xs">
											&nbsp;
										</div>
									</div>
									<div class="row">
										<div class="col-md-2 col-sm-2 hidden-xs">
											&nbsp;
										</div>
										<div class="col-md-8 col-sm-8 landing-center">
																						
											<form method="post" action="email.php" class="supplier-form" name="cform">
												<div class="row">
													<div class="form-group col-sm-6">
														<label for="firstname">First Name<span class="red">*</span></label>
														<input type="text" value="<?php echo isset($formdata['firstname'])?$formdata['firstname']:''?>" class="form-control" name="firstname" id="firstname" placeholder="First Name">
													</div>
													<div class="form-group col-sm-6">
														<label for="lastname">Last Name<span class="red">*</span></label>
														<input type="text" value="<?php echo isset($formdata['lastname'])?$formdata['lastname']:''?>" class="form-control" name="lastname" id="lastname" placeholder="Last Name">
													</div>
												</div>
												<div class="row">
													<div class="form-group col-sm-6">
														<label for="title">Title<span class="red">*</span></label>
														<input type="text" value="<?php echo isset($formdata['title'])?$formdata['title']:''?>" class="form-control" name="title" id="title" placeholder="Title">
													</div>
													<div class="form-group col-sm-6">
														<label for="company">Company<span class="red">*</span></label>
														<input type="text" value="<?php echo isset($formdata['company'])?$formdata['company']:''?>" class="form-control" name="company" id="company" placeholder="Company">
													</div>
												</div>
												<div class="row">
													<div class="form-group col-sm-6">
														<label for="phone">Phone<span class="red">*</span></label>
														<input type="text" value="<?php echo isset($formdata['phone'])?$formdata['phone']:''?>" class="form-control" name="phone" id="phone" placeholder="Phone">
													</div>
													<div class="form-group col-sm-6">
														<label for="email">Email<span class="red">*</span></label>
														<input type="text" value="<?php echo isset($formdata['email'])?$formdata['email']:''?>" class="form-control" name="email" id="email" placeholder="Email">
													</div>
												</div>
												<div class="row">
													<div class="form-group col-sm-12">
														<label for="address">Address<span class="red">*</span></label>
														<input type="text" value="<?php echo isset($formdata['address'])?$formdata['address']:''?>" class="form-control" name="address" id="address" placeholder="Address">
													</div>
													<div class="form-group col-sm-4">
														<label for="city">City<span class="red">*</span></label>
														<input type="text" value="<?php echo isset($formdata['city'])?$formdata['city']:''?>" class="form-control" name="city" id="city" placeholder="City">
													</div>
													<div class="form-group col-sm-4">
														<label for="state">State<span class="red">*</span></label>
														<input type="text" value="<?php echo isset($formdata['state'])?$formdata['state']:''?>" class="form-control" name="state" id="state" placeholder="State">
													</div>
													<div class="form-group col-sm-4">
														<label for="zip">Zip<span class="red">*</span></label>
														<input type="text" value="<?php echo isset($formdata['zip'])?$formdata['zip']:''?>" class="form-control" name="zip" id="zip" placeholder="Zip">
													</div>
												</div>
												<div class="row">
													<div class="form-group col-sm-12">
														<label for="website">Website<span class="red">*</span></label>
														<input type="text" value="<?php echo isset($formdata['website'])?$formdata['website']:''?>" class="form-control" name="website" id="website" placeholder="Website">
													</div>
												</div>
												<div class="row">
													<div class="col-sm-12">
														<label for="ownership">Ownership<span class="red">*</span></label>
													</div>
													<div class="form-group col-sm-6">
														<div class="checkbox">
															<label>
																<input type="checkbox" name="ownership[]" value="Black or African American"> Black or African American
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" name="ownership[]" value="Asian American"> Asian American
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" name="ownership[]" value="Hispanic / Latino American"> Hispanic / Latino American
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" name="ownership[]" value="Native American / American Indian"> Native American / American Indian
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" name="ownership[]" value="Woman"> Woman
															</label>
														</div>
													</div>
													<div class="form-group col-sm-6">
														<div class="checkbox">
															<label>
																<input type="checkbox" name="ownership[]" value="Disabled"> Disabled
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" name="ownership[]" value="Service Disabled / Veteran"> Service Disabled / Veteran
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" name="ownership[]" value="LGBT"> LGBT
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" name="ownership[]" value="Other" id="other"> Other
															</label>
														</div>
													</div>
													<div class="form-group col-sm-12">
														<label for="if_other">If "Other", please specify:</label>
														<input type="text" class="form-control" name="if_other" id="if_other" placeholder="Please specify..." value="<?php echo isset($formdata['if_other'])?$formdata['if_other']:''?>">
													</div>
												</div>
												<div class="row">
													<div class="form-group col-sm-12">
														<label for="certified">Are you certified?<span class="red">*</span></label>
														<select class="form-control" name="certified" id="certified">
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select>
													</div>
												</div>
												<div class="row">
													<div class="form-group col-sm-12">
														<label for="services">Type of Product(s) or Service(s) Offered<span class="red">*</span></label>
														<textarea class="form-control" name="services" id="services"><?php echo isset($formdata['services'])?$formdata['services']:''?></textarea>
													</div>
												</div>
												<div class="text-center">
													<button type="submit" class="btn btn-default">Submit</button>
												</div>
											</form>
										</div>
										<div class="col-md-2 col-sm-2 hidden-xs">
											&nbsp;
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>         
				</div>

				<!-- InstanceEndEditable -->
				<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
				
			</div>
		</div>
		<div class="row pga-foot">
			<div class="col-md-8 col-sm-12 col-xs-12 ftr ftr-left">    	
				<p><a href="about-this-report.html">ABOUT THE REPORT</a>&nbsp;&nbsp;|&nbsp;<br class="br-on-mobile"> <a href="2018-PGA-Social-Responsibility-Highlights.pdf" target="_blank">DOWNLOAD&nbsp;HIGHLIGHTS&nbsp;<span><i class="glyphicon glyphicon-download-alt"></i></span></a></p>    	       
			</div>    
			<div class="col-md-4 col-sm-12 col-xs-12 ftr copyright">
				<p class='copyright'>&copy;2018 PGA All rights reserved. </p>
			</div>
		</div>    
	</div><!-- end wrap container -->
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://pgaimpact.org/js/jquery-2.2.4.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://pgaimpact.org/js/bootstrap.min.js"></script>
	<script src="https://pgaimpact.org/js/backtotop.js"></script>
	<script>
	/* $('.dropdown-toggle').click(function() {
		if ($(window).width() > 768)
		{
	    	var location = $(this).attr('href');
	    	window.location.href = location;
	    	return false;
		}
	}); */
	</script>
	<!-- InstanceBeginEditable name="foot-r" -->

</body>
<!-- InstanceEnd -->
</html>