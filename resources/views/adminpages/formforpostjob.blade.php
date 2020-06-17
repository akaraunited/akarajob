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
<style>
    
.list-group li{
    border:0px;
}
.panel-body{
    width: 70%;
    margin: auto;
}
input[type="text"]  {
    display: block;
    margin-top: 50px;
    width: 300px;
}
input[type="date"]  {
    display: block;
    margin-top: 50px;
}
textarea{
    width: 100%;
    margin-top: 20px;
}
</style>
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
    
{{-- start main --}}

<div class="container">
    <h2 style="text-align:center;margin-bottom:40px;">Form For Post Job</h2>
    <form>
        {{-- upload company logo button --}}
        <div class="form-group">
            <div style="position:relative;">
                <a class='btn btn-primary round-input-search' style="background-color:rgb(62, 62, 238);border-color:rgb(62, 62, 238);" href='javascript:;'>
                    Upload Company Logo
                    <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
                </a>
                &nbsp;
                <span class='label label-info' id="upload-file-info"></span>
            </div>
          </div>
          {{-- end upload company logo button --}}

          <div class="panel panel-default">
            <div class="panel-body">
                <div class="panel-more1">
                    <input type="text" placeholder="Company Name">
                    <input type="text" placeholder="Company Type">
                    <input type="text" placeholder="Company Location">
                    <input type="text" placeholder="Company Website">
                    <input type="text" placeholder="Company Phone Number">
                </div>
                <div class="panel-more1" style="float: right;">
                    <input type="text" placeholder="Job Title">
                    <input type="text" placeholder="Salary Offer">
                    <input type="date" placeholder="Public Date">
                    <input type="date" placeholder="Closing Date">
                    <input type="text" placeholder="Company Email">
                </div>
                
            </div>
            <div style="text-align:center;">
                <textarea name="" id="" cols="30" rows="10" placeholder="Job Description"></textarea>
            </div>
            <div style="text-align:center;">
                <textarea name="" id="" cols="30" rows="10" placeholder="Job Requirement"></textarea>
            </div>
            
        </div>
        <input type="submit" class="btn round-input-search" style="width: 90px !important;background-color:rgb(62, 62, 238);border-color:rgb(62, 62, 238); color:white; margin-bottom:50px;" value="Submit">
      </form>
</div>

    </main>
    {{-- end main --}}
{{-- footer --}}
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