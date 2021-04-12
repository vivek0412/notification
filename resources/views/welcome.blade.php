<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Notification ststem</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

<style type="text/css">
a:hover,a:focus{
    text-decoration: none;
    outline: none;
}
.vertical-tab{
    font-family: 'Hind', sans-serif;
    display: table;
}
.vertical-tab .nav-tabs{
    display: table-cell;
    width: 28%;
    min-width: 28%;
    vertical-align: top;
    border: none;
}
.vertical-tab .nav-tabs li{
   float: none;
   vertical-align: top;
}
.vertical-tab .nav-tabs li a{
    color: #fff;
    background: linear-gradient(to right, #141E30,#243B55);
    font-size: 18px;
    font-weight: 700;
    letter-spacing: 1px;
    text-align: center;
    text-transform: uppercase;
    padding: 13px 12px 10px;
    margin: 0 9px 9px 0;
    border-radius: 0;
    border: none;
    display: block;
    overflow: hidden;
    position: relative;
    z-index: 1;
    transition: all 0.1s ease;
}
.vertical-tab .nav-tabs li a:hover,
.vertical-tab .nav-tabs li.active a,
.vertical-tab .nav-tabs li.active a:hover{
    color: #fff;
    background: linear-gradient(to right, #141E30,#243B55);
    border: none;
    text-shadow: 0 0 5px #333;
}
.vertical-tab .nav-tabs li a:before,
.vertical-tab .nav-tabs li a:after{
    content: '';
    background: linear-gradient(to right,#00F260,#0575E6);
    height: 100%;
    width: 100%;
    position: absolute;
    left: 0;
    top: -100%;
    z-index: -1;
    transition: all 0.3s;
}
.vertical-tab .nav-tabs li a:after{ top: 100%; }
.vertical-tab .nav-tabs li a:hover:before,
.vertical-tab .nav-tabs li.active a:before,
.vertical-tab .nav-tabs li.active a:hover:before{
    top: 0;
    opacity: 0;
}
.vertical-tab .nav-tabs li a:hover:after,
.vertical-tab .nav-tabs li.active a:after,
.vertical-tab .nav-tabs li.active a:hover:after{
    top: 0;
    transition-delay: 0.1s;
}
.vertical-tab .tab-content{
    color: #fff;
    background: linear-gradient(to right, #141E30,#243B55);
    font-size: 14px;
    letter-spacing: 1px;
    line-height: 25px;
    text-shadow: 0 0 3px #333;
    padding: 20px 25px 10px;
    margin-top: 10px;
    border-radius: 0 50px 70px 0;
    display: table-cell;
    position: relative;
}
.vertical-tab .tab-content h3{
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin: 0 0 7px 0;
}
@media only screen and (max-width: 479px){
    .vertical-tab .nav-tabs{
        width: 100%;
        display: block;
        border: none;
    }
    .vertical-tab .nav-tabs li a{ margin: 0 0 10px; }
    .vertical-tab .tab-content{
        padding: 25px 20px;
        border-radius: 0;
        display: block;
    }
    .vertical-tab .tab-content h3{ font-size: 18px; }
}

	

</style>




</head>
<body>
	<!--header section start -->
	<div class="header_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
				</div>
				<div class="col-sm-6">
					<div class="menu-area">
                    <nav class="navbar navbar-expand-lg ">
                        <!-- <a class="navbar-brand" href="#">Menu</a> -->
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                               <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a> </li>
                               <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a></li>
                               <li class="nav-item">
                                <a class="nav-link" href="client.html">Client</a></li>
                               <li class="#" href="#">
      	                        <a class="nav-link" href="blog.html">Blog</a></li>
                               <li class="nav-item" href="#">
      	                        <a class="nav-link" href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
          </div>
				</div>
				<div class="col-sm-4">
            <ul class="top_button_section">

            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
               <li><a class="login-bt active" href="{{ route('login') }}">Login</a></li>
               @if (Route::has('register'))
               <li><a class="login-bt" href="{{ route('register') }}">Register</a></li>
               @endif
                    @endauth
                </div>
            @endif
            </ul>

					</div>
			</div>

    <div class="row">
      <div class="banner_section layout_padding">
      <section>
         <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                    <div class="container">
                     <div class="row marginii">
                        <div class="col-md-5 col-sm-12">
                           <div class="carousel-sporrt_text ">
                              <h2 class="banner_taital">Notification System</h2>
                    <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                    <div class="ads_bt"><a href="#">Get Start</a></div>
                    <div class="contact_bt"><a href="#">Contact Us</a></div>
                           </div>
                        </div>
                        <div class="col-md-7 col-sm-12">
                           <div class="img-box">
                              <figure><img src="images/banner-img1.png" style="max-width: 100%;"/></figure>
                           </div>
                        </div>
                    </div>
                  </div>
               </div>
               <div class="carousel-item">
                    <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-sporrt_text ">
                              <h2 class="banner_taital">Notification System</h2>
                    <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                    <div class="ads_bt"><a href="#">Ads Now</a></div>
                    <div class="contact_bt"><a href="#">Contact Us</a></div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="images/banner-img1.png" style="max-width: 100%;"/></figure>
                           </div>
                        </div>
                    </div>
                  </div>
               </div>
               <div class="carousel-item">
                    <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-sporrt_text ">
                              <h1 class="banner_taital">Notification System</h1>
                    <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                    <div class="ads_bt"><a href="#">Ads Now</a></div>
                    <div class="contact_bt"><a href="#">Contact Us</a></div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="images/banner-img1.png" style="max-width: 100%;"/></figure>
                           </div>
                        </div>
                    </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
    </div>
    </div>

		</div>
        <!--header section end -->
        
		</div>
	</div>
    <!--banner section end -->
	<!--about section start -->
    <div class="about_section layout_padding">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6">
    				<div class="tablet"><img src="images/tablet-img.png"></div>
    			</div>
    			<div class="col-md-6">
    				<div class="about_taital">
    					<div class="about_text">OUR <span style="color: #c6610f;">SYSTEM</span></div>
    					<p class="dolor_text"></p>
    					<div class="read_more"><a href="#">view more</a></div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="about_section_2 ">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12">
    				<div class="classified_text">Everything You’re Looking For <span style="color: #c6610f;">Looking For</span></div>
    			</div>	
    		</div>
    		<div class="row front">
    			<div class="col-md-2">
    				<div class="about_img"><img src="images/img-1.png"></div>
    			</div>
    			<div class="col-md-10">
    				<h1 class="fron_text"> Lorem</h1>
    				<p class="using_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, rerum nostrum corporis, iure nobis blanditiis minus sunt quibusdam eum consequuntur reprehenderit modi dolorum ratione ea? Magni non distinctio quasi tempora.</p>
    			</div>
    		</div>
    		<div class="row front">
    			<div class="col-md-2">
    				<div class="about_img"><img src="images/img-1.png"></div>
    			</div>
    			<div class="col-md-10">
    				<h1 class="fron_text"> Lorem</h1>
    				<p class="using_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, rerum nostrum corporis, iure nobis blanditiis minus sunt quibusdam eum consequuntur reprehenderit modi dolorum ratione ea? Magni non distinctio quasi tempora.</p>
    			</div>
    			<div class="red_bt"><a href="#">Read More</a></div>
    		</div>
    	</div>
    </div>
	<!--about section end -->
	<!--client section start -->
<div>


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="vertical-tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Section 1</a></li>
                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Section 2</a></li>
                    <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab">Section 3</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                        <h3>Section 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius, mi eros viverra massa.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                        <h3>Section 2</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius, mi eros viverra massa.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section3">
                        <h3>Section 3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius, mi eros viverra massa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
	<!--client section end -->
	<!--footer section start -->
	<div class="footer_section layout_padding">
		<div class="container">
			<div class="row">
			    <div class="col-sm-3">
				    <div class="footer_contact">Contact Us</div>
			    </div>
			    <div class="col-sm-3">
				    <div class="location_text"><img src="images/map-icon.png"><span style="padding-left: 10px;">Locations</span></div>
			    </div>
			    <div class="col-sm-3">
			    	<div class="location_text"><img src="images/call-icon.png"><span style="padding-left: 10px;">Locations</span></div>
			    </div>
			    <div class="col-sm-3">
			    	<div class="location_text"><img src="images/mail-icon.png"><span style="padding-left: 10px;">Locations</span></div>
			    </div>
		    </div>
		    <div class="enput_bt">
		    	<div class="row">
		    		<div class="col-md-6">
		    			<div class="input_main">
                       <div class="container">
                          <form action="/action_page.php">
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="NAME" name="Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="EMAIL" name="Email">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="PHONE NUMBER" name="Email">
                            </div>
                            <form action="/action_page.php">
                                <div class="form-group">
                                  <textarea class="massage-bt" placeholder="MASSAGE" rows="5" id="comment" name="text"></textarea>
                                </div>
                            </form>
                          </form>
                       </div> 
                       <div class="send_bt_main">
                       	<div class="left">
                       		<div class="send_bt"><a href="#">SEND</a></div>
                       	</div>
                       	<div class="right">
                       		<div class="social_icon">
                       			<ul>
                       				<li><a href="#"><img src="images/fb-icon.png"></a></li>
                       				<li><a href="#"><img src="images/twitter-icon.png"></a></li>
                       				<li><a href="#"><img src="images/in-icon.png"></a></li>
                       				<li><a href="#"><img src="images/instagram-icon.png"></a></li>
                       			</ul>
                       		</div>
                       	</div>
                       </div>
                    </div>
		    		</div>
		    		<div class="col-md-6">
		    			<div class="map_section">
		                    <div class="row">
			            <div class="col-sm-12">
				            <div class="full map_section">
                               <div id="map"></div>
                            </div>
			            </div>
		            </div>
	                 </div>
		    			<h1 class="newsletter_text">Newsletter</h1>
		    			<div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="ENTER YOUR MAIL" aria-label="Recipient's username" aria-describedby="basic-addon2">
                       <div class="input-group-append">
                       <span class="input-group-text" id="basic-addon2">SUBSCRIBE</span>
                       </div>
                       </div>
		    		</div>
		    	</div>
		    </div>
		    <div class="copyright_section">
		    	<p class="copyright_text">Copyright 2019 All Right Reserved By.<a href="https://html.design"> Free  html Templates</p>
		    </div>
		</div>
	</div>
	<!--footer section end -->

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         </script>	


         <script>
      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: {lat: 40.645037, lng: -73.880224},
          });

        var image = 'images/location_point.png';
          var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
          });
        }
        </script>
        <!-- google map js -->
          
          <!-- end google map js -->
</body>
</html>