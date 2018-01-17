@include('customer.include.header.base_header')

        @include('customer.include.header.navbar',
                 ['home_is_active'=>'active',
                  'projects_is_active' => '',
                  'catalog_is_active' => '',
                  'rent_is_active' => '',
                  'about_is_active' => ''])

        <!--========== SLIDER ==========-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" ></li>                    
                </ol>
            </div>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive" src="{{ asset('customer_assets/img/1920x1080/campus.jpg') }}" alt="WS HME">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title">{{ $title }}</h1>
                                <p> "WS HME is division inside HME ITB<br/>We are group of students who interested in practical electronics. </p>
                            </div>
                            <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="{{ asset('customer_assets/img/1920x1080/innovation.jpg') }}" alt="Projects">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h3 class="carousel-title">Project</h3>
                                <p>Make it real! <br/>We will make your idea in hardware development become reality</p>
                            </div>
                            <a href="{{ route('projects') }}" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="{{ asset('customer_assets/img/1920x1080/rent.jpg') }}" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h3 class="carousel-title">Rent</h3>
                                <p>We rent electronics goods for Civitas Academica in ITB <br/> Booked now to prepare your event!</p>
                            </div>
                            <a href="{{ route('rent') }}" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Rent</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Service -->
        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container">
                <div class="row row-space-1 margin-b-2">
                <h2>Serahkan project anda pada kami</h2>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-trophy"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Profesional</h3>
                                    <p class="margin-b-5">Proyek ditangani oleh tenaga profesional anggota Himpunan Mahasiswa Elektroteknik</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-wallet"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Harga Terjangkau</h3>
                                    <p class="margin-b-5">Harga disesuaikan dengan tingkat kesulitan proyek dan pas dengan kantong mahasiswa</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-speedometer"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Tepat Waktu</h3>
                                    <p class="margin-b-5">Pengerjaan proyek selesai tepat waktu sesuai dengan kesepakatan</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                </div>
                <!--// end row -->

                <div class="row row-space-1">
                <h2><br/>Sewa alat elektronik tidak lagi rumit</h2>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-notebook"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Lengkap</h3>
                                    <p class="margin-b-5">Menyediakan kebutuhan alat elektronik terlengkap untuk mendukung berbagai kegiatan</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Jaminan Kualitas</h3>
                                    <p class="margin-b-5">Memberikan kualitas terbaik dari alat elektronik yang dipinjamkan</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".6s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-cursor"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Mudah</h3>
                                    <p class="margin-b-5">Proses peminjaman yang cepat dan mudah serta dapat dilakukan dari jauh-jauh hari</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Service -->

        <!-- Latest Products -->
        <div class="content-lg container">
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <h2>Our Projects</h2>
                    <p>Workshop HME menerima berbagai macam proyek haardware maupun software elektronik sesuai dengan kebutuhan anda. Komunikasikan proyek anda segera dengan kami.</p>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <!-- Latest Products -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="{{ asset('customer_assets/img/970x647/01.jpg') }}" alt="Latest Products Image">
                        </div>
                    </div>
                    <h4><a href="#">Triangle Roof</a> <span class="text-uppercase margin-l-20">Management</span></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                </div>
                <!-- End Latest Products -->

                <!-- Latest Products -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="{{ asset('customer_assets/img/970x647/02.jpg') }}" alt="Latest Products Image">
                        </div>
                    </div>
                    <h4><a href="#">Curved Corners</a> <span class="text-uppercase margin-l-20">Developmeny</span></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                    <a class="link" href="#">Read More</a>
                </div>
                <!-- End Latest Products -->

                <!-- Latest Products -->
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="{{ asset('customer_assets/img/970x647/03.jpg') }}" alt="Latest Products Image">
                        </div>
                    </div>
                    <h4><a href="#">Bird On Green</a> <span class="text-uppercase margin-l-20">Design</span></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                    <a class="link" href="#">Read More</a>
                </div>
                <!-- End Latest Products -->
            </div>
            <!--// end row -->
        </div>
        <!-- End Latest Products -->

        <!-- Clients -->
        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <!-- Swiper Clients -->
                <div class="swiper-slider swiper-clients">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="{{ asset('customer_assets/img/clients/logo_hme.png') }}" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="{{ asset('customer_assets/img/clients/logo_ws_dark.png') }}" alt="Clients Logo">
                        </div>
                        
                    </div>
                    <!-- End Swiper Wrapper -->
                </div>
                <!-- End Swiper Clients -->
            </div>
        </div>
        <!-- End Clients -->

        <!-- Testimonials -->
        <div class="content-lg container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Customer Reviews</h2>

                    <!-- Swiper Testimonials -->
                    <div class="swiper-slider swiper-testimonials">
                        <!-- Swiper Wrapper -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        Proyektor dan layarnya bekerja dengan baik, bisa diambil dan dikembalikan tepat waktu.
                                    </div>
                                    <p><span class="fweight-700 color-link">Daniel Penigori</span>, SITH-R 2017, U-Green</p>
                                </blockquote>
                            </div>
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                    <div class="margin-b-20">
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </div>
                                    <p><span class="fweight-700 color-link">Alex Clarson</span>, Metronic Customer</p>
                                </blockquote>
                            </div>
                        </div>
                        <!-- End Swiper Wrapper -->

                        <!-- Pagination -->
                        <div class="swiper-testimonials-pagination"></div>
                    </div>
                    <!-- End Swiper Testimonials -->
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End Testimonials -->

        <!-- Pricing -->

        <!-- Promo Section -->
        <div class="promo-section overflow-h">
            <div class="container">
                <div class="clearfix">
                    <div class="ver-center">
                        <div class="ver-center-aligned">
                            <div class="promo-section-col">
                                <h2>Our Commitment</h2>
                                <p>Workshop HME berkomitmen untuk terus memberikan yang terbaik bagi pelanggan.</p>
                                <p>Ipsum dolor sit amet consectetur adipiscing elit sed tempor incididut ut sead laboret dolore magna aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur adipiscing</p>
                                <p>Ipsum dolor sit amet consectetur adipiscing elit sed tempor incididut ut sead laboret dolore magna aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur adipiscing</p>
                                <p>Ipsum dolor sit amet consectetur adipiscing elit sed tempor incididut ut sead laboret dolore magna aliqua enim minim veniam exercitation ipsum dolor sit amet consectetur adipiscing</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo-section-img-right">
                <img class="img-responsive" src="{{ asset('customer_assets/img/970x970/fototim.jpg') }}" alt="Content Image">
            </div>
        </div>
        <!-- End Promo Section -->

        <!--========== END PAGE LAYOUT ==========-->

        @include('customer.include.footer.base_footer')

        <script src="{{ asset('customer_assets/vendor/masonry/jquery.masonry.pkgd.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('customer_assets/vendor/masonry/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>

        <script src="{{ asset('customer_assets/js/components/masonry.min.js') }}" type="text/javascript"></script>

@include('customer.include.footer.closing_tag')