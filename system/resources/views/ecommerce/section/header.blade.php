@php
  function checkRouteActive($route) {
    if (Route::current()->uri == $route) return 'active';
  }

@endphp

<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{url('ecommerce')}}"><img src="{{url('public')}}/img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link {{checkRouteActive('ecommerce')}}" href="{{url('ecommerce')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{checkRouteActive('shop')}}" href="{{url('shop')}}">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{checkRouteActive('cart')}}" href="{{url('cart')}}">Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{checkRouteActive('checkout')}}" href="{{url('checkout')}}">CheckOut</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{checkRouteActive('masuk')}}" href="{{url('masuk')}}">Login</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a href="{{url('konfirmasi')}}" class="cart"><span class="ti-bag"></span></a></li>
                        <li class="nav-item">
                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container">
            <form action="{{url('shop/filter')}}" class="d-flex justify-content-between" method="post">
                @csrf
                <input type="text" class="form-control" id="search_input" placeholder="Search Here" name="nama" value="{{$nama ?? ""}}">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
