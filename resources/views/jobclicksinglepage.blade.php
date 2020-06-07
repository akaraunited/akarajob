<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AkaraJob - Homepage</title>

<!-- bootstrap library import -->
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- internal style import -->
<link rel="stylesheet" href="{{asset('css/style.css') }}">

</head> 
<body>
<nav class="navbar navbar-default navbar-expand-lg navbar-light">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="{{ url('/')}}"><img src="{{asset('images/logo.png')}}" alt="" style="width: 56px; height: 56px;"></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<ul class="nav navbar-nav">
			<li class="nav-item"><a href="{{ url('/')}}" class="nav-link">Jobs</a></li>
			<li class="nav-item"><a href="{{ url('/howtowritecv')}}" class="nav-link">How to write CV</a></li>
			<li class="nav-item"><a href="{{ url('/aboutus')}}" class="nav-link">About Us</a></li>
			<!-- <li class="nav-item dropdown">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Services <b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a href="#" class="dropdown-item">Web Design</a></li>
					<li><a href="#" class="dropdown-item">Web Development</a></li>
					<li><a href="#" class="dropdown-item">Graphic Design</a></li>
					<li><a href="#" class="dropdown-item">Digital Marketing</a></li>
				</ul>
			</li> -->
		</ul>
		<!-- <form class="navbar-form form-inline">
			<div class="input-group search-box">								
				<input type="text" id="search" class="form-control" placeholder="Search here...">
				<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
			</div>
		</form> -->
		<ul class="nav navbar-nav navbar-right ml-auto">			
			<li class="nav-item">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" style="padding-right:10px;" href="#">Login</a>
				<ul class="dropdown-menu form-wrapper">					
					<li>
						<form action="/examples/actions/confirmation.php" method="post">
							<p class="hint-text" style="text-align: left;">Login</p>
							<!-- <div class="form-group social-btn clearfix">
								<a href="#" class="btn btn-primary pull-left"><i class="fa fa-facebook"></i> Facebook</a>
								<a href="#" class="btn btn-info pull-right"><i class="fa fa-twitter"></i> Twitter</a>
							</div> -->
							<!-- <div class="or-seperator"><b>or</b></div> -->
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" required="required">
							</div>
                            <input type="submit" class="btn btn-primary btn-block" value="Login">
							<div class="form-footer">
								<p>Login via
									<a href="#" class=""><i class="fa fa-facebook"></i> Facebook</a>
								</p>
								<a href="{{ url('/forgetpassword')}}">Forgot Your password?</a>
							</div>
						</form>
					</li>
				</ul>
			</li>
			<li class="nav-item">
                
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle"><span style="margin-right:20px;">/</span>Register</a>
				<ul class="dropdown-menu form-wrapper">					
					<li>
						<form action="/examples/actions/confirmation.php" method="post">
							<p class="hint-text" style="text-align: left;">Register an Account</p>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="First Name" required="required">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Last Name" required="required">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Confirm Password" required="required">
							</div>
							<!-- <div class="form-group">
								<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms &amp; Conditions</a></label>
							</div> -->
							<input type="submit" class="btn btn-primary btn-block" value="Sign up">
							<div class="form-footer">
								<p>Register via
									<a href="#" class=""><i class="fa fa-facebook"></i> Facebook</a>
								</p>
								
							</div>
						</form>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</nav>
<div>
    <img  class="akarajobads" src="{{asset('images/akarajobads.png')}}" alt="">
</div>
<div class="container-fluid border-search-form">
    <form class="form-inline">
        

              <select data-trigger="" name="choices-single-defaul" class="categoriesselect">
                <option placeholder="">All Job Categories</option>
                <option>Singer/songwriter</option>
                <option>Music producer</option>
                <option>Art curator</option>
                <option>Animator/video game designer</option>
                <option>Filmmaker</option>
                <option>Graphic designer</option>
                <option>Fashion designer</option>
              </select>
              
              <select data-trigger="" name="choices-single-defaul" class="categoriesselect">
                <option placeholder="">All Location</option>
                <option>Phnom Penh</option>
                <option>Banteay Meanchey</option>
                <option>Battambang</option>
                <option>Kampong Cham</option>
                <option>Kampong Chhnang/option>
                <option>Kampong Speu</option>
                <option>Kampong Thom</option>
              </select>
              
              <select data-trigger="" name="choices-single-defaul" class="categoriesselect">
                <option placeholder="">All Job Times</option>
                <option>Full-Time</option>
                <option>Part-Time</option>
              </select>
        <input class="form-control mr-sm-2 input-search input-search-add round-input-search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 round-button" type="submit">Go</button>
      </form>
</div>
    

<main>
    <div class="container" >

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="panel-more1">
                    <h5><strong>Web Frontend Developer</strong></h5>
                    <h6>Skybooking CO., LTD</h6>
                    <h6>$500-$999</h6>
                    <h6>Publish Date：May-25-2020</h6>
                    <h6> <span style="color: red;">Closing Date</span> ：Jun-24-2020</h6>
                    <br>
                    <button style="width: 90px !important;background-color:rgb(62, 62, 238);border-color:rgb(62, 62, 238);" class="btn btn-primary btn-block round-input-search" >Apply</button>
                    <br>
                </div>
                <div class="panel-more1" style="float: right;">
                    <h5><strong>Company Profile: Skybooking CO., LTD</strong></h5>
                    <h6>Company Type:  Tourism,  Private Limited Company </h6>
                    <h6>Location:  Phnom PenhBeung Keng Korng 1, Chamkarmon, Oval Building, 11th Floor , PP </h6>
                    <h6>Number of Employer:  10-50 people</h6>
                    <br>
                    <h6>Company Website: skybooking.net</h6>
                    <h6>Phone Number: 093456789</h6>
                    <h6>Email:  vouchkeang.oeung@skybooking.info</h6>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="panel-more1">
                    <h5><strong>Job Description</strong></h5>
                    <p>
                        <ul>
                            <li>Holds at least Bachelor degree or higher in Information Technology or with relevant skills.
                            </li>
                            <li>At least 2 year’s professional working experience as Web Frontend Developer or similar role
                                with a Company/ies or NGO.
                               </li>
                            <li>Be professional in Reactjs, Javascript Library
                            </li>
                            <li>Be professional in HTML, CSS styles</li>
                            <li>Be professional in MySQL Database and Microservice understanding is a PLUS
                            </li>
                            <li>Have a good attitude, team spirit; strong communication skills to collaborate with various 
                                teamwork.
                                </li>
                            <li>Good in English and Khmer both spoken and written</li>
                        </ul>
                    </p>
                    <br>
                    <h5><strong>Job Requirement</strong></h5>
                    <p>
                        <ul>
                            <li>Using markup languages like HTML to create user-friendly web pages and Maintaining and 
                                improving website or web application
                                </li>
                            <li>Optimizing applications for maximum speed
                            </li>
                            <li>At least 2-3 Years of Experience in Web Front End Development</li>
                            <li>Design Web and mobile-based features.
                            </li>
                            <li>Proficient understanding of web markup Experience with JavaScript, CSS and jQuery, Bootstrap 
                                and Libraries to Customize.</li>
                            <li>Basic understanding of server-side CSS pre-processing platforms, such as LESS and SASS</li>
                            <li>Proficient understanding of client-side scripting and JavaScript frameworks, including jQuery
                            </li>
                            <li>Good understanding of asynchronous request handling, partial page updates, and AJAX
                            </li>
                            <li>Basic knowledge of image authoring tools, to be able to crop, resize, or perform small 
                                adjustments on an image.</li>
                            <li> Collaborate with back-end developers and web designers to improve usability
                            </li>
                            <li>Proficient understanding of cross-browser compatibility issues and ways to work around them</li>
                            <li>Proficient understanding of code versioning tools, such as Git
                            </li>
                            <li>Good understanding of SEO principles and ensuring that application will adhere to them.
                            </li>
                            <li>Get feedback from, and build solutions for, users and Product owner.
                            </li>
                            <li> Create quality mockups and prototypes to deeply understand business to convert users in 
                                a best UI/UX Experience.
                                </li>
                            <li>Ensure high quality graphic standards and brand consistency</li>
                            <li>Stay up-to-date on emerging technologies with new features and innovative design for 
                                the Appropriate need.</li>
                            <li>Develop new user-facing features
                            </li>
                            <li>Build reusable code and libraries for future use
                            </li>
                            <li>Ensure the technical feasibility of UI/UX designs
                            </li>
                            <li> Optimize application for maximum speed and scalability
                            </li>
                            <li>Assure that all user input is validated before submitting to back-end
                            </li>
                            <li>Collaborate with other team members and stakeholders </li>
                        </ul>
                    </p>
                </div>
                
            </div>
        </div>

</div>
    </main>

    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="footer-col-rt col-md-6">
                    <p>Contact Us</p>
                    <p>akarajob@gmail.com / 087479956</p>
                    <p><a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-skype"></a>
                        <a href="#" class="fa fa-youtube"></a>
                    </p>
                </div>
                <div class="footer-col-lf col-md-6">
                    <p>&copy; 2020 by AkaraJob</p>
                </div>
            </div>
        </div>
    </footer>

<!-- javascript script import -->
<script type="text/javascript" src="script.js"></script>
</body>
</html>                                                        