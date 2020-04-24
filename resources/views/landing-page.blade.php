<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Ecommerce Example</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
         <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{asset('css/config.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{asset('css/colors/green.css') }}">
    </head>
    <body>
          <!-- ============================================================= HEADER ============================================================= -->
           <div class="wrapper">
              @include('partials.nav')

              <div id="top-banner-and-menu">
                <div class="container">
                    <div class="col-xs-12 col-sm-4 col-md-3 sidemenu-holder">
                        <!-- ================================== TOP NAVIGATION ================================== -->
                        <div class="side-menu animate-dropdown">
                            <div class="head"><i class="fa fa-list"></i> </div>
                            <nav class="yamm megamenu-horizontal" role="navigation">
                                <ul class="nav">
                                    @foreach ($categories as $category)

                                    <li><a href="{{ route('shop.index', ['category' => $category->slug]) }}">{{ $category->name }}</a></li>
                                     @endforeach

                                </ul><!-- /.nav -->
                            </nav><!-- /.megamenu-horizontal -->
                        </div><!-- /.side-menu -->
                        <!-- ================================== TOP NAVIGATION : END ================================== -->
                    </div><!-- /.sidemenu-holder -->

                    <div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
                        <!-- ========================================== SECTION – HERO ========================================= -->
                        <div id="hero">
                            <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

                                <div class="item" style="background-image: url({{ URL::asset('img/images/sliders/slider01.jpg') }});">

                                 
                                    <div class="container-fluid">
                                        <div class="caption vertical-center text-left">
                                            <div class="big-text fadeInDown-1">
                                                Save up to a<span class="big"><span class="sign">$</span>400</span>
                                            </div>

                                            <div class="excerpt fadeInDown-2">
                                                on selected laptops<br>
                                                & desktop pcs or<br>
                                                smartphones
                                            </div>
                                            <div class="small fadeInDown-2">
                                                terms and conditions apply
                                            </div>
                                            <div class="button-holder fadeInDown-3">
                                                <a href="single-product.html" class="big le-button ">shop now</a>
                                            </div>
                                        </div><!-- /.caption -->
                                    </div><!-- /.container-fluid -->
                                </div><!-- /.item -->

                                <div class="item" style="background-image: url({{ URL::asset('img/images/sliders/slider03.jpg')}}">
                                    <div class="container-fluid">
                                        <div class="caption vertical-center text-left">
                                            <div class="big-text fadeInDown-1">
                                                Want a<span class="big"><span class="sign">$</span>200</span>Discount?
                                            </div>

                                            <div class="excerpt fadeInDown-2">
                                                on selected <br>desktop pcs<br>
                                            </div>
                                            <div class="small fadeInDown-2">
                                                terms and conditions apply
                                            </div>
                                            <div class="button-holder fadeInDown-3">
                                                <a href="single-product.html" class="big le-button ">shop now</a>
                                            </div>
                                        </div><!-- /.caption -->
                                    </div><!-- /.container-fluid -->
                                </div><!-- /.item -->

                            </div><!-- /.owl-carousel -->
                        </div>
                        <!-- ========================================= SECTION – HERO : END ========================================= -->
                    </div><!-- /.homebanner-holder -->
                </div><!-- /.container -->
            </div><!-- /#top-banner-and-menu -->
 <section id="banner-holder" class="wow fadeInUp">
                <div class="container">
                    <div class="col-xs-12 col-lg-6 no-margin banner">
                        <a href="category-grid-2.html">
                            <div class="banner-text theblue">
                                <h1>New Life</h1>
                                <span class="tagline">Introducing New Category</span>
                            </div>
                            <img class="banner-image" alt="" src="{asset('img/images/banners/banner-narrow-01.jpg') }}" data-echo="{{asset('img/images/banners/banner-narrow-01.jpg') }}" />
                        </a>
                    </div>
                    <div class="col-xs-12 col-lg-6 no-margin text-right banner">
                        <a href="category-grid-2.html">
                            <div class="banner-text right">
                                <h1>Time &amp; Style</h1>
                                <span class="tagline">Checkout new arrivals</span>
                            </div>
                            <img class="banner-image" alt="" src="{{ asset('img/images/blank.gif') }}" data-echo="{{ asset('img/images/banners/banner-narrow-02.jpg') }}" />
                        </a>
                    </div>
                </div><!-- /.container -->
            </section><!-- /#banner-holder -->
            <!-- ========================================= HOME BANNERS : END ========================================= -->

            <div id="products-tab" class="wow fadeInUp">
                <div class="container">
                    <div class="tab-holder">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" >
                            <li class="active"><a href="#featured" data-toggle="tab">featured</a></li>
                            <li><a href="#new-arrivals" data-toggle="tab">new arrivals</a></li>
                            <li><a href="#top-sales" data-toggle="tab">top sales</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="featured">
                                <div class="product-grid-holder">
                                     @foreach ($products as $product)
                                    <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                                        <div class="product-item">
                                            <div class="ribbon red"><span>sale</span></div>
                                            <div class="image">
                                                <img alt="" src="{{ productImage($product->image) }}" data-echo="{{ productImage($product->image) }}" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount green">-50% sale</div>
                                                <div class="title">
                                                    <a href="{{ route('shop.show', $product->slug) }}"> {{ $product->name }}</a>
                                                </div>
                                                <div class="brand">{{ $product->details }}</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">${{ $product->name }}</div>
                                                <div class="price-current pull-right">${{ $product->presentPrice() }}</div>
                                            </div>

                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="{{ route('shop.show', $product->slug) }}" class="le-button">add to cart</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                  @endforeach
                                </div>
                                <div class="loadmore-holder text-center">
                                    <a class="btn-loadmore" href="#">
                                        <i class="fa fa-plus"></i>
                                        load more products</a>
                                </div>

                            </div>
                            <div class="tab-pane" id="new-arrivals">
                                <div class="product-grid-holder">

                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">
                                            <div class="ribbon blue"><span>new!</span></div>
                                            <div class="image">
                                                <img alt="" src="{{ asset('img/images/products/product-02.jpg') }}" data-echo="{{ asset('img/images/products/product-02.jpg') }}" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="single-product.html">White lumia 9001</a>
                                                </div>
                                                <div class="brand">nokia</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">
                                            <div class="ribbon red"><span>sale</span></div>
                                            <div class="image">
                                                <img alt="" src="{{ asset('img/images/products/blank.gif') }}" data-echo="{{ asset('img/images/products/product-01.jpg') }}" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount green">-50% sale</div>
                                                <div class="title">
                                                    <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                </div>
                                                <div class="brand">sony</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>

                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">
                                            <div class="ribbon red"><span>sale</span></div>
                                            <div class="ribbon green"><span>bestseller</span></div>
                                            <div class="image">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-04.jpg" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="single-product.html">Netbook Acer TravelMate
                                                        B113-E-10072</a>
                                                </div>
                                                <div class="brand">acer</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">

                                            <div class="image">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-03.jpg" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="single-product.html">POV Action Cam</a>
                                                </div>
                                                <div class="brand">sony</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="loadmore-holder text-center">
                                    <a class="btn-loadmore" href="#">
                                        <i class="fa fa-plus"></i>
                                        load more products</a>
                                </div>

                            </div>

                            <div class="tab-pane" id="top-sales">
                                <div class="product-grid-holder">

                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">
                                            <div class="ribbon red"><span>sale</span></div>
                                            <div class="ribbon green"><span>bestseller</span></div>
                                            <div class="image">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-04.jpg" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="single-product.html">Netbook Acer TravelMate
                                                        B113-E-10072</a>
                                                </div>
                                                <div class="brand">acer</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">

                                            <div class="image">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-03.jpg" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="single-product.html">POV Action Cam</a>
                                                </div>
                                                <div class="brand">sony</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">
                                            <div class="ribbon blue"><span>new!</span></div>
                                            <div class="image">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-02.jpg" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount clear"></div>
                                                <div class="title">
                                                    <a href="single-product.html">White lumia 9001</a>
                                                </div>
                                                <div class="brand">nokia</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>
                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                                        <div class="product-item">
                                            <div class="ribbon red"><span>sale</span></div>
                                            <div class="image">
                                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-01.jpg" />
                                            </div>
                                            <div class="body">
                                                <div class="label-discount green">-50% sale</div>
                                                <div class="title">
                                                    <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                </div>
                                                <div class="brand">sony</div>
                                            </div>
                                            <div class="prices">
                                                <div class="price-prev">$1399.00</div>
                                                <div class="price-current pull-right">$1199.00</div>
                                            </div>

                                            <div class="hover-area">
                                                <div class="add-cart-button">
                                                    <a href="single-product.html" class="le-button">add to cart</a>
                                                </div>
                                                <div class="wish-compare">
                                                    <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
                                                    <a class="btn-add-to-compare" href="#">compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="loadmore-holder text-center">
                                    <a class="btn-loadmore" href="#">
                                        <i class="fa fa-plus"></i>
                                        load more products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @include('partials.footer')
</div>
        <script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
        <script src="{{ asset('js/jquery-migrate-1.2.1.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-hover-dropdown.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/css_browser_selector.min.js') }}"></script>
        <script src="{{ asset('js/echo.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easing-1.3.min.js') }}"></script>

        <script src="{{ asset('js/bootstrap-slider.min.js') }}"></script>
        <script src="{{ asset('js/jquery.prettyPhoto.min.js') }}"></script>
        <script src="{{ asset('js/jquery.customSelect.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-hover-dropdown.min.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/buttons.js') }}"></script>
        <script src="{{ asset('js/echo.min.js') }}min.js"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="{{ asset('js/switchstylesheet.js') }}"></script>

    </body>
</html>
