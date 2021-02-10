<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel ECommerce</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/aroma.css') }}" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!--================ Start Header Menu Area =================-->
    @include('partials.nav')
    <!--================ End Header Menu Area =================-->

    <main class="site-main">

        <!--================ Hero banner start =================-->
        <section class="hero-banner">
            <div class="container">
                <div class="row no-gutters align-items-center pt-60px">
                    <div class="col-5 d-none d-sm-block">
                        <div class="hero-banner__img">
                            <img class="img-fluid" src="{{ asset('img/home/hero-banner.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
                        <div class="hero-banner__content">
                            <h4>Shop is fun</h4>
                            <h1>Browse Our Premium Product</h1>
                            <p>Us which over of signs divide dominion deep fill bring they're meat beho upon own earth without morning over third. Their male dry. They are great appear whose land fly grass.</p>
                            <a class="button button-hero" href="{{ route('shop.index') }}">Browse Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Hero banner start =================-->

        <!-- ================ Carousel 3 Items ================= -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="{{ asset('img/home/hero-slide1.png') }}" alt="" />
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" src="{{ asset('img/home/hero-slide2.png') }}" alt="" />
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" src="{{ asset('img/home/hero-slide3.png') }}" alt="" />
                </div>
            </div>
        </div>
        <!-- ================ End Carousel 3 Items ================= -->

        <!-- ================ trending product section start ================= -->
        <section class="section-margin calc-60px">
            <div class="container">
                <div class="section-intro pb-60px">
                    <p>Popular Item in the market</p>
                    <h2>Featured <span class="section-intro__style">Product</span></h2>
                </div>
                <div class="row">
                    @forelse($products as $product)
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <x-product.single-product :product="$product" />
                    </div>
                    @empty
                    <x-empty-icon title="No Featured Products..." />
                    @endforelse
                </div>
            </div>
        </section>
        <!-- ================ trending product section end ================= -->


        <!-- ================ offer section start ================= -->
        <section class="offer" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 20px 30px" data-top-bottom="background-position: 0 20px">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="offer__content text-center">
                            <h3>Up To 50% Off</h3>
                            <h4>Winter Sale</h4>
                            <p>Him she'd let them sixth saw light</p>
                            <a class="button button--active mt-3 mt-xl-4" href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ offer section end ================= -->

        <!-- ================ Blog section start ================= -->
        <section class="blog mt-5">
            <div class="container">
                <div class="section-intro pb-60px">
                    <p>Popular Item in the market</p>
                    <h2>Latest <span class="section-intro__style">News</span></h2>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card card-blog">
                            <div class="card-blog__img">
                                <img class="card-img rounded-0" src="img/blog/blog1.png" alt="">
                            </div>
                            <div class="card-body">
                                <ul class="card-blog__info">
                                    <li><a href="#">By Admin</a></li>
                                    <li><a href="#"><i class="ti-comments-smiley"></i> 2 Comments</a></li>
                                </ul>
                                <h4 class="card-blog__title"><a href="single-blog.html">The Richland Center Shooping News and weekly shooper</a></h4>
                                <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.</p>
                                <a class="card-blog__link" href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card card-blog">
                            <div class="card-blog__img">
                                <img class="card-img rounded-0" src="img/blog/blog2.png" alt="">
                            </div>
                            <div class="card-body">
                                <ul class="card-blog__info">
                                    <li><a href="#">By Admin</a></li>
                                    <li><a href="#"><i class="ti-comments-smiley"></i> 2 Comments</a></li>
                                </ul>
                                <h4 class="card-blog__title"><a href="single-blog.html">The Shopping News also offers top-quality printing services</a></h4>
                                <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.</p>
                                <a class="card-blog__link" href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card card-blog">
                            <div class="card-blog__img">
                                <img class="card-img rounded-0" src="img/blog/blog3.png" alt="">
                            </div>
                            <div class="card-body">
                                <ul class="card-blog__info">
                                    <li><a href="#">By Admin</a></li>
                                    <li><a href="#"><i class="ti-comments-smiley"></i> 2 Comments</a></li>
                                </ul>
                                <h4 class="card-blog__title"><a href="single-blog.html">Professional design staff and efficient equipment you’ll find we offer</a></h4>
                                <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.</p>
                                <a class="card-blog__link" href="#">Read More <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ Blog section end ================= -->

        <!-- ================ Subscribe section start ================= -->
        <section class="subscribe-position">
            <div class="container">
                <div class="subscribe text-center">
                    <h3 class="subscribe__title">Get Update From Anywhere</h3>
                    <p>Bearing Void gathering light light his eavening unto dont afraid</p>
                    <div id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe-form form-inline mt-5 pt-1">
                            <div class="form-group ml-sm-auto">
                                <input class="form-control mb-1" type="email" name="EMAIL" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '">
                                <div class="info"></div>
                            </div>
                            <button class="button button-subscribe mr-auto mb-1" type="submit">Subscribe Now</button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </section>
        <!-- ================ Subscribe section end ================= -->



    </main>


    <!--================ Start footer Area  =================-->
    @include('partials.footer')
    <!--================ End footer Area  =================-->

    <!--<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/nice-select/jquery.nice-select.min.js"></script> -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>