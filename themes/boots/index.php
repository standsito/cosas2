<!DOCTYPE html>

<html>
	<head>
		
		<!-- Website Title & Description for Search Engine purposes -->
		<title>Code a Responsive Website with Twitter Bootstrap 3</title>
		<meta name="description" content="Learn how to code your first responsive website with the new Twitter Bootstrap 3.">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<!-- Custom CSS -->

		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="includes/js/modernizr-2.6.2.min.js"></script>
		    <?php wp_head() ?>
	</head>
	<body>
	
		<div class="container" id="main">
		
			<div class="navbar-inverse navbar-fixed-top">
				<div class="container">
					
					<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
					<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				
					<a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="Your Logo"></a>
					
					<div class="nav-collapse collapse navbar-responsive-collapse">
						<ul class="nav navbar-nav">
							<li class="active">
								<a href="#">Home</a>
							</li>
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <strong class="caret"></strong></a>
								
								<ul class="dropdown-menu">
									<li>
										<a href="#">Web Design</a>
									</li>
									
									<li>
										<a href="#">Web Development</a>
									</li>
									
									<li>
										<a href="#">SEO</a>
									</li>
									
									<li class="divider"></li>
									
									<li class="dropdown-header">More Services</li>
									
									<li>
										<a href="#">Content Creation</a>
									</li>
									
									<li>
										<a href="#">Social Media Marketing</a>
									</li>
								</ul><!-- end dropdown-menu -->
							</li>
						</ul>
						
						<form class="navbar-form pull-left">
							<input type="text" class="form-control" placeholder="Search this site..." id="searchInput">
							<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
						</form><!-- end navbar-form -->
						
						<ul class="nav navbar-nav pull-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> My Account <strong class="caret"></strong></a>
								
								<ul class="dropdown-menu">
									<li>
										<a href="#"><span class="glyphicon glyphicon-wrench"></span> Settings</a>
									</li>
									
									<li>
										<a href="#"><span class="glyphicon glyphicon-refresh"></span> Update Profile</a>
									</li>
									
									<li>
										<a href="#"><span class="glyphicon glyphicon-briefcase"></span> Billing</a>
									</li>
									
									<li class="divider"></li>
									
									<li>
										<a href="#"><span class="glyphicon glyphicon-off"></span> Sign out</a>
									</li>
								</ul>
							</li>
						</ul><!-- end nav pull-right -->
					</div><!-- end nav-collapse -->
				
				</div><!-- end container -->
			</div><!-- end navbar -->
			
			<?php if(is_front_page()) {?>
			<?php query_posts('showposts=3&post_type=post'); ?>	
			<div class="carousel slide" id="myCarousel">
			
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#myCarousel"></li>
					<li data-slide-to="1" data-target="#myCarousel"></li>
					<li data-slide-to="2" data-target="#myCarousel"></li>
				</ol>
			
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<?php  if (have_posts()) : while (have_posts()) : the_post(); $i++;?>
					<?php if ($i==1) { ?>
					<div class="item active" id="slide1">
						<?php } else { ?>
						<div class="carousel-caption">
							<h4>Bootstrap 3</h4>
							<p>Learn how to build your first responsive website with the brand new Twitter Bootstrap 3!</p>
						</div><!-- end carousel-caption-->
					</div><!-- end item -->
					
						<?php endwhile; endif; ?>
				</div><!-- carousel-inner -->
	
				<!-- Controls -->
				<a class="left carousel-control" data-slide="prev" href="#myCarousel"><span class="icon-prev"></span></a>
				<a class="right carousel-control" data-slide="next" href="#myCarousel"><span class="icon-next"></span></a>
			
			</div><!-- end myCarousel -->
			
			
			<div class="row" id="bigCallout">
				<div class="col-12">
					
					<div class="alert alert-info alert-block fade in" id="successAlert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						
						<h4>Information!</h4>
						<p>You just made this element display by using jQuery. Click the "x" in the top right corner to close this bad boy.</p>
					</div><!-- end alert -->
					
					<!-- Visible only on small devices -->
					<div class="well well-small visible-sm">
						<a href="" class="btn btn-large btn-block btn-default"><span class="glyphicon glyphicon-phone"></span> Give us a call!</a>
					</div><!-- end well-small -->
					
					<div class="well">
						<div class="page-header">
							<h1>A Fancy Header <small>A subheader for extra awesome.</small></h1>
						</div><!-- end page-header -->
						
						<p class="lead">Some solid leading copy will help get your users engaged. Use this area to come up with something real nice. Know what I'm sayin?</p>
						
						<a href="" class="btn btn-large btn-primary" id="alertMe">Click a nice big button</a>
						<a href="" class="btn btn-large btn-link">or a secondary link</a>
					</div><!-- end well -->
					
				</div><!-- end col-12 -->
			</div><!-- end bigCallout -->
			
			
			<div class="row" id="featuresHeading">
				<div class="col-12">
					<h2>More Features</h2>
					<p class="lead">Cornhole kitsch Williamsburg pug bicycle rights vegan. Neutra food truck occupy kitsch sustainable.</p>
				</div><!-- end col-12 -->
			</div><!-- end featuresHeading -->
			
			
			<div class="row" id="features">
				<div class="col-sm-4 feature">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Markup with HTML5</h3>
						</div><!-- end panel-heading -->
						<img src="<?php echo get_template_directory_uri();?>/images/badge_html5.jpg" alt="HTML5" class="img-circle">
						
						<p>90's authentic single-origin coffee stumptown Pinterest. Fap aesthetic dreamcatcher pickled Brooklyn irony.</p>
						
						<a href="https://www.udemy.com/build-beautiful-html5-website/" target="_blank" class="btn btn-warning btn-block">Learn to code HTML5</a>
					</div><!-- end panel -->
				</div><!-- end feature -->
				
				<div class="col-sm-4 feature">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Style with CSS3</h3>
						</div><!-- end panel-heading -->
						<img src="<?php echo get_template_directory_uri();?>/images/badge_css3.jpg" alt="CSS3" class="img-circle">
						
						<p>90's authentic single-origin coffee stumptown Pinterest. Fap aesthetic dreamcatcher pickled Brooklyn irony.</p>
						
						<a href="https://www.udemy.com/build-beautiful-html5-website/" target="_blank" class="btn btn-danger btn-block">Style it up with CSS3</a>
					</div><!-- end panel -->
				</div><!-- end feature -->
				
				<div class="col-sm-4 feature">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Framework by Bootstrap 3</h3>
						</div><!-- end panel-heading -->
						<img src="<?php echo get_template_directory_uri();?>/images/badge_bootstrap.jpg" alt="Bootstrap 3" class="img-circle">
						
						<p>90's authentic single-origin coffee stumptown Pinterest. Fap aesthetic dreamcatcher pickled Brooklyn irony.</p>
						
						<a href="http://getbootstrap.com/" target="_blank" class="btn btn-info btn-block">More Bootstrap</a>
					</div><!-- end panel -->
				</div><!-- end feature -->
			</div><!-- end features -->
			
			
			<div class="row" id="moreInfo">
				<div class="col-sm-6">
					<h3>Neat Tabbable Content</h3>
					<div class="tabbable">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Section 1</a></li>
							<li><a href="#tab2" data-toggle="tab">Section 2</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab1">
								<h4><span class="glyphicon glyphicon-map-marker"></span> Our Location <small>More like our favourite surf spot</small></h4>
								
								<iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ca/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=waikiki+beach&amp;aq=&amp;sll=19.896766,-155.582782&amp;sspn=8.711424,11.854248&amp;ie=UTF8&amp;hq=&amp;hnear=Waikiki+Beach,+Honolulu,+Hawaii,+United+States&amp;t=m&amp;ll=21.277298,-157.8265&amp;spn=0.015996,0.036478&amp;z=14&amp;output=embed"></iframe>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div><!-- end tab-pane -->
							
							<div class="tab-pane" id="tab2">
								<h4>A Left Floated Picture <small>Using Placehold.it</small></h4>
								
								<img src="http://placehold.it/140" class="thumbnail pull-left" alt="Placeholder image">
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								
								<hr>
								
								<a href="#myModal" role="button" class="btn btn-warning" data-toggle="modal"><span class="glyphicon glyphicon-hand-up"></span> Click for a Modal Window!</a>
								
								<div class="modal fade" id="myModal">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button class="close" data-dismiss="modal">&times;</button>
												
												<h4 class="modal-title">A Modal Window</h4>
											</div><!-- end modal-header -->
											<div class="modal-body">
												<h4>Text in a modal</h4>
												
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												
												<h4>Popovers in a modal</h4>
												<a href="#" class="btn btn-danger pop" data-toggle="popover" data-placement="top" data-original-title="You clicked it!" data-content="I knew you would.">Don't click this button</a>
												
												<h4>Tooltips in a modal</h4>
												<a href="" data-original-title="Tooltip" rel="tooltip">This link</a> should have a tooltip, and so should <a href="#" data-original-title="Woohoo!" rel="tooltip">this one</a>!
												
												<hr>
												
												<p><small class="text-muted">PS. This form doesn't do anything. Just a heads up.</small></p>
												
												<form class="form-horizontal">
													<div class="form-group">
														<label class="col-lg-2 control-label" for="inputName">Name</label>
														<div class="col-lg-10">
															<input class="form-control" id="inputName" placeholder="Name" type="text">
														</div>
													</div>
													
													<div class="form-group">
														<label class="col-lg-2 control-label" for="inputEmail">Email</label>
														<div class="col-lg-10">
															<input class="form-control" id="inputEmail" placeholder="Email" type="email">
														</div>
													</div>
													
													<div class="form-group">
														<label class="col-lg-2 control-label" for="inputMessage">Message</label>
														<div class="col-lg-10">
															<textarea class="form-control" id="inputMessage" placeholder="Message" rows="3"></textarea>
															<button class="btn btn-success pull-right" type="submit">Send!</button>
														</div>
													</div>
												</form>
											</div><!-- end modal-body -->
											
											<div class="modal-footer">
												<button class="btn btn-default" data-dismiss="modal" type="button">Close</button> <button class="btn btn-primary" type="button">Save changes</button>
											</div><!-- end modal-footer -->
										</div><!-- end modal-content -->
									</div><!-- end modal-dialog -->
								</div><!-- end myModal -->
								
							</div><!-- end tab-pane -->
						</div><!-- end tab-content -->
					</div><!-- end tabbable -->
				</div><!-- end col-sm-6 -->
				
				<div class="col-sm-6">
					<h3>Some Text Info</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					
					<h4>A List Group</h4>
					
					<div class="list-group">
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Kale</h4>
							<p class="list-group-item-text">Kale or borecole is a vegetable with green or purple leaves, in which the central leaves do not form a head.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Carrots</h4>
							<p class="list-group-item-text">The carrot is a root vegetable, usually orange in colour, though purple, red, white, and yellow varieties exist. It has a crisp texture when fresh.</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">Steel-cut oats</h4>
							<p class="list-group-item-text">Steel-cut oats are whole grain groats which have been cut into pieces. They are commonly used in Scotland and Ireland to make porridge.</p>
						</a>
					</div><!-- list-group -->
					
					<h5>A small heading</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div><!-- end col-sm-6 -->
			</div><!-- end moreInfo -->
			
			<hr>
			
			<div class="row" id="moreCourses">
				<div class="col-12">
					<h3>Learn more about Web Design</h3>
					<div class="thumbnails row">
						<div class="col-6">
							<div class="thumbnail">
								<img src="<?php echo get_template_directory_uri();?>/images/item_psd2html5.jpg" alt="PSD to HTML5 & CSS3">
								
								<div class="label label-success price"><span class="glyphicon glyphicon-tag"></span> <sup>$</sup>39</div>
								
								<div class="caption">
									<h3>PSD to HTML5 &amp; CSS3</h3>
									
									<p>Learn how to take a PSD and turn it into a beautiful, hand-coded HTML5 &amp; CSS3 website with this web design crash course.</p>
									
									<p><a href="https://www.udemy.com/build-beautiful-html5-website/" class="btn btn-primary btn-small" target="_blank">Take course</a> <a href="https://www.udemy.com/build-beautiful-html5-website/" target="_blank" class="btn btn-small btn-link">Learn more</a></p>
								</div><!-- end caption -->
							</div><!-- end thumbnail -->
						</div><!-- end col-6 -->
						
						<div class="col-6">
							<div class="thumbnail">
								<img src="<?php echo get_template_directory_uri();?>/images/item_webhosting101.jpg" alt="Web Hosting 101">
								
								<div class="label label-info price"><span class="glyphicon glyphicon-tag"></span> Free</div>
								
								<div class="caption">
									<h3>Web Hosting 101</h3>
									
									<p>Learn how to publish your own website live in no time with this web hosting crash course. Plus setup your first Wordpress site in 5-minutes!</p>
									
									<p><a href="https://www.udemy.com/web-hosting-101/" class="btn btn-primary btn-small" target="_blank">Take course</a> <a href="https://www.udemy.com/web-hosting-101/" target="_blank" class="btn btn-small btn-link">Learn more</a></p>
								</div><!-- end caption -->
							</div><!-- end thumbnail -->
						</div><!-- end col-6 -->
					</div><!-- end row -->
				</div><!-- end col-12 -->
			</div><!-- end moreCourses -->
		</div><!-- end container -->
		
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
					<h6>Copyright &copy; 2014 AlexKuhtin</h6>
					</div><!-- end col-sm-2 -->
					
					<div class="col-sm-4">
						<h6>About Us</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div><!-- end col-sm-4 -->
					
					<div class="col-sm-2">
						<h6>Navigation</h6>
						<ul class="unstyled">
							<li><a href="#">Home</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Links</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div><!-- end col-sm-2 -->
					
					<div class="col-sm-2">
						<h6>Follow Us</h6>
						<ul class="unstyled">
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Google Plus</a></li>
						</ul>
					</div><!-- end col-sm-2 -->
					
					<div class="col-sm-2">
						<h6>Coded with <span class="glyphicon glyphicon-heart"></span> by Brad</h6>
					</div><!-- end col-sm-2 -->
				</div><!-- end row -->
			</div><!-- end container -->
		</footer>
	

	<!-- All Javascript at the bottom of the page for faster page loading -->
		
	<!-- First try for the online version of jQuery-->
	<script src="http://code.jquery.com/jquery.js"></script>
	
	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
	
	<!-- Bootstrap JS -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Custom JS -->
	<script src="includes/js/script.js"></script>
	
	</body>
</html>

