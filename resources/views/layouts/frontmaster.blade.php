<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('FrontEnd/css/bootstrap.min.css')}}">
    <!-- MAIN CSS-->
    <link rel="stylesheet" href="{{asset('FrontEnd/css/main.css')}}">
    <!--my responsive-->
    <link rel="stylesheet" href="{{asset('FrontEnd/css/responsive.css')}}">
    <!--- FONT AWESOME -->
    <link rel="stylesheet" type="text/css" href="{{asset('FrontEnd/css/all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('FrontEnd/css/meanmenu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('FrontEnd/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('FrontEnd/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('FrontEnd/css/nice-select.css')}}">
    <!--- awl carousel -->
    <link rel="stylesheet" type="text/css" href="{{asset('FrontEnd/css/owl.carousel.min.css')}}">
    <title>@yield('title')</title>
</head>

<body>
<!-- Header Area -->
<div class="header-section">
    <div class="container position-relative">
        <div class="row">
            <div class="col-xl-5 col-md-12 my-xl-5 mb-0 my-sm-3  position-static ">
                <div class="main-menu d-none d-md-block">
                    <nav>
                        <ul>
                            <li><a href="#">Home <i class="fas fa-angle-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="#">Submenu item 1</a></li>
                                    <li><a href="#">Submenu item 1</a></li>
                                    <li><a href="#">Submenu item 1</a></li>
                                    <li><a href="#">Submenu item 1</a></li>
                                    <li><a href="#">Submenu item 1</a>
                                        <ul class="submenu">
                                            <li><a href="#">Submenu item 1</a></li>
                                            <li><a href="#">Submenu item 1</a></li>
                                            <li><a href="#">Submenu item 1</a></li>
                                            <li><a href="#">Submenu item 1</a></li>
                                            <li><a href="#">Submenu item 1</a>
                                                <ul class="submenu">
                                                    <li><a href="#">Submenu item 1</a></li>
                                                    <li><a href="#">Submenu item 1</a></li>
                                                    <li><a href="#">Submenu item 1</a></li>
                                                    <li><a href="#">Submenu item 1</a></li>
                                                    <li><a href="#">Submenu item 1</a> </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Feature <i class="fas fa-angle-down"></i></a></li>
                            <li><a href="#">Blogs</a>
                                <div class="mega-menu">
                                    <ul>
                                        <li class="mega-title"><a href="#">Mega menu Tilte</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                    </ul>
                                    <ul>
                                        <li class="mega-title"><a href="#">Mega menu Tilte</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                    </ul>
                                    <ul>
                                        <li class="mega-title"><a href="#">Mega menu Tilte</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="position-static"><a href="#">About Us</a>
                                <div class="mega-menu mega-full">
                                    <ul>
                                        <li class="mega-title"><a href="#">Mega menu Tilte</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                    </ul>
                                    <ul>
                                        <li class="mega-title"><a href="#">Mega menu Tilte</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                    </ul>
                                    <ul>
                                        <li class="mega-title"><a href="#">Mega menu Tilte</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                    </ul>
                                    <ul>
                                        <li class="mega-title"><a href="#">Mega menu Tilte</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                        <li><a href="#">Mega menu Item</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="mobile-menu d-md-none">
                    <nav id="mobile-menu-active">
                        <ul>
                            <li><a href="#">Home <i class="fas fa-angle-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="#">Submenu item 1</a></li>
                                    <li><a href="#">Submenu item 1</a></li>
                                    <li><a href="#">Submenu item 1</a></li>
                                    <li><a href="#">Submenu item 1</a></li>
                                    <li><a href="#">Submenu item 1</a>
                                        <ul class="submenu">
                                            <li><a href="#">Submenu item 1</a></li>
                                            <li><a href="#">Submenu item 1</a></li>
                                            <li><a href="#">Submenu item 1</a></li>
                                            <li><a href="#">Submenu item 1</a></li>
                                            <li><a href="#">Submenu item 1</a>
                                                <ul class="submenu">
                                                    <li><a href="#">Submenu item 1</a></li>
                                                    <li><a href="#">Submenu item 1</a></li>
                                                    <li><a href="#">Submenu item 1</a></li>
                                                    <li><a href="#">Submenu item 1</a></li>
                                                    <li><a href="#">Submenu item 1</a> </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Blogs</a>
                                <ul class="mega-menu">
                                    <li class="mega-title"><a href="#">Mega menu Tilte</a></li>
                                    <li><a href="#">Mega menu Item</a></li>
                                    <li><a href="#">Mega menu Item</a></li>
                                    <li><a href="#">Mega menu Item</a></li>
                                    <li><a href="#">Mega menu Item</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Submenu item 1</a> </li>
                            <li><a href="#">Submenu item 1</a> </li>
                            <li><a href="#">Submenu item 1</a> </li>
                            <li><a href="#">Submenu item 1</a> </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-sm-12 text-center mb-0  my-xl-5 ">
                <div class="">
                    <a href="index.html" class="text-center"><img width="175" height="80" src="{{asset('FrontEnd')}}/img/logo.JPG"
                                                                  alt=""></a>
                </div>
            </div>
            <div class="col-xl-5 col-md-8 col-sm-12 mb-0  my-xl-5 text-center text-md-right position-relative">
                <div class="header-right">
                    <ul>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="#"><i class="fas fa-heart"></i> (0)</a></li>
                        <li><a href="#">cart(3)</a>
                            <div class="card-hover p-3">
                                <table class="table table-dark table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="h-100">image</th>
                                        <th>name</th>
                                        <th>price</th>
                                        <th>Action</th>
                                    </tr>

                                    </thead>
                                    <tbody>


                                    <tr>
                                        <td> <img style="width:100%;height:65px" src="{{asset('FrontEnd')}}/img/card-itemp1.jpg"  alt=""></td>
                                        <td> <p>pant</p></td>
                                        <td>$4545<br>
                                            total: $ 564564
                                        </td>
                                        <td  class="position-relative">
                                            <a  class="d-inline position-absolute" href="" style="top:-23px;right:13px;"><i class="fas fa-trash-alt text-danger"></i></a>
                                            <form action="" method="post" class="mt-4">

                                                <div class="form-group">
                                                    <input class="w-100 form-control" type="Number" value="" min="1" name="product_quantity">
                                                    <input class="w-100" type="hidden" value="" name="product_id">

                                                    <label for="my-input">
                                                        <button type="submit" class="btn btn-outline-light mt-1">Update</button>
                                                    </label>
                                                </div>

                                            </form>
                                        </td>
                                    </tr>
                                    </tbody>

                                </table>
                                <div class="total-price clearfix">
                                    <span class="float-left total-left">Total:</span>
                                    <span class="float-right total-right">$ 45454</span>

                                </div>
                                <a href="" class="check-out-botton">Check out</a>

                            </div>

                        </li>
                        <li><a href="#"><i class="fas fa-search"></i></a>
                            <div class="search-box">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                    <button><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('content')





<!--Footer-section start-->
<footer>
    <div class="container">
        <div class="footer-area">
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-sm-5">
                    <div class="footer-widget">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">News & Stories</a></li>
                            <li><a href="#"> History</a></li>
                            <li><a href="#">Our Studio</a></li>
                            <li><a href="#">Showrooms</a></li>
                            <li><a href="#">Stockists</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-sm-5">
                    <div class="footer-widget">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">News & Stories</a></li>
                            <li><a href="#"> History</a></li>
                            <li><a href="#">Our Studio</a></li>
                            <li><a href="#">Showrooms</a></li>
                            <li><a href="#">Stockists</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 ">
                    <div class="footer-widget">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">News & Stories</a></li>
                            <li><a href="#"> History</a></li>
                            <li><a href="#">Our Studio</a></li>
                            <li><a href="#">Showrooms</a></li>
                            <li><a href="#">Stockists</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 ">
                    <div class="footer-widget">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">News & Stories</a></li>
                            <li><a href="#"> History</a></li>
                            <li><a href="#">Our Studio</a></li>
                            <li><a href="#">Showrooms</a></li>
                            <li><a href="#">Stockists</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-8 ">
                    <div class="footer-menu  d-flex align-items-center ">
                        <nav class="">
                            <ul>
                                <li><a href="#">About Us </a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Order Tracking</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-5 col-sm-4 ">
                    <div class="footer-icon d-flex justify-content-end align-items-center">
                        <span>Connect with us:</span>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-skype"></i></a>
                        <a href="#"><i class="fab fa-skype"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer-section End-->







<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('FrontEnd/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('FrontEnd/js/popper.min.js')}}"></script>
<script src="{{asset('FrontEnd/js/bootstrap.min.js')}}"></script>
<script src="{{asset('FrontEnd/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('FrontEnd/js/jquery.meanmenu.min.js')}}"></script>
<script src="{{asset('FrontEnd/js/slick.min.js')}}"></script>
<script src="{{asset('FrontEnd/js/jquery.nice-select.min.js')}}"></script>

<!-- My Js-->
<script src="{{asset('FrontEnd/js/main.js')}}"></script>
</body>

</html>


















