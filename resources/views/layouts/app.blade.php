<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
			
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('public/css/bootstrajqueryp.css') }}" rel="stylesheet">
	 <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
	  <link href="{{ asset('public/css/style2.css') }}" rel="stylesheet">
	  <link href="{{ asset('public/css/slippry.css') }}" rel="stylesheet">
	  <link href="{{ asset('public/css/slider.css') }}" rel="stylesheet">
	  <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
        <!---------------->
<body>
        <header>

            <div class="uk-sticky-placeholder" style="height: 102px; margin: 0px;">
			<div data-uk-sticky="{media:'(min-width: 1024px)', top:300, animation:'uk-animation-slide-top'}" style="margin: 0px;">
                <div class="uk-container uk-container-center">
                    <div class="uk-grid">
                        <div class="uk-width-3-10 uk-width-large-2-10 uk-width-medium-1-1">

                            <!-- main logo begin -->
                                <div id="logo">
                                    <a href="index.html"><img src="public/images/logo 2.png" alt="CG Web Services"></a>
                                </div>
                            <!-- main logo end -->

                        </div>
                        <div class="uk-width-7-10 uk-width-large-8-10 uk-width-medium-1-1">

                            <!-- mainmenu begin -->
                            <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
	  <ul class="nav navbar-nav navbar-right">
        <li class=""><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">About</a></li>
		<li><a href="#">Blog</a></li>
		<li><a href="#">Domains</a></li>
		<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hosting<span class="caret"></span></a>
					<ul class="dropdown-menu">
					<li><a href="#">Web Hosting</a></li>
						<ul>
						<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hosting<span class="caret"></span></a>
					<ul class="dropdown-menu">
					<li><a href="#">Web Hosting</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="#">Separated link</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="#">more separated link</a></li>
					</ul>
		</li>
						</ul>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="#">Separated link</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="#">more separated link</a></li>
					</ul>
		</li>
		<li><a href="#">VPS</a></li>
		<li><a href="#"></a></li>
        <li><a href="contact.html">Contact</a></li>  
			
      </ul>		
    </div>
                            
                            
                            <!-- mainmenu end -->

                        </div>
                    </div>
                </div>
            </div>
			</div>
        </header>
<section class="demo_wrapper">
			

			<ul id="demo1">
				<li><a href="#"><img src="public/images/slides/slide1.jpg" alt="This is caption 1 <a href='#link'>Even with links!</a>"></a></li>
				<li><a href="#"><img src="public/images/slides/slide2.jpg" alt="This is caption 2"></a></li>
				<li><a href="#"><img src="public/images/slides/slide3.jpg" alt="And this is some very long caption for slide 3. Yes, really long."></a></li>
			</ul>
		</section>

<section class="uk-padding">
<div class="uk-container uk-container-center">
<div class="uk-grid">
<div class="uk-width-1-1 uk-text-center uk-margin-bottom">
<h1 class="uk-margin-small-bottom">Web Hosting made Easy and Affordable!</h1>

<p class="uk-text-large uk-margin-small-top">Get your Business Online in an Affordable way</p>
</div>

<div class="uk-width-1-1 uk-margin-top" id="plan-tab">
<div class="uk-tab-center" style="display:none;"><!-- This is the tabbed navigation containing the toggling elements -->
<ul class="uk-tab" data-uk-tab="{connect:'#host-plan'}">
	<li aria-expanded="true" class="uk-active"><a href="#"><span class="uppercase">Web</span>Hosting</a></li>
	<li aria-expanded="false"><a href="#"><span class="uppercase">Reseller</span>Hosting</a></li>
	<li aria-expanded="false"><a href="#"><span class="uppercase">Unlimited</span>Hosting</a></li>
	<li aria-expanded="false"><a href="#"><span class="uppercase">SEO</span>Hosting</a></li>
	<li aria-expanded="false"><a href="#"><span class="uppercase">VPS</span>Hosting</a></li>
	<li aria-expanded="false"><a href="#"><span class="uppercase">Cloud</span>Hosting</a></li>
	<li aria-expanded="false"><a href="#"><span class="uppercase">Dedicated</span>Server</a></li>
<li class="uk-tab-responsive uk-active uk-hidden" aria-haspopup="true" aria-expanded="false"><a>WebHosting</a><div class="uk-dropdown uk-dropdown-small"><ul class="uk-nav uk-nav-dropdown"></ul><div></div></div></li></ul>
</div>
<!-- This is the container of the content items -->

<ul class="uk-switcher uk-margin-medium" id="host-plan">
	<li aria-hidden="false" class="uk-active"><!-- This is Shared Host plan -->
	<ul class="pricing-grid three-up">
		<li class="pricing-column">
		<div class="pricing-title">
		<h3>Shared -Linux</h3>
		<i class="uk-icon-cloud"><img alt="" src="public/images/kernel.png"></i></div>

		<ul class="pricing-content">
			<li>Among Lowest Hosting Prices in India</li>
			<li>100% Data Protection</li>
			<li>24/7 Technical Support</li>
			<li>30 Days Money Back Guarantee</li>
		</ul>
		<div class="pricing-button">
		<h3><span class="dollar"> Starts at Rs.</span>145.00<br>
		<span class="permonth">/Month</span></h3>
		<a class="button medium price-btn" href="http://shop.cgwebservices.org/web-hosting/index.php">View Plans</a></div>
		</li>
		<li class="pricing-column">
		<div class="pricing-title">
		<h3>Shared -Windows</h3>
		<i class="uk-icon-cloud"><img alt="" src="public/images/windows.png"></i></div>

		<ul class="pricing-content">
			<li>Among Lowest Hosting Prices in India</li>
			<li>100% Data Protection</li>
			<li>24/7 Technical Support</li>
			<li>30 Days Money Back Guarantee</li>
		</ul>
		<div class="pricing-button">
		<h3><span class="dollar"> Starts at Rs.</span>282.00<br>
		<span class="permonth">/Month</span></h3>
		<a class="button medium price-btn" href="http://shop.cgwebservices.org/web-hosting/windows-hosting.php">View Plans</a></div>
		</li>
		<li class="pricing-column green-plan">
		<div class="pricing-title">
		<h3>Reseller</h3>
		<i class="uk-icon-cloud"><img alt="" src="public/images/reseller.png"></i></div>

		<ul class="pricing-content">
			<li>User Friendly Control Panel</li>
			<li>20 Websites</li>
			<li>24/7 Technical Support</li>
			<li>Instant Live Chat Support</li>
			<li>100% Data Protection</li>
		</ul>
		<div class="pricing-button">
		<h3><span class="dollar"> Starts at Rs.</span>732<br>
		<span class="permonth">/Month</span></h3>
		<a class="button medium price-btn" href="http://shop.cgwebservices.org/reseller-hosting.php">View Plans</a></div>
		</li>
		<li class="pricing-column">
		<div class="pricing-title">
		<h3>Unlimited</h3>
		<i class="uk-icon-cloud"><img alt="" src="public/images/unlimited.png"></i></div>

		<ul class="pricing-content">
			<li>Unlimited Disk Space</li>
			<li>Unlimited Bandwidth</li>
			<li>Unlimited Accounts</li>
			<li>100% Data Protection</li>
			<li>24/7 Technical Support</li>
		</ul>
		<div class="pricing-button">
		<h3><span class="dollar"> Starts at Rs.</span>3462<br>
		<span class="permonth">/Year</span></h3>
		<a class="button medium price-btn" href="http://shop.cgwebservices.org/reseller-hosting.php">View Plans</a></div>
		</li>
		
</ul>
</div>
</div>
</div>
</section>



<section class="uk-padding">
<div class="uk-container uk-container-center">
<div class="uk-grid">
<div class="uk-width-1-1 uk-text-center uk-margin-large-bottom">
<h1 class="uk-margin-large-bottom">Other Services</h1>

<div class="uk-grid uk-grid-divider">
<div class="uk-width-1-3 uk-width-medium-1-2 uk-width-small-1-1">
<h1 class="partner-title">SSL Certificate</h1>
<img alt="" class="partner-logo" src="public/images/sslcertificate.png">
<p class="text-width90">“SSL Certificates protect your customer's personal data including passwords, identity. Easiest way to increase your customer's confidence in your online business.”</p>
<a class="uk-button uk-button-small idz-button-outline uk-margin-top" href="http://shop.cgwebservices.org/digital-certificate">Learn More</a>

<p></p>
</div>

<div class="uk-width-1-3 uk-width-medium-1-2 uk-width-small-1-1">
<h1 class="partner-title">SiteLock Security</h1>
<img alt="" class="partner-logo" src="public/images/sitelock.png">
<p class="text-width90">“SiteLock monitors your website 24x7 for vulnerabilities and attacks, which means you can worry less about your website and more about your business.”</p>
<a class="uk-button uk-button-small idz-button-outline uk-margin-top" href="http://shop.cgwebservices.org/sitelock.php">Learn More</a>

<p></p>
</div>

<div class="uk-width-1-3 uk-hidden-medium uk-hidden-small">
<h1 class="partner-title">CODEGUARD Backup</h1>
<img alt="" class="partner-logo" src="public/images/codeguard.png">
<p class="text-width90">“CodeGuard works behind the scenes. Which means you can turn it on and sit back while CodeGuard takes regular backups of your data.”</p>
<a class="uk-button uk-button-small idz-button-outline uk-margin-top" href="http://shop.cgwebservices.org/codeguard.php">Learn More</a>

<p></p>
</div>
</div>

<hr class="uk-grid-divider uk-margin-remove uk-hidden-small">
<div class="uk-grid uk-grid-divider">
<div class="uk-width-1-3 uk-width-medium-1-2 uk-width-small-1-1">
<h1 class="partner-title">Business Email</h1>
<img alt="" class="serviceicons" src="public/images/businessemail.png">
<p class="text-width90">“Simple, Powerful Email for Small Businesses
Give your business a professional makeover with email@yourbrand.com”</p>
<a class="uk-button uk-button-small idz-button-outline uk-margin-top" href="http://shop.cgwebservices.org/business-email">Learn More</a>

<p></p>
</div>

<div class="uk-width-1-3 uk-width-medium-1-2 uk-width-small-1-1">
<h1 class="partner-title">Website Builder</h1>
<img alt="" class="serviceicons" src="public/images/websitebuilder.png">
<p class="text-width90">“Choose from 175 themes & 85,000 images<br>
Easy Editing with a Drag & Drop Interface<br>
Go Live Instantly - Publish your website in minutes”</p>
<a class="uk-button uk-button-small idz-button-outline uk-margin-top" href="http://shop.cgwebservices.org/website-design/index.php">Learn More</a>

<p></p>
</div>

<div class="uk-width-1-3 uk-hidden-medium uk-width-small-1-1">
<h1 class="partner-title">Bulk SMS</h1>
<img alt="" class="serviceicons" src="public/images/bulksms.png">
<p class="text-width90">"Marketing your brand around the World<br>Registering for your BulkSMS account is simple and easy and will only take a few moments.”</p>
<a class="uk-button uk-button-small idz-button-outline uk-margin-top" href="#">Learn More</a>

<p></p>
</div>
</div>
</div>
</div>
</div>
</section>

<footer>
<div class="uk-container uk-container-center footer-bg-img">
<div class="uk-grid">
<div class="uk-width-4-10 uk-width-small-1-1">
<div id="logo-footer"><img alt="CG Web Services" src="public/images/logo.png"></div>

<p>Online Marketing and Web Development.</p>

<div id="footer-social">
<ul>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
</ul>
</div>
</div>

<div class="uk-width-6-10">
<div class="uk-grid">
<div class="uk-width-1-3 uk-width-small-1-1 idz-margin-bottom-ml">
<h4>Company</h4>

<ul class="uk-list">
	<li><a href="#" target="_blank">Contact Us</a></li>
	<li><a href="#" target="_blank">Term of Service</a></li>
	<li><a href="#" target="_blank">Acceptable Use Policy</a></li>
	<li><a href="#" target="_blank">Refund Policy</a></li>
	<li><a href="#" target="_blank">Privacy Policy</a></li>
	<li><a href="http://blog.cgwebservices.org/" target="_blank">Company Blog</a></li>
</ul>
</div>

<div class="uk-width-1-3 uk-width-small-1-1 idz-margin-bottom-ml">
<h4>Support</h4>

<ul class="uk-list">
	<li><a href="#" target="_blank">FAQs</a></li>
</ul>
</div>
</div>
</div>
</div>

<hr>
<div class="uk-grid copyright-wrap">
<div class="uk-width-1-2 uk-width-medium-4-10 uk-width-small-1-1">
<p>© <script type="text/javascript">document.write(new Date().getFullYear());</script>. CG Web Services. All Rights Reserved.</p>
</div>

</div>
</div>
</footer>
<!-- Javascript -->
<script src="js/jquery.js"></script>
<script src="js/uikit.min.js"></script>
<!--------------------------------------->
	  <!--ul class="nav navbar-nav navbar-right">
        <li><a href="#">HOME</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul-->
      <!--form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form-->
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
		
       
		<!----------------------------------------------------------->
    </div>

    <!-- Scripts -->
<script>
			$(function() {
				var demo1 = $("#demo1").slippry({
					// transition: 'fade',
					// useCSS: true,
					// speed: 1000,
					// pause: 3000,
					// auto: true,
					// preload: 'visible',
					// autoHover: false
				});

				$('.stop').click(function () {
					demo1.stopAuto();
				});

				$('.start').click(function () {
					demo1.startAuto();
				});

				$('.prev').click(function () {
					demo1.goToPrevSlide();
					return false;
				});
				$('.next').click(function () {
					demo1.goToNextSlide();
					return false;
				});
				$('.reset').click(function () {
					demo1.destroySlider();
					return false;
				});
				$('.reload').click(function () {
					demo1.reloadSlider();
					return false;
				});
				$('.init').click(function () {
					demo1 = $("#demo1").slippry();
					return false;
				});
			});
		</script>
    <script src="{{ asset('public/js/app.js') }}"></script>
	<script src="{{ asset('public/js/uikit.js') }}"></script>
	<script src="{{ asset('public/js/slippry.min.js') }}"></script>
</body>
</html>
