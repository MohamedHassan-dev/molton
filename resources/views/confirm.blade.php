<!DOCTYPE html>
<html lang="en">

<head>
    <title>Molton</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <!-- Font -->
    <script src="{{ asset('https://kit.fontawesome.com/531d1f2013.js') }}"></script>
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:400,600') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/beyond_the_mountains-webfont.css') }}" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap-4.1.2/bootstrap.min.css') }}">
    <link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/cart.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/cart_responsive.css') }}">

    <link href="{{ asset('plugin-frameworks/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin-frameworks/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('common/styles.css') }}" rel="stylesheet">


    <script src="{{ asset('https://kit.fontawesome.com/531d1f2013.js') }}"></script>
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



    <section class="bg-4 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
            <div class="dplay-tbl">
                <div class="dplay-tbl-cell center-text color-white pt-90">
                    <h5><b>THE BEST IN TOWN</b></h5>
                    <h2 class="mt-30 mb-15">Confirm table order</h2>
                </div>
                <!-- dplay-tbl-cell -->
            </div>
            <!-- dplay-tbl -->
        </div>
        <!-- container -->
    </section>




    <!-- Cart -->

    <div class="cart_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="cart_container">

                        <!-- Cart Bar -->
                        <div class="cart_bar">
                            <ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-end">
                                <li class="mr-auto">Product</li>

                                <li>Price</li>
                                <li>Quantity</li>
                                <li>Total</li>
                                <li>Action</li>
                            </ul>
                        </div>

                        <!-- Cart Items -->
                        <div class="cart_items">
                            <ul class="cart_items_list">

                                <!-- Cart Item -->
                                <li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start">
                                    <div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
                                        <div>
                                            <h4>1</h4>
                                        </div>
                                        <div>
                                            <div class="product_image"><img src="images/seller-2-200x200.png" alt=""></div>
                                        </div>
                                        <div class="product_name_container">
                                            <div class="product_name"><a href="product.html">Nutella Waffle</a></div>
                                            <div class="product_text">Second line for additional comment</div>
                                        </div>
                                    </div>
                                    <div class="product_price product_text"><span>Price: </span>3.99L.E</div>
                                    <div class="product_quantity_container">
                                        <div class="product_quantity ml-lg-auto mr-lg-auto text-center">
                                            <span class="product_text product_num">1</span>
                                        </div>
                                    </div>
                                    <div class="product_total product_text"><span>Total: </span>3.99L.E</div>
                                    <div class="product_total product_text"><span>Action: </span><i class="far fa-trash-alt"></i></div>
                                </li>
                            </ul>
                        </div>

                        <!-- Cart Buttons -->
                        <div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
                            <div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
                                <div class="button button_clear trans_200"><a href="#">clear order</a></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row cart_extra_row">





                <div class="col-lg-12 cart_extra_col">
                    <div class="cart_extra cart_extra_2">
                        <div class="cart_extra_content cart_extra_total">
                            <div class="cart_extra_title">Order Total</div>
                            <ul class="cart_extra_total_list">
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_extra_total_title">Subtotal</div>
                                    <div class="cart_extra_total_value ml-auto">29.90 L.E</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_extra_total_title">Taxi</div>
                                    <div class="cart_extra_total_value ml-auto">5.00 L.E</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_extra_total_title">Total</div>
                                    <div class="cart_extra_total_value ml-auto">34.90 L.E</div>
                                </li>


                            </ul>

                            <div class="col-lg-12 col-sm-12" style="margin-top:25px">
                                <div class="cart_extra_total_title">Table number</div>
                                <select class="form-control" name="select">
                                                                <option value="" selected="">Table number</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                               </select>
                            </div>

                            <div class="checkout_button trans_200"><a href="#">confirm order now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>













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