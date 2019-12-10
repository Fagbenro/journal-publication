<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->

<!-- Mirrored from mydesignhoard.com/HTML/html/education/contactusvone.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2019 10:32:19 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nigerian Association of Clinical Psychologists</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/normalize.css">
	<link rel="stylesheet" href="/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="/assets/css/icomoon.css">
	<link rel="stylesheet" href="/assets/css/animate.css">
	<link rel="stylesheet" href="/assets/css/prettyPhoto.css">
	<link rel="stylesheet" href="/assets/css/owl.carousel.css">
	<link rel="stylesheet" href="/assets/css/owl.theme.default.css">
	<link rel="stylesheet" href="/assets/css/transitions.css">
	<link rel="stylesheet" href="/assets/css/main.css">
	<link rel="stylesheet" href="/assets/css/color.css">
	<link rel="stylesheet" href="/assets/css/responsive.css">
	<script src="/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper">
		<!--************************************
				Header Start
		*************************************-->
		@include('header')
		<!--************************************
				Header End
		*************************************-->
		
		<!--************************************
				Inner Banner Start
		*************************************-->
		<div class="tg-innerbanner">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<ol class="tg-breadcrumb">
							<li><a href="/">home</a></li>
							<li class="tg-active">Register</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start						
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-contactus tg-contactusvone">
							<div class="tg-titleborder">
								<h2>Register</h2>
							</div>
								<div class="row">
								<!-- <div class="col-xs-12 col-sm-6 col-md-7 col-lg-8">
									<div id="tg-officelocation" class="tg-officelocation"></div>
								</div> -->
							
								<div class="col-md-8">
									@include('customerror')
									@isset($url)
									<form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}" class="tg-formtheme tg-formcontactus"> 
			                        @endisset
			                        @csrf
			                       
										<fieldset>
											 <input type="hidden" name="image" value="demo">
											<div class="form-group">
												<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Full Name" required autofocus>

				                                @if ($errors->has('name'))
				                                    <span class="invalid-feedback" role="alert">
				                                        <strong>{{ $errors->first('name') }}</strong>
				                                    </span>
				                                @endif							
											</div>

											<div class="form-group">
												 <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>
					                                @if ($errors->has('email'))
					                                    <span class="invalid-feedback" role="alert">
					                                        <strong>{{ $errors->first('email') }}</strong>
					                                    </span>
					                                @endif
											</div>

											<div class="form-group">
												 <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

				                                @if ($errors->has('password'))
				                                    <span class="invalid-feedback" role="alert">
				                                        <strong>{{ $errors->first('password') }}</strong>
				                                    </span>
				                                @endif
											</div>

											<div class="form-group">
												  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required>
											</div>
											<button class="tg-btn" type="submit" >Register</button>
										</fieldset>
									</form>
									<p style="margin-bottom:20px; ">Already have an account? <a href="/login/writer">Login</a></p>

								</div>
									
							<div class="col-md-4">
							<div class="tg-widget tg-widgetadmissionform">
								<div class="tg-widgetcontent" style="background-color: #52b554;">
									<h3>NACP Journal Portal</h3>
									<div class="tg-description">
										<p>Nigeria Association of Clinical Psychologists(NACP) journal portal allows submission of articles..</p>
									</div>
									<a class="tg-btn tg-btnicon" href="/publications">
									<!-- 	<i class="fa fa-file-pdf-o"></i> -->
										<span>Read More</span>
									</a>
								</div>
							</div>
							
						</div>
							
									<!-- <div class="col-md-3"></div> -->
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		@include('footer')
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="/assets/js/vendor/jquery-library.js"></script>
	<script src="/assets/js/vendor/bootstrap.min.js"></script>
	<script src="/assets/js/mapclustering/data.json"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="/assets/js/mapclustering/markerclusterer.min.js"></script>
	<script src="/assets/js/mapclustering/infobox.js"></script>
	<script src="/assets/js/mapclustering/map.js"></script>
	<script src="/assets/js/owl.carousel.min.js"></script>
	<script src="/assets/js/isotope.pkgd.js"></script>
	<script src="/assets/js/prettyPhoto.js"></script>
	<script src="/assets/js/countdown.js"></script>
	<script src="/assets/js/collapse.js"></script>
	<script src="/assets/js/moment.js"></script>
	<script src="/assets/js/gmap3.js"></script>
	<script src="/assets/js/main.js"></script>
</body>

<!-- Mirrored from mydesignhoard.com/HTML/html/education/contactusvone.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Sep 2019 10:32:24 GMT -->
</html>