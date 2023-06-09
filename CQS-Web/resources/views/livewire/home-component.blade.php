<div>
    {{-- The whole world belongs to you. --}}
    <main class="main">
        <section class="home-slider position-relative pt-50">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                @foreach($slides as $slide)
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">{{$slide->top_title}}</h4>
                                    <h2 class="animated fw-900">{{$slide->title}}</h2>
                                    <h1 class="animated fw-900 text-brand">{{$slide->sub_title}}</h1>
                                    <p class="animated">{{$slide->offer}}</p>
                                    <a class="animated btn btn-brush btn-brush-3" href="/"> CONOCE MÁS </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-1" src="{{asset('assets/imgs/slider')}}/{{$slide->image}}" alt="{{$slide->title}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>
        <section class="featured section-padding position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-1.png" alt="">
                            <h4 class="bg-1">Cachorro</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-2.png" alt="">
                            <h4 class="bg-3">Veteranos</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-3.png" alt="">
                            <h4 class="bg-2">Apoyo Emocional</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-4.png" alt="">
                            <h4 class="bg-4">Compañero</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-5.png" alt="">
                            <h4 class="bg-5">Grandes</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-6.png" alt="">
                            <h4 class="bg-6">Pequeños</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @auth
        <section class="product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">
            @if(Auth::user()->utype == 'ADM')
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Presentación</button>
                        </li>
                        <!-- <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Popular</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">New added</button>
                        </li> -->
                    </ul>
                    <a href="#" class="view-more d-none d-md-flex">View More<i class="fi-rs-angle-double-small-right"></i></a>
                </div>
            @endif

                <!--End nav-tabs-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">

                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            @foreach($fproducts as $fproduct)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('product.details',['slug'=>$fproduct->slug])}}">
                                                <img class="default-img" src="{{ asset('assets/imgs/products')}}/{{$fproduct->image}}" alt="">
                                                <!-- <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt=""> -->
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <!-- <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a> -->
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Colitas que salvan</a>
                                        </div>
                                        <h2><a href="product-details.html">{{$fproduct->name}}</a></h2>
                                        <!-- <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div> -->
                                        <div class="product-price">
                                            <span class="text">{{$fproduct->regular_price}} </span>
                                            <!-- <span class="old-price">$245.8</span> -->
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="#" wire:click.prevent="store({{$fproduct->id}},'{{$fproduct->name}}',{{$fproduct->regular_price}})"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab one (Featured)-->
                    <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                        <div class="row product-grid-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/imgs/shop/product-9-1.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-9-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Donec </a>
                                        </div>
                                        <h2><a href="product-details.html">Lorem ipsum dolor</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/imgs/shop/product-10-1.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-10-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Music</a>
                                        </div>
                                        <h2><a href="product-details.html">Sed tincidunt interdum</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$138.85 </span>
                                            <span class="old-price">$255.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/imgs/shop/product-11-1.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-11-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">Best Sell</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Watch</a>
                                        </div>
                                        <h2><a href="product-details.html">Fusce metus orci</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>95%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$338.85 </span>
                                            <span class="old-price">$445.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/imgs/shop/product-12-1.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-12-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Music</a>
                                        </div>
                                        <h2><a href="product-details.html">Integer venenatis libero</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$123.85 </span>
                                            <span class="old-price">$235.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/imgs/shop/product-13-1.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-13-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-30%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Speaker</a>
                                        </div>
                                        <h2><a href="product-details.html">Cras tempor orci id</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$28.85 </span>
                                            <span class="old-price">$45.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/imgs/shop/product-14-1.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-14-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-22%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Camera</a>
                                        </div>
                                        <h2><a href="product-details.html">Nullam cursus mi qui</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/imgs/shop/product-15-1.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-15-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Phone</a>
                                        </div>
                                        <h2><a href="product-details.html">Fusce fringilla ultrices</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>98%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$1275.85 </span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/imgs/shop/product-1-1.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Accessories </a>
                                        </div>
                                        <h2><a href="product-details.html">Sed sollicitudin est</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab two (Popular)-->
                    <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                        <div class="row product-grid-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="default-img" src="assets/imgs/shop/product-2-1.jpg" alt="">
                                                <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Music</a>
                                        </div>
                                        <h2><a href="product-details.html">Donec ut nisl rutrum</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/imgs/shop/product-3-1.jpg" alt="">
                                                <img class="default-img" src="assets/imgs/shop/product-3-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Music</a>
                                        </div>
                                        <h2><a href="product-details.html">Nullam dapibus pharetra</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$138.85 </span>
                                            <span class="old-price">$255.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/imgs/shop/product-4-1.jpg" alt="">
                                                <img class="default-img" src="assets/imgs/shop/product-4-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">Best Sell</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Watch</a>
                                        </div>
                                        <h2><a href="product-details.html">Morbi dictum finibus</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>95%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$338.85 </span>
                                            <span class="old-price">$445.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/imgs/shop/product-5-1.jpg" alt="">
                                                <img class="default-img" src="assets/imgs/shop/product-5-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Music</a>
                                        </div>
                                        <h2><a href="product-details.html">Nunc volutpat massa</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$123.85 </span>
                                            <span class="old-price">$235.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/imgs/shop/product-6-1.jpg" alt="">
                                                <img class="default-img" src="assets/imgs/shop/product-6-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-30%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Speaker</a>
                                        </div>
                                        <h2><a href="product-details.html">Nullam ultricies luctus</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$28.85 </span>
                                            <span class="old-price">$45.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/imgs/shop/product-7-1.jpg" alt="">
                                                <img class="default-img" src="assets/imgs/shop/product-7-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-22%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Camera</a>
                                        </div>
                                        <h2><a href="product-details.html">Nullam mattis enim</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/imgs/shop/product-8-1.jpg" alt="">
                                                <img class="default-img" src="assets/imgs/shop/product-8-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Phone</a>
                                        </div>
                                        <h2><a href="product-details.html">Vivamus sollicitudin</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>98%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$1275.85 </span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="product-details.html">
                                                <img class="hover-img" src="assets/imgs/shop/product-9-1.jpg" alt="">
                                                <img class="default-img" src="assets/imgs/shop/product-9-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop.html">Accessories </a>
                                        </div>
                                        <h2><a href="product-details.html"> Donec ut nisl rutrum</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="cart.html"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab three (New added)-->
                </div>
                <!--End tab-content-->
            </div>
        </section>
        <!-- @endif
        @auth
            <section class="banner-2 section-padding pb-0">
                <div class="container">
                    <div class="banner-img banner-big wow fadeIn animated f-none">
                        <img src="assets/imgs/banner/banner-4.png" alt="">
                        <div class="banner-text d-md-block d-none">
                            <h4 class="mb-15 mt-40 text-brand">Repair Services</h4>
                            <h1 class="fw-600 mb-20">We're an Apple <br>Authorised Service Provider</h1>
                            <a href="shop.html" class="btn">Learn More <i class="fi-rs-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        @auth -->
            <section class="popular-categories section-padding mt-15 mb-25">
                <div class="container wow fadeIn animated">
                    <h3 class="section-title mb-20"><span>Las</span> Categorias</h3>
                    <div class="carausel-6-columns-cover position-relative">
                        <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                        <div class="carausel-6-columns" id="carausel-6-columns">
                            @foreach($pcategories as $pcategory)
                            <div class="card-1">
                                <figure class=" img-hover-scale overflow-hidden">
                                    <a href="{{route('product.category',['slug'=>$pcategory->slug])}}"><img src="{{asset('assets/imgs/categories')}}/{{$pcategory->image}}" alt="{{$pcategory->name}}"></a>
                                </figure>
                                <h5><a href="{{route('product.category',['slug'=>$pcategory->slug])}}">{{$pcategory->name}}</a></h5>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endif
        @auth
            <!-- <section class="banners mb-15">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="banner-img wow fadeIn animated">
                                <img src="assets/imgs/banner/banner-1.png" alt="">
                                <div class="banner-text">
                                    <span>Smart Offer</span>
                                    <h4>Save 20% on <br>Woman Bag</h4>
                                    <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="banner-img wow fadeIn animated">
                                <img src="assets/imgs/banner/banner-2.png" alt="">
                                <div class="banner-text">
                                    <span>Sale off</span>
                                    <h4>Great Summer <br>Collection</h4>
                                    <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-md-none d-lg-flex">
                            <div class="banner-img wow fadeIn animated  mb-sm-0">
                                <img src="assets/imgs/banner/banner-3.png" alt="">
                                <div class="banner-text">
                                    <span>New Arrivals</span>
                                    <h4>Shop Today’s <br>Deals & Offers</h4>
                                    <a href="shop.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
        <!-- @endif
        @auth
            <!- <section class="section-padding">
                <div class="container wow fadeIn animated">
                    <h3 class="section-title mb-20"><span>Recién</span> Llegados</h3>
                    <div class="carausel-6-columns-cover position-relative">
                        <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows"></div>
                        <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                            @foreach($lproducts as $lproduct)
                                <div class="product-cart-wrap small hover-up">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('product.details',['slug'=>$lproduct->slug])}}">
                                                <img class="default-img" src="{{ asset('assets/imgs/products')}}/{{$lproduct->image}}" alt="">
                                                < <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <<a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                <i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a> --
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <h2><a href="product-details.html">{{$lproduct->name}}</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>${{$lproduct->regular_price}} </span>
                                            <! <span class="old-price">$245.8</span> --
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                        </div>
                    </div>
                </div>
            </section> --
        @endif
        @auth -->
            <section class="section-padding">
                <div class="container">
                    <h3 class="section-title mb-20 wow fadeIn animated"><span>Ayuda</span> En Casa</h3>
                    <div class="carausel-6-columns-cover position-relative wow fadeIn animated">
                        <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-3-arrows"></div>
                        <div class="carausel-6-columns text-center" id="carausel-6-columns-3">
                            <div class="brand-logo contenedor">
                                <figure href="#">
                                    <img class="img-grey-hover" src="assets/imgs/banner/brand-1.png" alt="">
                                    <div class="capa">
                                        <!-- <h3>SLee Dw</h3> -->
                                        <p>Dia 1: Jugar 15 a 20 minutos!</p>
                                    </div>
                                </figure>
                            </div>
                            <div class="brand-logo contenedor2">
                                <figure href="#">
                                    <img class="img-grey-hover" src="assets/imgs/banner/brand-2.png" alt="">
                                    <div class="capa2">
                                        <!-- <h3>SLee Dw</h3> -->
                                        <p>Prueba 2 exitosa!</p>
                                    </div>
                                </figure>
                            </div>
                            <div class="brand-logo contenedor3">
                                <figure href="#">
                                    <img class="img-grey-hover" src="assets/imgs/banner/brand-3.png" alt="">
                                    <div class="capa3">
                                        <!-- <h3>SLee Dw</h3> -->
                                        <p>Prueba 3 exitosa!</p>
                                    </div>
                                </figure>
                            </div>
                            <div class="brand-logo contenedor4">
                                <figure href="#">
                                    <img class="img-grey-hover" src="assets/imgs/banner/brand-4.png" alt="">
                                    <div class="capa4">
                                        <!-- <h3>SLee Dw</h3> -->
                                        <p>Prueba 4 exitosa!</p>
                                    </div>
                                </figure>
                            </div>
                            <div class="brand-logo contenedor5">
                                <figure href="#">
                                    <img class="img-grey-hover" src="assets/imgs/banner/brand-5.png" alt="">
                                    <div class="capa5">
                                        <!-- <h3>SLee Dw</h3> -->
                                        <p>Prueba 5 exitosa!</p>
                                    </div>
                                </figure>
                            </div>
                            <div class="brand-logo contenedor6">
                                <figure href="#">
                                    <img class="img-grey-hover" src="assets/imgs/banner/brand-6.png" alt="">
                                    <div class="capa6">
                                        <!-- <h3>SLee Dw</h3> -->
                                        <p>Dia 6: Enseñale nuevos trucos, no olvides darle un premio al realizarlo!</p>
                                    </div>
                                </figure>
                            </div>
                            <div class="brand-logo contenedor7">
                                <figure href="#">
                                    <img class="img-grey-hover" src="assets/imgs/banner/brand-7.png" alt="">
                                    <div class="capa7">
                                        <!-- <h3>SLee Dw</h3> -->
                                        <p>Dia 7: Salir a caminar 15 o 20 minutos!</p>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

    </main>
</div>

<style>
    /* .contenedor{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    } */
    .contenedor figure{
       position:relative;
        /* height: 250px; */
        cursor: pointer;
        /* width: 350px; */
        overflow: hidden;
        /* border-radius: 6px; */
        /* box-shadow: 0px 15px 25px rgba(0,0,0,0.50); */
    }
    .contenedor figure img{
        /* width: 100%;
        height: 100%; */
        transition: all 400ms ease-out;
        will-change: transform;
    }
    .contenedor figure .capa{
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        background: #8dd3d6;
        transition: all 400ms ease-out;
        opacity: 0;
        /* visibility: hidden; */
        border-radius:5px;
        text-align: center;
    }
    .contenedor figure:hover > .capa {
        opacity: 1;
        visibility: visible;
    }
    /* .contenedor figure:hover > .capa h3{
        margin-top: 70px;
        margin-bottom: 15px;
    } */
    .contenedor figure:hover > img{
        transform: scale(1.3);
    }
    .contenedor figure .capa h3{
        /* color: #fff; */
        font-weight: 400;
        margin-bottom: 120px;
        transition: all 400ms ease-out;
        margin-top: 20px;
    }
    .contenedor figure .capa p{
        color: #fff;
        font-size: 15px;
        line-height: 1.5;
        width: 100%;
        max-width: 220px;
        margin: auto;
    }
</style>


<style>
    /* .contenedor{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    } */
    .contenedor2 figure{
       position:relative;
        /* height: 250px; */
        cursor: pointer;
        /* width: 350px; */
        overflow: hidden;
        /* border-radius: 6px; */
        /* box-shadow: 0px 15px 25px rgba(0,0,0,0.50); */
    }
    .contenedor2 figure img{
        /* width: 100%;
        height: 100%; */
        transition: all 400ms ease-out;
        will-change: transform;
    }
    .contenedor2 figure .capa2{
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        background: #8dd3d6;
        transition: all 400ms ease-out;
        opacity: 0;
        /* visibility: hidden; */
        border-radius:5px;
        text-align: center;
    }
    .contenedor2 figure:hover > .capa2 {
        opacity: 1;
        visibility: visible;
    }
    /* .contenedor figure:hover > .capa h3{
        margin-top: 70px;
        margin-bottom: 15px;
    } */
    .contenedor2 figure:hover > img{
        transform: scale(1.3);
    }
    .contenedor2 figure .capa2 h3{
        /* color: #fff; */
        font-weight: 400;
        margin-bottom: 120px;
        transition: all 400ms ease-out;
        margin-top: 20px;
    }
    .contenedor2 figure .capa2 p{
        color: #fff;
        font-size: 15px;
        line-height: 1.5;
        width: 100%;
        max-width: 220px;
        margin: auto;
    }
</style>

<style>
    /* .contenedor{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    } */
    .contenedor3 figure{
       position:relative;
        /* height: 250px; */
        cursor: pointer;
        /* width: 350px; */
        overflow: hidden;
        /* border-radius: 6px; */
        /* box-shadow: 0px 15px 25px rgba(0,0,0,0.50); */
    }
    .contenedor3 figure img{
        /* width: 100%;
        height: 100%; */
        transition: all 400ms ease-out;
        will-change: transform;
    }
    .contenedor3 figure .capa3{
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        background: #8dd3d6;
        transition: all 400ms ease-out;
        opacity: 0;
        /* visibility: hidden; */
        border-radius:5px;
        text-align: center;
    }
    .contenedor3 figure:hover > .capa3 {
        opacity: 1;
        visibility: visible;
    }
    /* .contenedor figure:hover > .capa h3{
        margin-top: 70px;
        margin-bottom: 15px;
    } */
    .contenedor3 figure:hover > img{
        transform: scale(1.3);
    }
    .contenedor3 figure .capa3 h3{
        /* color: #fff; */
        font-weight: 400;
        margin-bottom: 120px;
        transition: all 400ms ease-out;
        margin-top: 20px;
    }
    .contenedor3 figure .capa3 p{
        color: #fff;
        font-size: 15px;
        line-height: 1.5;
        width: 100%;
        max-width: 220px;
        margin: auto;
    }
</style>

<style>
    /* .contenedor{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    } */
    .contenedor4 figure{
       position:relative;
        /* height: 250px; */
        cursor: pointer;
        /* width: 350px; */
        overflow: hidden;
        /* border-radius: 6px; */
        /* box-shadow: 0px 15px 25px rgba(0,0,0,0.50); */
    }
    .contenedor4 figure img{
        /* width: 100%;
        height: 100%; */
        transition: all 400ms ease-out;
        will-change: transform;
    }
    .contenedor4 figure .capa4{
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        background: #8dd3d6;
        transition: all 400ms ease-out;
        opacity: 0;
        /* visibility: hidden; */
        border-radius:5px;
        text-align: center;
    }
    .contenedor4 figure:hover > .capa4 {
        opacity: 1;
        visibility: visible;
    }
    /* .contenedor figure:hover > .capa h3{
        margin-top: 70px;
        margin-bottom: 15px;
    } */
    .contenedor4 figure:hover > img{
        transform: scale(1.3);
    }
    .contenedor4 figure .capa4 h3{
        /* color: #fff; */
        font-weight: 400;
        margin-bottom: 120px;
        transition: all 400ms ease-out;
        margin-top: 20px;
    }
    .contenedor4 figure .capa4 p{
        color: #fff;
        font-size: 15px;
        line-height: 1.5;
        width: 100%;
        max-width: 220px;
        margin: auto;
    }
</style>

<style>
    /* .contenedor{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    } */
    .contenedor5 figure{
       position:relative;
        /* height: 250px; */
        cursor: pointer;
        /* width: 350px; */
        overflow: hidden;
        /* border-radius: 6px; */
        /* box-shadow: 0px 15px 25px rgba(0,0,0,0.50); */
    }
    .contenedor5 figure img{
        /* width: 100%;
        height: 100%; */
        transition: all 400ms ease-out;
        will-change: transform;
    }
    .contenedor5 figure .capa5{
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        background: #8dd3d6;
        transition: all 400ms ease-out;
        opacity: 0;
        /* visibility: hidden; */
        border-radius:5px;
        text-align: center;
    }
    .contenedor5 figure:hover > .capa5 {
        opacity: 1;
        visibility: visible;
    }
    /* .contenedor figure:hover > .capa h3{
        margin-top: 70px;
        margin-bottom: 15px;
    } */
    .contenedor5 figure:hover > img{
        transform: scale(1.3);
    }
    .contenedor5 figure .capa5 h3{
        /* color: #fff; */
        font-weight: 400;
        margin-bottom: 120px;
        transition: all 400ms ease-out;
        margin-top: 20px;
    }
    .contenedor5 figure .capa5 p{
        color: #fff;
        font-size: 15px;
        line-height: 1.5;
        width: 100%;
        max-width: 220px;
        margin: auto;
    }
</style>

<style>
    /* .contenedor{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    } */
    .contenedor6 figure{
       position:relative;
        /* height: 250px; */
        cursor: pointer;
        /* width: 350px; */
        overflow: hidden;
        /* border-radius: 6px; */
        /* box-shadow: 0px 15px 25px rgba(0,0,0,0.50); */
    }
    .contenedor6 figure img{
        /* width: 100%;
        height: 100%; */
        transition: all 400ms ease-out;
        will-change: transform;
    }
    .contenedor6 figure .capa6{
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        background: #8dd3d6;
        transition: all 400ms ease-out;
        opacity: 0;
        /* visibility: hidden; */
        border-radius:5px;
        text-align: center;
    }
    .contenedor6 figure:hover > .capa6 {
        opacity: 1;
        visibility: visible;
    }
    /* .contenedor figure:hover > .capa h3{
        margin-top: 70px;
        margin-bottom: 15px;
    } */
    .contenedor6 figure:hover > img{
        transform: scale(1.3);
    }
    .contenedor6 figure .capa6 h3{
        /* color: #fff; */
        font-weight: 400;
        margin-bottom: 120px;
        transition: all 400ms ease-out;
        margin-top: 20px;
    }
    .contenedor6 figure .capa6 p{
        color: #fff;
        font-size: 15px;
        line-height: 1.5;
        width: 100%;
        max-width: 220px;
        margin: auto;
        text-align: center;
    }
</style>

<style>
    /* .contenedor{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    } */
    .contenedor7 figure{
       position:relative;
        /* height: 250px; */
        cursor: pointer;
        /* width: 350px; */
        overflow: hidden;
        /* border-radius: 6px; */
        /* box-shadow: 0px 15px 25px rgba(0,0,0,0.50); */
    }
    .contenedor7 figure img{
        /* width: 100%;
        height: 100%; */
        transition: all 400ms ease-out;
        will-change: transform;
    }
    .contenedor7 figure .capa7{
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        background: #8dd3d6;
        transition: all 400ms ease-out;
        opacity: 0;
        /* visibility: hidden; */
        border-radius:5px;
        text-align: center;
    }
    .contenedor7 figure:hover > .capa7 {
        opacity: 1;
        visibility: visible;
    }
    /* .contenedor figure:hover > .capa h3{
        margin-top: 70px;
        margin-bottom: 15px;
    } */
    .contenedor7 figure:hover > img{
        transform: scale(1.3);
    }
    .contenedor7 figure .capa7 h3{
        /* color: #fff; */
        font-weight: 400;
        margin-bottom: 120px;
        transition: all 400ms ease-out;
        margin-top: 20px;
    }
    .contenedor7 figure .capa7 p{
        color: #fff;
        font-size: 15px;
        line-height: 1.5;
        width: 100%;
        max-width: 220px;
        margin: auto;
    }
</style>
