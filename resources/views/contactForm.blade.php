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
      <title>Contact</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="tempcss/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="tempcss/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="tempcss/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="tempcss/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="tempcss/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
   </head>
   <body>
      <!-- header section start -->
      
      <div class="header_section">
         <div class="container-fluid">
         @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="logo" href="#"><img src="tempcss/images/logoo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="{{url('index')}}">Home</a>
                     </li>
                     
                     <li class="nav-item">
                        <a class="nav-link"  href="{{ route('userproducts.index') }}">Product</a>
                     </li>
                     
                     <li class="nav-item ">
                        <a class="nav-link" href="{{ url('contact-uss')}}">Contact</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_menu">
                        <ul>
                           <li><a href="#">Login</a></li>
                           <li><a href="#"><img src="tempcss/images/user-icon.png"></a></li>
                           <li><a href="#"><img src="tempcss/images/trolly-icon.png"></a></li>
                           <li><a href="#"><img src="tempcss/images/search-icon.png"></a></li>
                        </ul>
                     </div>
                  </form>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <h1 class="contact_taital">Contact Us</h1>
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="image_7"><img src="tempcss/images/Muchlovelab.png" height="280px" width="550px"></div>
                  </div>
                  <div class="col-md-8">
                     <div class="mail_section_1">
                        <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
                            {{ csrf_field() }}
                            <input type="text" class="mail_text" placeholder="Your Name" name="name">
                            <input type="text" class="mail_text" placeholder="Email" name="email">
                            <input type="text" class="mail_text" placeholder="Phone Number" name="phone">
                            
                            <input type="text" class="mail_text" placeholder="subject" name="subject">
                            <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="message"></textarea>
                            <button type="submit" class="btn btn-primary">
					        Submit
				            </button>
                        </from>  
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6">
                  <div class="location_icon">
                     <ul>
                        <li><a href="#"><img src="tempcss/images/map-icon.png"></a></li>
                        <li><a href="#"><img src="tempcss/images/mail-icon.png"></a></li>
                        <li><a href="#"><img src="tempcss/images/call-icon.png"></a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="mail_box">
                     <textarea class="enter_email_text" placeholder="Enter Your Email" rows="5" id="comment" name="Message"></textarea>
                     <div class="subscribe_bt_1"><a href="#">Subscribe</a></div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="social_icon">
                     <ul>
                        <li><a href="#"><img src="tempcss/images/fb-icon.png"></a></li>
                        <li><a href="#"><img src="tempcss/images/twitter-icon.png"></a></li>
                        <li><a href="#"><img src="tempcss/images/linkedin-icon.png"></a></li>
                        <li><a href="#"><img src="tempcss/images/instagram-icon.png"></a></li>
                        <li><a href="#"><img src="tempcss/images/youtub-icon.png"></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3 col-md-6">
                     <h3 class="company_text">Product</h3>
                     <p class="dolor_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, </p>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <h3 class="company_text">Shop</h3>
                     <p class="dolor_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, </p>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <h3 class="company_text">Company</h3>
                     <p class="dolor_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, </p>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <h3 class="company_text">MY ACCOUNT</h3>
                     <p class="dolor_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2020 All Rights Reserved.<a href="https://html.design"> Free html Templates</a></p>
         </div>
      </div>
      <!-- copyright section end  -->
      <!-- Javascript files-->
      <script src="tempcss/js/jquery.min.js"></script>
      <script src="tempcss/js/popper.min.js"></script>
      <script src="tempcss/js/bootstrap.bundle.min.js"></script>
      <script src="tempcss/js/jquery-3.0.0.min.js"></script>
      <script src="tempcss/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="tempcss/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="tempcss/js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <!-- owl carousel -->
   </body>
</html>