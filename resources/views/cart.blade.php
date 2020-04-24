@extends('layout')

@section('title', 'Shopping Cart')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection

@section('content')

  
        
          
            <div class="animate-dropdown">
                <!-- ========================================= BREADCRUMB ========================================= -->
                <div id="top-mega-nav">
                    <div class="container">
                        <nav>
                            <ul class="inline">
                                <li class="dropdown le-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-list"></i> Category
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Computer Cases & Accessories</a></li>
                                        <li><a href="#">CPUs, Processors</a></li>
                                        <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                                        <li><a href="#">Graphics, Video Cards</a></li>
                                        <li><a href="#">Interface, Add-On Cards</a></li>
                                        <li><a href="#">Laptop Replacement Parts</a></li>
                                        <li><a href="#">Memory (RAM)</a></li>
                                        <li><a href="#">Motherboards</a></li>
                                        <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                                        <li><a href="#">Motherboard Components</a></li>
                                    </ul>
                                </li>

                                <li class="breadcrumb-nav-holder">
                                    <ul>
                                        <li class="breadcrumb-item current gray">
                                            <a href="#">shopping cart</a>
                                        </li>
                                    </ul>
                                </li><!-- /.breadcrumb-nav-holder -->
                            </ul>
                        </nav>
                    </div><!-- /.container -->
                </div><!-- /#top-mega-nav -->
                <!-- ========================================= BREADCRUMB : END ========================================= -->
            </div>
         
            <section id="cart-page">
                <div class="container">
                    <!-- ========================================= CONTENT ========================================= -->
                   <div>
            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                    <div class="col-xs-12 col-md-9 items-holder no-margin">
                     @if (Cart::count() > 0)
                     <h2>{{ Cart::count() }} item(s) in Shopping Cart</h2>
                     @endif
                           @foreach (Cart::content() as $item)
                        <div class="row no-margin cart-item">
                            <div class="col-xs-12 col-sm-2 no-margin">
                                <a href="#" class="thumb-holder">
                                    <img class="lazy" alt="" src="{{ productImage($item->model->image) }}" />
                                </a>
                            </div>

                            <div class="col-xs-12 col-sm-5">
                                <div class="title">
                                    <a href="#">{{ $item->model->name }} </a>
                                </div>
                                <div class="brand">{{ $item->model->details }} </div>
                            </div>

                            <div class="col-xs-12 col-sm-3 no-margin">
                                <div >
                                    <div class="le-quantity">
                                       
                                         <!--   <a class="minus" href="#reduce"></a>
                                            <input name="quantity" readonly="readonly" type="text" value="1"  data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->quantity }}"/>
                                            <a class="plus" href="#add" "></a>  -->
                                       <select class="quantity" data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->quantity }}">
                                @for ($i = 1; $i < 5 + 1 ; $i++)
                                    <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>

                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-2 no-margin">
                                <div class="price">
                                    ${{ $item->model->price/100 }} 
                                </div>
                                <a class="close-btn" href="#"></a>
                            </div>
                        </div><!-- /.cart-item -->
                    

                       @endforeach

                    </div>
                    <!-- ========================================= CONTENT : END ========================================= -->

                    <!-- ========================================= SIDEBAR ========================================= -->

                    <div class="col-xs-12 col-md-3 no-margin sidebar ">
                        <div class="widget cart-summary">
                            <h1 class="border">shopping cart</h1>
                            <div class="body">
                                <ul class="tabled-data no-border inverse-bold">
                                    <li>
                                        <label>cart subtotal</label>
                                        <div class="value pull-right">  {{ presentPrice(Cart::subtotal()) }}</div>
                                    </li>
                                    <li>
                                        <label>shipping</label>
                                        <div class="value pull-right">free shipping</div>
                                    </li>
                                </ul>
                                <ul id="total-price" class="tabled-data inverse-bold no-border">
                                    <li>
                                        <label>order total</label>
                                        <div class="value pull-right">{{ presentPrice(Cart::subtotal()) }}</div>
                                    </li>
                                </ul>
                                <div class="buttons-holder">
                                    <a class="le-button big" href="checkout.html" >checkout</a>
                                    <a class="simple-link block" href="category-grid.html" >continue shopping</a>
                                </div>
                            </div>
                        </div><!-- /.widget -->

                        <div id="cupon-widget" class="widget">
                            <h1 class="border">use coupon</h1>
                            <div class="body">
                                <form>
                                    <div class="inline-input">
                                        <input data-placeholder="enter coupon code" type="text" />
                                        <button class="le-button" type="submit">Apply</button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- /.widget -->
                    </div><!-- /.sidebar -->

                    <!-- ========================================= SIDEBAR : END ========================================= -->
                </div>
            </section>


@endsection

@section('extra-js')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        (function(){
            const classname = document.querySelectorAll('.quantity')

            Array.from(classname).forEach(function(element) {
                element.addEventListener('change', function() {
                    const id = element.getAttribute('data-id')
                    axios.patch(`/cart/${id}`, {
                        quantity: this.value
                    })
                    .then(function (response) {
                        // console.log(response);
                        window.location.href = '{{ route('cart.index') }}'
                    })
                    .catch(function (error) {
                        // console.log(error);
                        window.location.href = '{{ route('cart.index') }}'
                    });
                })
            })
        })();
    </script>

    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->

    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>
@endsection
