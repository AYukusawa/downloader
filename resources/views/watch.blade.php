<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Favicons -->
    <link rel="shortcut icon" href="#">
    <!-- Page Title -->
    <title>Listing &amp; Directory Website Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <!-- Simple line Icon -->
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Hover Effects -->
    <link rel="stylesheet" href="css/set1.css">
    <!-- Swipper Slider -->
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--============================= HEADER =============================-->
    <div class="dark-bg sticky-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html">Youtube Downloader</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-menu"></span>
            </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#call-us">
                                   Contact us
                                  </a>
                              </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!--//END HEADER -->
    <!--============================= BOOKING =============================-->
    <!--//END BOOKING -->
    <!--============================= RESERVE A SEAT =============================-->
    <!--//END RESERVE A SEAT -->
                            <div class="row d-flex justify-content-center">
                            <div class="col-md-10">
                                <form class="form-wrap mt-4" method="POST" action="{{route('download')}}">
                                    {{csrf_field()}}
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon3">https://www.youtube.com/watch?v=</span>
                                          <input type="text" name="video" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                        </div>
                                        <button type="submit" class="btn-form"><span class="icon-magnifier search-icon"></span>Download<i class="pe-7s-angle-right"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>
                        <br>
    <!--============================= BOOKING DETAILS =============================-->

    <section class="light-bg booking-details_wrap">
        <div class="container">
            <div class="row">
                                <div class="col-md-4 responsive-wrap">
                    <div class="contact-info">
                        <img src="{{$result->image['medium_quality']}}" class="img-fluid" alt="#">
                        <div class="address">
                            <span class="icon-location-pin"></span>
                            <p style="font-weight:bold;"> {{$result->title}}</p>
                        </div>
                        <div class="address">
                            <span class="icon-user"></span>
                            <p>{{$result->author}}</p>
                        </div>
                        <div class="address">
                            <span class="icon-eyeglass"></span>
                            <p>{{$result->views}}</p>
                        </div>
                        <div class="address">
                            <span class="icon-pencil"></span>
                            <p>{{$result->rating}}  points <br>
                            
                        </div>
                      </div>
                </div>
                <div class="col-md-8 responsive-wrap">
                    <div class="booking-checkbox_wrap">
                        <div class="booking-checkbox">
                       <table class="table table-bordered text-center">
                          <thead class="thead-dark" style="text-align:center;">
                            <tr>
                              <th style="text-align:center" scope="col">Screen</th>
                              <th style="text-align:center" scope="col">Quality</th>
                              <th style="text-align:center" scope="col">Format</th>
                              <th style="text-align:center" scope="col">Download</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($result->full_formats as $results)

                                @if($i == 1)
                                    <tr>
                                      <th scope="row" style="text-align:center"><span class="icon-screen-desktop" ></span></th>
                                      <td>720P</td>
                                      <td>mp4</td>
                                      <td><a href="{{$results->url}}" target="_blank" class="btn btn-success">Download</a></td>
                                    </tr>
                                @endif
                                @if($i == 2)
                                    <tr>
                                      <th style="text-align:center" scope="row"><span class="icon-screen-desktop" ></th>
                                      <td>Medium</td>
                                      <td>webm</td>
                                      <td><a href="{{$results->url}}" target="_blank" class="btn btn-info">Download</a></td>
                                    </tr>
                                @endif
                                @if($i == 3)
                                    <tr>
                                      <th style="text-align:center" scope="row"><span class="icon-screen-desktop" ></th>
                                      <td>Medium</td>
                                      <td>mp4</td>
                                      <td><a href="{{$results->url}}" target="_blank" class="btn btn-info">Download</a></td>
                                    </tr>

                                @endif
                                @if($i == 4)
                                        <tr>
                                          <th style="text-align:center" scope="row"><span class="icon-screen-smartphone" ></th>
                                          <td>Small</td>
                                          <td>3gpp</td>
                                          <td><a href="{{$results->url}}"  target="_blank" class="btn btn-warning">Download</a></td>
                                        </tr>
                                @endif
                                @if($i == 5)
                                        <tr>
                                          <th style="text-align:center" scope="row"><span class="icon-screen-smartphone" ></th>
                                          <td>Small</td>
                                          <td>3gpp</td>
                                          <td><a href="{{$results->url}}" target="_blank" class="btn btn-warning">Download</a></td>
                                        </tr>
                                @endif


                            @php
                                $i++;
                            @endphp

                            @endforeach
                            @foreach($result->adaptive_formats as $get)
                                @if($get->type == 'audio/mp4; codecs="mp4a.40.2"')
                                        
                                    <tr>
                                          <th style="text-align:center" scope="row"><span class="icon-volume-1" ></th>
                                          <td>Audio</td>
                                          <td>mp4</td>
                                          <td><a href="{{$get->url}}" target="_blank" class="btn btn-danger">Download</a></td>
                                    </tr>
                                 @endif   

                            @endforeach


                            

                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//END BOOKING DETAILS -->
    <!--============================= FOOTER =============================-->
    <footer class="main-block dark-bg" id="call-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright &copy; 2018 Listing. All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <ul>
                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                            <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                            <li><a href="#"><span class="ti-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//END FOOTER -->




    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Magnific popup JS -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- Swipper Slider JS -->
    <script src="js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        if ($('.image-link').length) {
            $('.image-link').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
        if ($('.image-link2').length) {
            $('.image-link2').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
    </script>
</body>

</html>
