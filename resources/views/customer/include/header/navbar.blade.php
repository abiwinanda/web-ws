<!-- BODY -->
<body>

<!--========== HEADER ==========-->
<header class="header navbar-fixed-top">
    <!-- Navbar -->
    <nav class="navbar" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="menu-container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="toggle-icon"></span>
                </button>

                <!-- Logo -->
                <div class="logo">
                    <a class="logo-wrap" href="{{ route('home') }}">
                        <img class="logo-img logo-img-main" src="{{ asset('customer_assets/img/logo.png') }}" alt="Asentus Logo">
                        <img class="logo-img logo-img-active" src="{{ asset('customer_assets/img/logo-dark.png') }}" alt="Asentus Logo">
                    </a>
                </div>
                <!-- End Logo -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-collapse">
                <div class="menu-container">
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item"><a class="nav-item-child nav-item-hover {{$home_is_active}}" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-item-child nav-item-hover {{$portfolio_is_active}}" href="{{ route('portfolio') }}">Portofolio</a></li>
                        <li class="nav-item"><a class="nav-item-child nav-item-hover {{$catalog_is_active}}" href="{{ route('catalog') }}">Katalog</a></li>
                        <li class="nav-item"><a class="nav-item-child nav-item-hover {{$rent_is_active}}" href="{{ route('rent') }}">Peminjaman</a></li>
                        <li class="nav-item"><a class="nav-item-child nav-item-hover {{$about_is_active}}" href="{{ route('about') }}">About Us</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Navbar Collapse -->
        </div>
    </nav>
    <!-- Navbar -->
</header>
<!--========== END HEADER ==========-->