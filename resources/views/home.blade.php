<!DOCTYPE html>
<html lang="en">

<head>
    <title>Molton </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <!-- Font -->
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:400,600') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/beyond_the_mountains-webfont.css') }}" type="text/css" />

    <!-- Stylesheets -->
    <link href="{{ asset('plugin-frameworks/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin-frameworks/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('common/styles.css') }}" rel="stylesheet">


    <script src="{{ asset('https://kit.fontawesome.com/531d1f2013.js') }}"></script>

    <style>
        .product_view .modal-dialog {
            max-width: 800px;
            width: 100%;
        }
        
        .pre-cost {
            text-decoration: line-through;
            color: #a5a5a5;
        }
        
        .space-ten {
            padding: 10px 0;
        }
    </style>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   <p> Molton </p>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav mr-auto">

                    </ul>

               
                    <ul class="navbar-nav ml-auto">
                     
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


    <section class="bg-5 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
            <div class="dplay-tbl">
                <div class="dplay-tbl-cell center-text color-white pt-90">
                    <h5><b>THE BEST IN TOWN</b></h5>
                    <h2 class="mt-30 mb-15">Menu</h2>
                </div>
            
            </div>
     
        </div>
     
    </section>


    <section class="story-area left-text center-sm-text">
        <div class="container">
            <div class="heading">
                <h3>Choose from Molton Cake</h3>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4  col-sm-6 ">
                    <div class="center-text mb-30">
                        <div class="ïmg-200x mlr-auto pos-relative">
                            <h6 class="ribbon-cont color-white">
                                <div class="ribbon primary"></div><b>OFFER</b></h6>
                            <img src="images/seller-2-200x200.png" alt="">
                        </div>
                        <h5 class="mt-20">Nutella Waffle</h5>
                        <h4 class="mt-5 color-primary"><b>$11.90</b></h4>
                        <h6 class="mt-20"> <button type="button" class="btn-brdr-primary plr-25" data-toggle="modal" data-target="#product_view"><p>Order Now</p></button></h6>
              </div>

                    <div class="modal fade product_view" id="product_view">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <a href="#" data-dismiss="modal" class="class pull-right"><span class="fas fa-times"></span></a>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6 product_img form-style-1 placeholder-1">

                                            <img src="images/menu-7-120x120.jpg" class="img-responsive">

                                            <div class="row">
                                                <div class="col-md-12" style="margin-top: 20px">

                                                    <textarea class="h-200x ptb-20" placeholder="Any Comment"></textarea></div>

                                            </div>
                                        </div>
                                        <div class="col-md-6 product_content">
                                            <h4>Product Id: <span>51526</span></h4>
                                            <div class="rating">
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="far fa-star"></span> (10 reviews)
                                            </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                                it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <h3 class="cost"><span class="glyphicon glyphicon-usd"></span> 55.00 <small class="pre-cost"><span class="glyphicon glyphicon-usd"></span> 60.00</small></h3>
                                            <div class="row">






                                                <!-- end col -->
                                                <div class="col-md-10 col-sm-12">
                                                    <select class="form-control" name="select">
                                                        <option value="" selected="">QTY</option>
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                        <option value="">6</option>
                                                        <option value="">7</option>
                                                        <option value="">8</option>
                                                    </select>
                                                </div>


                                                <!-- end col -->

                                            </div>
                                            <div class="space-ten"></div>
                                            <div class="btn-ground">
                                                <button type="button" class="btn btn-primary" title="Add to order and go menu to chosse more"><span class="glyphicon glyphicon-shopping-cart"></span> Add</button>
                                                <a href="/confirm" class="btn btn-primary" title="add and go to confirm order"><span class="glyphicon glyphicon-heart"></span> Add and go confirm</a>
                                                <button type="button" data-dismiss="modal" class="btn btn-secondary"><span class="glyphicon glyphicon-heart"></span> Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- col-md-3 -->

                <div class="col-lg-3 col-md-4  col-sm-6 ">
                    <div class="center-text mb-30">
                        <div class="ïmg-200x mlr-auto pos-relative"><img src="images/seller-2-200x200.png" alt=""></div>
                        <h5 class="mt-20">Nutella Waffle</h5>
                        <h4 class="mt-5 color-primary"><b>$11.90</b></h4>
                        <h6 class="mt-20"> <button type="button" class="btn-brdr-primary plr-25" data-toggle="modal" data-target="#product_view"><p>Order Now</p></button></h6>
                    </div>
                    <!--text-center-->
                </div>
                <!-- col-md-3 -->

                <!-- col-md-3 -->

                <div class="col-lg-3 col-md-4  col-sm-6 ">
                    <div class="center-text mb-30">
                        <div class="ïmg-200x mlr-auto pos-relative">
                            <h6 class="ribbon-cont color-white">
                                <div class="ribbon secondary"></div><b>SPECIALITY</b></h6>
                            <img src="images/seller-2-200x200.png" alt="">
                        </div>
                        <h5 class="mt-20">Nutella Waffle</h5>
                        <h4 class="mt-5 color-primary"><b>$11.90</b></h4>
                        <h6 class="mt-20"> <button type="button" class="btn-brdr-primary plr-25" data-toggle="modal" data-target="#product_view"><p>Order Now</p></button></h6>
                    </div>
                    <!--text-center-->
                </div>
                <!-- col-md-3 -->
            </div>
            <!-- row-->
        </div>
        <!-- container -->
    </section>

    <section class="bg-lite-blue">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="sided-90x mb-30 ">
                        <div class="s-left"><img class="br-3" src="images/sidebar-3-200x200.jpg" alt="Menu Image"></div>
                        <!--s-left-->
                        <div class="s-right">
                            <h5 class="mb-10"><b>Nutella Waffle</b><b class="color-primary float-right">$12.00</b></h5>
                            <p class="pr-70">Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. </p>
                            <h6 class="mt-20"> <button type="button" class="btn-brdr-primary plr-25" data-toggle="modal" data-target="#product_view"><p>Order Now</p></button></h6>
                        </div>
                        <!--s-right-->
                    </div>
                    <!-- sided-90x -->
                </div>
                <!-- food-menu -->

                <div class="col-md-6">
                    <div class="sided-90x mb-30 ">
                        <div class="s-left"><img class="br-3" src="images/sidebar-1-400x600.jpg" alt="Menu Image"></div>
                        <!--s-left-->
                        <div class="s-right">
                            <h5 class="mb-10"><b>Nutella Waffle</b><b class="color-primary float-right">$20.00</b></h5>
                            <p class="pr-70">Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. </p>
                            <h6 class="mt-20"> <button type="button" class="btn-brdr-primary plr-25" data-toggle="modal" data-target="#product_view"><p>Order Now</p></button></h6>
                        </div>
                        <!--s-right-->
                    </div>
                    <!-- sided-90x -->
                </div>
                <!-- food-menu -->

                <div class="col-md-6">
                    <div class="sided-90x mb-30 ">
                        <div class="s-left"><img class="br-3" src="images/mare_molten_chocolate_cakes_with_mint_fudge_sauce_h.jpg" alt="Menu Image"></div>
                        <!--s-left-->
                        <div class="s-right">
                            <h5 class="mb-10"><b>Nutella Waffle</b><b class="color-primary float-right">$12.00</b></h5>
                            <p class="pr-70">Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. </p>
                            <h6 class="mt-20"> <button type="button" class="btn-brdr-primary plr-25" data-toggle="modal" data-target="#product_view"><p>Order Now</p></button></h6>
                        </div>
                        <!--s-right-->
                    </div>
                    <!-- sided-90x -->
                </div>
                <!-- food-menu -->

                <div class="col-md-6">
                    <div class="sided-90x mb-30">
                        <div class="s-left"><img class="br-3" src="images/mare_molten_chocolate_cakes_with_mint_fudge_sauce_h.jpg" alt="Menu Image"></div>
                        <!--s-left-->
                        <div class="s-right">
                            <h5 class="mb-10"><b>Nutella Waffle</b><b class="color-primary float-right">$6.00</b></h5>
                            <p class="pr-70">Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. </p>
                            <h6 class="mt-20"> <button type="button" class="btn-brdr-primary plr-25" data-toggle="modal" data-target="#product_view"><p>Order Now</p></button></h6>
                        </div>
                        <!--s-right-->
                    </div>
                    <!-- sided-90x -->
                </div>
                <!-- food-menu -->

                <div class="col-md-6">
                    <div class="sided-90x mb-30">
                        <div class="s-left"><img class="br-3" src="images/mare_molten_chocolate_cakes_with_mint_fudge_sauce_h.jpg" alt="Menu Image"></div>
                        <!--s-left-->
                        <div class="s-right">
                            <h5 class="mb-10"><b>Nutella Waffle</b><b class="color-primary float-right">$12.00</b></h5>
                            <h6 class="mt-20"> <button type="button" class="btn-brdr-primary plr-25" data-toggle="modal" data-target="#product_view"><p>Order Now</p></button></h6>
                            <p class="pr-70">Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. </p>
                        </div>
                        <!--s-right-->
                    </div>
                    <!-- sided-90x -->
                </div>
                <!-- food-menu -->

                <div class="col-md-6">
                    <div class="sided-90x mb-30 ">
                        <div class="s-left"><img class="br-3" src="images/mare_molten_chocolate_cakes_with_mint_fudge_sauce_h.jpg" alt="Menu Image"></div>
                        <!--s-left-->
                        <div class="s-right">
                            <h5 class="mb-10"><b>Nutella Waffle</b><b class="color-primary float-right">$20.00</b></h5>
                            <p class="pr-70">Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. </p>
                            <h6 class="mt-20"> <button type="button" class="btn-brdr-primary plr-25" data-toggle="modal" data-target="#product_view"><p>Order Now</p></button></h6>
                        </div>
                        <!--s-right-->
                    </div>
                    <!-- sided-90x -->
                </div>
                <!-- food-menu -->

                <div class="col-md-6">
                    <div class="sided-90x mb-30">
                        <div class="s-left"><img class="br-3" src="images/mare_molten_chocolate_cakes_with_mint_fudge_sauce_h.jpg" alt="Menu Image"></div>
                        <!--s-left-->
                        <div class="s-right">
                            <h5 class="mb-10"><b>Pizza Prosciuto</b><b class="color-primary float-right">$12.00</b></h5>
                            <p class="pr-70">Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. </p>
                            <h6 class="mt-20"> <button type="button" class="btn-brdr-primary plr-25" data-toggle="modal" data-target="#product_view"><p>Order Now</p></button></h6>
                        </div>
                        <!--s-right-->
                    </div>
                    <!-- sided-90x -->
                </div>
                <!-- food-menu -->

                <div class="col-md-6">
                    <div class="sided-90x mb-30 ">
                        <div class="s-left"><img class="br-3" src="images/mare_molten_chocolate_cakes_with_mint_fudge_sauce_h.jpg" alt="Menu Image"></div>
                        <!--s-left-->
                        <div class="s-right">
                            <h5 class="mb-10"><b>Nutella Waffle</b><b class="color-primary float-right">$6.00</b></h5>
                            <p class="pr-70">Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. </p>
                            <h6 class="mt-20"> <button type="button" class="btn-brdr-primary plr-25" data-toggle="modal" data-target="#product_view"><p>Order Now</p></button></h6>
                        </div>
                        <!--s-right-->
                    </div>
                    <!-- sided-90x -->
                </div>
                <!-- food-menu -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>


    <section class="story-area bg-seller color-white pos-relative">
        <div class="pos-bottom triangle-up"></div>
        <div class="pos-top triangle-bottom"></div>
        <div class="container">
            <h4 class="font-30 font-sm-20  center-text mb-25">Add an <b>Ice cream </b> to your order</h4>
        </div>
        <!-- container -->
    </section>


    <section>
        <div class="container">
            <div class="heading mb-sm-10">
                <h3>Choose from Ice Cream</h3>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="sided-220x responsive mb-30 left-text center-sm-text">
                        <div class="s-left mlr-sm-auto"><img src="images/pasta-3-300x300.png" width="120px" height="180px" alt="Menu Image"></div>
                        <div class="s-right">
                            <h5>Ice Fruit</h5>
                            <h4 class="mtb-10"><b class="color-primary">$12.00</b></h4>
                            <p>Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. </p>
                            <h6 class="mt-20"><a href="#" class="btn-brdr-primary plr-25"><b>Order Now</b></a></h6>
                        </div>
                        <!--s-right-->
                    </div>
                    <!-- sided-90x -->
                </div>
                <!-- col-md-6 -->

                <div class="col-md-12 col-lg-6">
                    <div class="sided-220x responsive mb-30 left-text center-sm-text">
                        <div class="s-left mlr-sm-auto"><img src="images/pasta-2-300x300.png" width="120px" height="180px" alt="Menu Image"></div>
                        <div class="s-right">
                            <h5>Ice vanilla</h5>
                            <h4 class="mtb-10"><b class="color-primary">$12.00</b></h4>
                            <p>Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. </p>

                            <h6 class="mt-20"><a href="#" class="btn-brdr-primary plr-25"><b>Order Now</b></a></h6>
                        </div>
                        <!--s-right-->
                    </div>
                    <!-- sided-90x -->
                </div>
                <!--col-md-6 -->
            </div>
            <!-- row-->

            <div class="brder-t-light mt-sm-10 mb-60 mb-sm-40"></div>

            <div class="row">
                <div class="col-md-6">
                    <div class="sided-90x mb-30">
                        <div class="s-left"><img class="br-3" src="images/sellers-1-1600x1600.jpg" alt="Menu Image"></div>
                        <!--s-left-->
                        <div class="s-right">
                            <h5 class="mb-10"><b>Ice vanilla</b><b class="color-primary float-right">$12.00</b></h5>
                            <p class="pr-70">Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. </p>
                            <h6 class="mt-20"> <button type="button" class="btn-brdr-primary plr-25" data-toggle="modal" data-target="#product_view"><p>Order Now</p></button></h6>
                        </div>
                        <!--s-right-->
                    </div>
                    <!-- sided-90x -->
                </div>
                <!-- food-menu -->

                <div class="col-md-6">
                    <div class="sided-90x mb-30 ">
                        <div class="s-left"><img class="br-3" src="images/menu-6-120x120.jpg" alt="Menu Image"></div>
                        <!--s-left-->
                        <div class="s-right">
                            <h5 class="mb-10"><b>Ice chocolate</b><b class="color-primary float-right">$20.00</b></h5>
                            <p class="pr-70">Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. </p>
                            <h6 class="mt-20"> <button type="button" class="btn-brdr-primary plr-25" data-toggle="modal" data-target="#product_view"><p>Order Now</p></button></h6>
                        </div>
                        <!--s-right-->
                    </div>
                    <!-- sided-90x -->
                </div>
                <!-- food-menu -->

                <div class="col-md-6">
                    <div class="sided-90x mb-30">
                        <div class="s-left"><img class="br-3" src="images/menu-7-120x120.jpg" alt="Menu Image"></div>
                        <!--s-left-->
                        <div class="s-right">
                            <h5 class="mb-10"><b>Ice chocolate</b><b class="color-primary float-right">$12.00</b></h5>
                            <p class="pr-70">Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea dictumst. </p>
                            <h6 class="mt-20"> <button type="button" class="btn-brdr-primary plr-25" data-toggle="modal" data-target="#product_view"><p>Order Now</p></button></h6>
                        </div>
                        <!--s-right-->
                    </div>
                    <!-- sided-90x -->
                </div>
                <!-- food-menu -->

                <div class="col-md-6">
                    <div class="sided-90x mb-30 ">
                        <div class="s-left"><img class="br-3" src="images/menu-8-120x120.jpg" alt="Menu Image"></div>
                        <!--s-left-->
                        <div class="s-right">
                            <h5 class="mb-10"><b>Ice chocolate</b><b class="color-primary float-right">$6.00</b></h5>
                            <p class="pr-70">Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit elementum quis. </p>
                            <h6 class="mt-20"> <button type="button" class="btn-brdr-primary plr-25" data-toggle="modal" data-target="#product_view"><p>Order Now</p></button></h6>
                        </div>
                        <!--s-right-->
                    </div>
                    <!-- sided-90x -->
                </div>
                <!-- food-menu -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>


    <footer class="pb-50  pt-70 pos-relative">
        <div class="pos-top triangle-bottom"></div>
        <div class="container-fluid">
            <a href="index.html"><img src="images/logo-white.png" alt="Logo"></a>

            <div class="pt-30">
                <p class="underline-secondary"><b>Address:</b></p>
                <p>481 Ramsis streat Cairo , 2528 </p>
            </div>

            <div class="pt-30">
                <p class="underline-secondary mb-10"><b>Phone:</b></p>
                <a href="tel:+53 345 7953 32453 ">+0059 22315 21253 </a>
            </div>

            <div class="pt-30">
                <p class="underline-secondary mb-10"><b>Email:</b></p>
                <a href="mailto:yourmail@gmail.com"> molton@gmail.com</a>
            </div>

            <ul class="icon mt-30">

                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                <li><a href="#"><i class="ion-social-twitter"></i></a></li>

            </ul>

            <p class="color-light font-9 mt-50 mt-sm-30">

             Copyright &copy;
                <script>
                </script> All rights reserved | Molton chcooleta by : Mohamed Hassan && Abdelrhman Mohamed

            </p>
        </div>
        <!-- container -->
    </footer>

    <!-- SCIPTS -->
    <script src="{{ asset('plugin-frameworks/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('plugin-frameworks/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugin-frameworks/swiper.js') }}"></script>
    <script src="{{ asset('common/scripts.js') }}"></script>
</body>

</html>