	<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		//$human = intval($_POST['human']);
		$from = 'ravi@ngo.co'; 
		$to = 'ravi@ngo.co'; 
		$subject = 'Claritiz Innovations Contact';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		//if ($human !== 5) {
		//	$errHuman = 'Your anti-spam is incorrect';
		//}
// If there are no errors, send the email
// if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
if (!$errName && !$errEmail && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! We will be in touch shortly!</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Claritiz Innovations | Contact us</title>
	<meta name="description" content="User Experience Consulting for Social, Mobile and Analytics">
	<meta name="keywords" content="Claritiz, Innovation workshops, Idea workshops, User research, Market Validation, Mobile Applications, UI Technologies, design factors, user experience, technologies, outsourced, user centered design, usability, UCD, product, development, offshore, india, bangalore, coimbatore, web, products, iOS, Android, iPhone, iPad, " />
	<meta name="author" content="Claritiz">
    	

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700)' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" class="index">
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MQK8MR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MQK8MR');</script>
<!-- End Google Tag Manager -->

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
				<img src="img/logo-dark.png" alt="" class="shrink-logo-img">
				<img src="img/logo.png" alt="" class="logo-img"></a>
				
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="index.php"></a>
                    </li>
					<li>
                        <a class="page-scroll" href="index.php">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="about.php">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="services.php">Services</a>
                    </li>
                    <!--<li class="dropdown">
                        <a href="ux-research.html" class="dropdown-toggle"  data-toggle="dropdown" data-hover="dropdown" data-delay="1000">Services  <span class="caret"></span></a>
						 <ul class="dropdown-menu">
    <li><a href="#">User Experience Research</a></li>
    <li><a href="#">Product Envision</a></li>
    <li><a href="#">Front End Development</a></li>
	 <li><a href="#">Moiblity Products</a></li>
	  <li><a href="#">Analytics & Optimization</a></li>
    
  </ul>
                    </li>-->
                    <li>
                        <a class="page-scroll" href="ourwork.php">Our Work</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contact.php">Contact</a>
                    </li>
              
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header class="hdr-bg5 inner-header">
        <div class="container">
            <div class="intro-text">
                <h1>Get In Touch</h1>
				<h4>For a free 1x1 meeting (or Skype) to explore how we could be of help <br> or Join for one of our free Innovation workshops!
</h4>
<div class="form-group">
						<h2>
							<?php echo $result; ?>	
						</h2>
					</div>
            </div>
        </div>
    </header>

	
	 </div>
    

    <div class="section white-bg bg-lg">
   <div class="container">
   <div class="row">
   <div class="col-md-6">
   
   
   <form class="contactform" role="form" method="post" action="contact.php">
   <h3 class="text-primary">We would love to hear from you 
   
   
					
					</h3>
			<div class="row">
                                <div class="col-md-6 col-sm-6"><p>
								<input type="text" id="name" name="name" placeholder="Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
	
				</p>
                                </div>
								<div class="col-md-6 col-sm-6"><p>
								<input type="text" id="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
	
				</p>
                                </div>
                                
                            </div>
							<p>
							<textarea rows="2" name="message" placeholder="Message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?></p>
							<p>
							<input id="submit" name="submit" type="submit" value="Send" class="btn-system btn-large btn submit-button">
								
							</a></p>
							
							
					
						</form>

			
			
   
   </div>
   <div class="col-md-6 ">
   <div class="contact-details"><div class="col-md-6">
   <h4 class="text-primary">Bangalore</h4><p>E803, Concorde Midway City<br>Electronic City<br>Bangalore - 560100<br><a class="call" href="callto:918095063070">+ 91 809-506-3070 </a><br><a class="call" href="callto:918041217152">+91 804-121-7152 </a></p>
	</div>
   <div class="col-md-6">
  <h4 class="text-primary">Coimbatore</h4><p>115, Venkitasamy Road<br>R.S.Puram<br>Coimbatore - 641002<br><a class="call" href="callto:914224274105">+ 91 422-427-4510 </a></p>
							<ul class="social-nav">
                                <li><a class="facebook" href="https://www.facebook.com/claritiz"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="https://twitter.com/claritiz"><i class="fa fa-twitter"></i></a></li>
								<li><a class="google" href="https://plus.google.com/107282691469982219512/about"><i class="fa fa-google-plus"></i></a></li>
								<li><a class="linkdin" href="https://in.linkedin.com/in/rshank"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
   </div>
   </div>
   </div>
   </div>
   </div>
   </div>
      <div class="section white-bg contact-map">
   <div class="container">
   <div class="row">
   <div class="col-md-12">
  <div id="map"></div>
   
   </div>
    </div>
   </div>
   </div>
   </div>

    <!-- Start Footer -->
    <footer class="footer-bg">
      <div class="container">
        <div class="row">
          <!-- Start Contact Widget -->
    
		    <div class="col-md-5">
            <div class="footer-widget">
              <h4>Claritiz Innovations<span class="head-line"></span></h4>
             <p>We are a strategic design company. We work alongside our clients to innovate offerings, tap on business potential, and benefit on enhanced productivity.</p> 
              <ul>
			  
                <li> <a class="call" href="callto:918095063070"><span><i class="fa fa-phone"></i></span> + 91 809-506-3070 </a></li>
                <li> <a class="call" href="mailto:ravi@claritiz.com"><span><i class="fa fa-envelope"></i></span> ravi@claritiz.com</a></li>
               
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
		        <div class="col-md-4">
            <div class="footer-widget">
              <h4>Company Info<span class="head-line"></span></h4>
              <div class="row">
			  <div class="col-md-4">
			  <ul>
			    <li><a href="index.php"><i class="fa fa-angle-right"></i> Home</a></li>
				<li><a href="about.php"><i class="fa fa-angle-right"></i> About us</a></li>
				 <li><a href="services.php"><i class="fa fa-angle-right"></i> Services</a></li>
				 
				  <li><a href="ourwork.php"><i class="fa fa-angle-right"></i> Our Work</a></li>
				 <li><a href="contact.php"><i class="fa fa-angle-right"></i> Contact</a></li>
				
				 </ul>
			  </div>
			  <div class="col-md-8">
			   <ul>
			   <!--<li><a href="userresearch.html"><i class="fa fa-angle-right"></i> User Research</a></li>
			    <li><a href="productenvision.html"><i class="fa fa-angle-right"></i> Product Envision</a></li>
				 <li><a href="frontenddev.html"><i class="fa fa-angle-right"></i> Front End Development</a></li>
				 <li><a href="mobility.html"><i class="fa fa-angle-right"></i> Mobility Products</a></li>
				 <li><a href="optimization.html"><i class="fa fa-angle-right"></i> Analytics & Optimization</a></li>-->
                 
                 <li><a href=""><i class="fa fa-angle-right"></i> User Research</a></li>
			    <li><a href=""><i class="fa fa-angle-right"></i> Product Envision</a></li>
				 <li><a href=""><i class="fa fa-angle-right"></i> Front End Development</a></li>
				 <li><a href=""><i class="fa fa-angle-right"></i> Mobility Products</a></li>
				 <li><a href=""><i class="fa fa-angle-right"></i> Analytics & Optimization</a></li>
				
              </ul>
			  </div>
			  </div>
              
            </div>
			
          </div>

		<div class="col-md-3">
		 <div class="footer-widget social-widget pull-right">
              <h4>Follow Us<span class="head-line"></span></h4>
              <ul class="social-icons">
                <li><a class="facebook" href="https://www.facebook.com/claritiz"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="https://twitter.com/claritiz"><i class="fa fa-twitter"></i></a></li>
                <li><a class="google" href="https://plus.google.com/107282691469982219512/about"><i class="fa fa-google-plus"></i></a></li>
                <li><a class="linkdin" href="https://in.linkedin.com/in/rshank"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
		</div>
          <!-- .col-md-3 -->
          <!-- End Subscribe & Social Links Widget -->
          <!-- End Contact Widget -->


        </div>
        <!-- .row -->

        <!-- Start Copyright -->
        <div class="copyright-section">
          <div class="row">
            <div class="col-md-6"><p>&copy; 2015 Claritiz Innovations Pvt Lts; All Rights Reserved </p></div>
          </div>
        </div>
        <!-- End Copyright -->

      </div>
    </footer>
    <!-- End Footer -->

    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>
	
	<!--$('.contactform').each(function () {
    var $this = $(this);
    var field = $this.find('[type=text], [type=file], [type=email], [type=password], textarea');
    var span = $(this).find('> span');
    var onBlur = function () {
        if ($.trim(field.val()) == '') {
            field.val('');
            span.fadeIn(100);
        } else {
            if (field.prop('type') == 'file') {
                span.text(field.val());
            } else {
                span.fadeTo(100, 0);
            }
        }
    };
    field.focus(function () {
        span.fadeOut(100);
    }).blur(onBlur);
    onBlur();
});-->


</body>

</html>