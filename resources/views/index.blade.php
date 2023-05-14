<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pegadaian</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('assets/image/fevicon.png')}}" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('assets/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.html"><img src="{{asset('assets/images/logo.png')}}"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_bt">
                        <ul>
                           <li><a href="{{route('login')}}"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Login</a></li>
                           <li><a href="{{route('login')}}"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </form>
               </div>
            </nav>
         </div>
         <!-- banner section start --> 
         <div class="banner_section layout_padding">
            <div class="container-fluid">
               <div id="banner_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">Quick & Easy Process with best Atema</h1>
                                 <p class="banner_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet turpis ut odio congue eleifend. Cras pretium mattis sodales.</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_img"><img src="{{asset('assets/images/banner-img.png')}}"></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">Quick & Easy Process with best Atema</h1>
                                 <p class="banner_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet turpis ut odio congue eleifend. Cras pretium mattis sodales.</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_img"><img src="{{asset('assets/images/banner-img.png')}}"></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">Quick & Easy Process with best Atema</h1>
                                 <p class="banner_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet turpis ut odio congue eleifend. Cras pretium mattis sodales.</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_img"><img src="{{asset('assets/images/banner-img.png')}}"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                  <i class="fa fa-arrow-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- box section start -->
      <div class="container">
         <div class="box_section">
            <div class="online_box">
               <div class="online_box_left">
                  <div class="online_box_main">
                     <div class="box_left">
                        <div class="right_arrow"><i class="fa fa-arrow-right"></i></div>
                     </div>
                     <div class="box_right">
                        <p class="book_text">500+</p>
                        <h4 class="appoinment_text">Visitors</h4>
                     </div>
                  </div>
               </div>
               <div class="online_box_left active">
                  <div class="online_box_main">
                     <div class="box_left">
                        <div class="right_arrow"><i class="fa fa-arrow-right"></i></div>
                     </div>
                     <div class="box_right">
                        <p class="book_text active">95%</p>
                        <h4 class="appoinment_text active">Liked</h4>
                     </div>
                  </div>
               </div>
               <div class="online_box_left active">
                  <div class="online_box_main">
                     <div class="box_left">
                        <div class="right_arrow"><i class="fa fa-arrow-right"></i></div>
                     </div>
                     <div class="box_right">
                        <p class="book_text active">440+</p>
                        <h4 class="appoinment_text active">Propose</h4>
                     </div>
                  </div>
               </div>
               <div class="online_box_left">
                  <div class="online_box_main">
                     <div class="box_left">
                        <div class="right_arrow"><i class="fa fa-arrow-right"></i></div>
                     </div>
                     <div class="box_right">
                        <p class="book_text">350+</p>
                        <h4 class="appoinment_text">Reviews</h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- box section end -->
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="service_box">
                                 <div class="house_icon">
                                    <img src="{{asset('assets/images/icon-1.png')}}" class="image_1">
                                    <img src="{{asset('assets/images/icon-4.png')}}" class="image_2">
                                 </div>
                                 <h3 class="corporate_text">Corporate Law</h3>
                                 <p class="chunks_text">chunks as necessary, making this the first true generator on the Internet. It uses a dictionary </p>
                                 <div class="readmore_button"><a href="#">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="service_box active">
                                 <div class="house_icon">
                                    <img src="{{asset('assets/images/icon-5.png')}}" class="image_1">
                                    <img src="{{asset('assets/images/icon-5.png')}}" class="image_2">
                                 </div>
                                 <h3 class="corporate_text">Employments Law</h3>
                                 <p class="chunks_text">chunks as necessary, making this the first true generator on the Internet. It uses a dictionary </p>
                                 <div class="readmore_button active"><a href="#">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="service_box">
                                 <div class="house_icon">
                                    <img src="{{asset('assets/images/icon-3.png')}}" class="image_1">
                                    <img src="{{asset('assets/images/icon-6.png')}}" class="image_2">
                                 </div>
                                 <h3 class="corporate_text">International Law</h3>
                                 <p class="chunks_text">chunks as necessary, making this the first true generator on the Internet. It uses a dictionary </p>
                                 <div class="readmore_button"><a href="#">Read More</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="service_box">
                                 <div class="house_icon">
                                    <img src="{{asset('assets/images/icon-1.png')}}" class="image_1">
                                    <img src="{{asset('assets/images/icon-4.png')}}" class="image_2">
                                 </div>
                                 <h3 class="corporate_text">Corporate Law</h3>
                                 <p class="chunks_text">chunks as necessary, making this the first true generator on the Internet. It uses a dictionary </p>
                                 <div class="readmore_button"><a href="#">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="service_box active">
                                 <div class="house_icon">
                                    <img src="{{asset('assets/images/icon-5.png')}}" class="image_1">
                                    <img src="{{asset('assets/images/icon-5.png')}}" class="image_2">
                                 </div>
                                 <h3 class="corporate_text">Employments Law</h3>
                                 <p class="chunks_text">chunks as necessary, making this the first true generator on the Internet. It uses a dictionary </p>
                                 <div class="readmore_button active"><a href="#">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="service_box">
                                 <div class="house_icon">
                                    <img src="{{asset('assets/images/icon-3.png')}}" class="image_1">
                                    <img src="{{asset('assets/images/icon-6.png')}}" class="image_2">
                                 </div>
                                 <h3 class="corporate_text">International Law</h3>
                                 <p class="chunks_text">chunks as necessary, making this the first true generator on the Internet. It uses a dictionary </p>
                                 <div class="readmore_button"><a href="#">Read More</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               {{-- <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right"></i> --}}
               </a>
            </div>
         </div>
      </div>
      <!-- services section end -->
      <!-- studies section start -->
      <div class="studies_section layout_padding">
         <div class="container">
            <div class="row">
            </div>
            <div class="studies_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="hover01 column">
                        <figure><img src="{{asset('assets/images/service-img1.png')}}"></figure>
                     </div>
                     <div class="studies_box">
                        <h3 class="introduction_text">Emas</h3>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="hover01 column">
                        <figure><img src="{{asset('assets/images/service-img2.png')}}"></figure>
                     </div>
                     <div class="studies_box">
                        <h3 class="introduction_text">Berlian</h3>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="hover01 column">
                        <figure><img src="{{asset('assets/images/service-img3.png')}}"></figure>
                     </div>
                     <div class="studies_box">
                        <h3 class="introduction_text">Rumah</h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- studies section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital">Start Pawning Your Stuff</h1>
               </div>
            </div>
            @if ($errors->any())
            <ul style="width: 100%; background: red; padding: 10px">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
            {{--menampilkan notif berhasil tambah data--}}
            @if (Session::get('success'))
            <div style="width: 100%; background: pink; padding: 10px">
                {{ Session::get('success') }}
            </div>
            @endif
                        <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                           @csrf
                           <input type="text" class="mail_text" placeholder="Name" name="name">
                           <input type="text" class="mail_text" placeholder="Email" name="email">
                           <input type="text" class="mail_text" placeholder="NIK" name="nik">
                           <input type="text" class="mail_text" placeholder="Age" name="age">
                           <input type="text" class="mail_text" placeholder="Phone Number" name="no_telp"> 
                           <input type="text" class="mail_text" placeholder="Item" name="item">
                           <div class="input-card">
                              <label for="">Item Photo</label>
                              <input type="file" name="foto">
                          </div>
                           <button type="submit" class="send_bt active">Send Data</button>
                        </form>
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
               <div class="col-md-12">
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="footer_logo">
                  <a href="indexz.html">
                     <img src="{{asset('assets/images/logo.png')}}">
               </div>
               <div class="social_icon">
               <ul>
               <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
               </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">Copyright 2023</a></p>
         </div>
      </div>
      <!-- copyright section end -->
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
   </body>
</html>