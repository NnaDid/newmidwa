<!doctype html>

<html>

   <head>
    <title>midwa</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel ="stylesheet" 	href ="css/font-awesome.css" />
	<link rel ="stylesheet" 	href ="css/bootstrap.min.css" />
	<link rel ="stylesheet" 	href ="css/main.css" />
	<link rel ="shortcut icon"  href ="images/logo.png"/>
	<style>
		ul,.menulist{
			list-style-type:none;
			margin-left:0px;
		}
		ul.submenu,ul.submenu-2,ul.submenu-3{
			display:none;
			left:190px;
			transition: 0.6s;
			background-color:#f1f1f1;
			position:absolute;
			top:calc(0 - 1px);
			min-width: 230px;
			box-shadow: 0px 8px 16px 0px rgba(200,0,20,0.2);
			padding:4px;
			z-index:200000;
		}
		.menulist li:hover ul.submenu{
			display:block;
		}
		.submenu li:hover ul.submenu-2{
			display:block;
		}
	</style>
<script src="https://kit.fontawesome.com/a276793cb3.js"></script>
   </head>
   
    <body class ="app-bg">
     <div class =" app-bg container main">
	
	      	<nav style ="border-bottom:1px solid #70AD47; text-align:right;">
				<a class="btn btn-outline-success btn-sm" href="?pg=signup">Register</a>
				<a class="btn btn-outline-success btn-sm loginBtn" href="?pg=signup">&nbsp;Login &nbsp;</a>
				<a class="btn" href="#">English</a>
				<a class="btn" href="#">French</a>
				<a class="btn" href="#">Português</a>
			</nav>


		<nav class="navbar navbar-expand-lg navbar-light app-bg" style ="border-bottom:2px solid #70AD47;">
		<div class="collapse navbar-collapse col-md-12" id="navbarTogglerDemo01">
			<a class="navbar-brand" href="index.php">
			<img src="images/logo.png" class ="img-responsive" width ="130" height ="130" style ="border-radius:8em;"/>
			<span class ="bold hidden-xs-down">Migration Dialogue For West Africa</span>
			</a>
			<ul class="navbar-nav ml-auto" >
			  <li class="nav-item">
				<form id ="searchForm">
			    <div class="input-group mb-3">
				  <input type="text" class="form-control search" name ="search" placeholder="Search">
				  <div class="input-group-append">
					<button class="btn btn-outline-success"><i class ="fa fa-search"></i></button>
				  </div>
				</div>
				</form>
			  </li>
			</ul>
			</div>
		</nav>


	
		<nav class="navbar navbar-expand-lg navbar-light app-bg mb-2" style ="border-bottom:2px solid #70AD47;">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
			<ul class="navbar-nav mr-auto mt-0 mt-lg-0 navBtns">
			  <li class="nav-item dropdown">
				<a class="nav-link">About Us <i class ="fa fa-caret-down"></i></a>
				  <div class="dropdown-content">
					<ul class ="menulist" style ="margin:0px;">
						<li class="nav-item"><a class="" href="#">Brief History Of MIDWA</a></li>
						<li class="nav-item"><a class="" href="#">Mandate</a></li>
						<li class="nav-item"><a class="" href="#">Our Objectives</a></li>
						<li class="nav-item"><a class="" href="#">What We Are Doing</a></li>
						<li class="nav-item"><a class="" href="#">MIDWA Secretariat</a>
							<ul class="submenu">
								<li class="nav-item"><a class="" href="?pg=media&media=photos">Governance Structure</a></li>
								<li class="nav-item"><a class="" href="?pg=media&media=videos">Organogram</a></li> 
							</ul>
						</li>
						<li class="nav-item"><a class="" href="#">Our Achievements</a></li>
						<li class="nav-item"></li><a class="" href="#">Partners</a></li>
					</ul>
				  </div>
			 </li>
			  <li class="nav-item dropdown">
				<a class="nav-link" href="#">Thematic areas 
				<i class ="fa fa-caret-down"></i></a>
				<div class="dropdown-content">
				  <a class="" href="#">Border Management</a>
				  <a class="" href="#">Labour Migration</a>
				  <a class="" href="#">Migration Data</a>
				  <a class="" href="#">Mixed Migration</a>
				  <a class="" href="#">Return and Re-integration</a>

				  </div>
			  </li>

			  <li class="nav-item dropdown">
				<a class="nav-link" href="#">Strategy <i class ="fa fa-caret-down"></i></a>
				  <div class="dropdown-content">
				  <ul class ="menulist">
				  <li class="nav-item"><a class="" href="?pg=dialogue">Dialogue</a>
				         <ul class="submenu">
									<li class="nav-item"><a class="" href="?pg=meetings&meetings=global">Expert  Meetings</a></li> 
									<li class="nav-item"><a class="" href="?pg=meetings&meetings=national">Ministerial Meetings</a></li>
									<li class="nav-item"><a class="" href="?pg=meetings&meetings=secretariate">Secretariat Meetings</a></li> 
							</ul>
				</li>
				  <li class="nav-item"><a class="" href="?pg=regional_meeting">Facilitations</a></li>
				 <!-- <li class="nav-item"><a class="" href="?pg=contenental_meeting">Meetings</a>
				     <ul class="submenu">
						<li class="nav-item"><a class="" href="?pg=mettings&meetings=continental">Continental Meetings</a>

						</li>
						<li class="nav-item"><a class="" href="?pg=meetings&meetings=global">Global Meetings</a></li> 
						<li class="nav-item"><a class="" href="?pg=meetings&meetings=national">National Meetings</a></li>
						<li class="nav-item"><a class="" href="?pg=meetings&meetings=regional">Regional Meetings</a></li>  
			
					</ul>
				  </li>-->
				  <li class="nav-item"><a class="" href="#">Policy Formulation</a></li>
				 </ul>
				  </div>

			  </li> 

			  <li class="nav-item dropdown">
				<a class="nav-link" href="#">Resources<i class ="fa fa-caret-down"></i></a>
					<div class="dropdown-content">	
					<a class="dropdown" href="?pg=report">Reports</a>
					<a class="" href="?pg=studies">Studies</a>
					<a class="extMenu" href="?pg=publications">Publications</a>
					</div>
			  </li>

			  <li class="nav-item dropdown">
				<a class="nav-link" href="#"> Communications <i class ="fa fa-caret-down"></i></a>
				<div class="dropdown-content">
				  <ul class ="menulist">
				  <li class="nav-item"><a class="" href="?pg=articles">Articles</a>
				  <li class="nav-item"><a class="" href="?pg=media">Media</a>
				    <ul class="submenu">
						<li class="nav-item"><a class="" href="?pg=media&media=photos">Photo  Gallery</a></li>
						<li class="nav-item"><a class="" href="?pg=media&media=videos">Videos</a></li> 
					</ul>
				  </li>
				  <li class=""><a class="" href="?pg=newsletters">Newsletters</a>
				</li>
				  <li class="nav-item"><a class="" href="?pg=press_release">Press Release</a></li>
				  <li class="nav-item"><a class="" href="?pg=visibility">Visibility</a></li>
				 
				</ul>
				</div>
			  </li>
			  <li class="nav-item dropdown">
				<a class="nav-link" href="?pg=contactus">Contact Us</a>
			  </li> 
			  <li class="nav-item dropdown">
				<a class="nav-link" href="?pg=faq">Faq</a>
			  </li>
			</ul>
		  </div>
		</nav>
	
	<?php
	  require_once("views/viewCtrl.php");
	  $pg->switchPages(@$_GET["pg"]);

	  $pg->addPage("views/footer.php");
	 
	?>


     </div>

		<!-- Login Modal -->
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Login</h4>
			</div>
			<div class="modal-body">
			<form accept-charset="UTF-8" role="form" id ="loginForm" method ="post">
						<fieldset>
						<div class="form-group">
							<div class="input-group-text">
							<span class="input-group-prepend"><i class="fa fa-fw fa-envelope"></i></span>
							<input type="email" class="form-control" placeholder="Email" name ="email" required />
							</div>
						</div>
						<div class="form-group">
							<div class="input-group-text">
							<span class="input-group-prepend"><i class="fa fa-fw fa-lock"></i></span>
							<input type="password" class="form-control" placeholder="Password" name ="pwd" required />
							</div>
						</div>
						<div class="form-group">
							<div class="input-group-text">
								<span class="input-group-prepend"><i class="fa fa-fw fa-flag"></i></span>
								<select name ="institution" class="form-control" required >
									<option >Select your institution</option>
									<option value ="Governmental">Governmental</option>
									<option value ="International Organization">International Organization</option>
									<option value ="Civil Society">Civil Society</option>
									<option value ="University & Research">University & Research</option>
									<option value ="Others">Others</option>
								</select>
							</div>
							</div>
						<div class="checkbox">
							<label>
								<input name="remember" type="checkbox" value="Remember Me">
								Remember Me
							</label>
							<a href="admin/forgot.php" >Forgot password</a>
							<a href="#" class ="signUpBtn">SignUp here</a>
						</div>               
						<div id ="reportLogin"> </div>    <!--  Report the Status of the Login as Retuned by JS fro PHP -->
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-outline-success">Login</button>
				</fieldset>
				</form>
					
			</div>
			</div>
		</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src ="js/node_modules/jquery/dist/jquery.min.js"></script>
<script src ="js/node_modules/bootstrap/js/bootstrap.min.js"></script>
 



<script>
  // this script is for switching signUo and Sign In forms
  $(document).ready(()=>{
	  // Handle Selection of institutions during signup
	  let institution = $(".institution");
	  let whenOthers  = $(".when-others");
	  $(document).on("change",institution,function(evt){
        let insValue = evt.target.value;
		if(insValue==="Others"){
			whenOthers.removeAttr("hidden");
		}else{
			whenOthers.attr("hidden",true);
		}
	  });

	   $(".loginBtn").click((evt)=>{
		   evt.preventDefault();
		   $(".signUpModal").fadeOut(1000);
		   $(".loginModal").slideUp(1000).show();
	   });
	   $(".signUpBtn").click((evt)=>{
		   evt.preventDefault();
		   $(".signUpModal").slideUp(1000).show();
		   $(".loginModal").fadeOut(1000);
	   });

	   $(".search").on("change",function(){
		   let str = $(".search").val();
			window.location.href ="?search="+str;
	   });
	   var urlParams = new URLSearchParams(location.search);
	   if(urlParams.has('search')){
		  alert(urlParams.get('search'));
	   }
	   
	   $(".download, .more").click(function(evt){
			$(".loginModal").modal("show");
	   });
   });


</script>
   </body>

</html>
