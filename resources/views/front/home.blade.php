@extends('layouts.frontmaster')

@section('content')
  <div style="clear: both;"></div>
	<main class="site-main">
    <!--================ Hero banner start =================-->
    <section class="hero-banner">
      <div class="container">
        <div class="row no-gutters align-items-center pt-60px">
          <div class="col-5 d-none d-sm-block">
            <div class="hero-banner__img">
              <img class="img-fluid" src="img/home/hero-banner.png" alt="">
            </div>
          </div>
          <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
            <div class="hero-banner__content">
              <h4>Shop is fun</h4>
              <h1>Browse Our Premium Product</h1>
              <p>Us which over of signs divide dominion deep fill bring they're meat beho upon own earth without morning over third. Their male dry. They are great appear whose land fly grass.</p>
              <a class="button button-hero" href="#">Browse Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Hero banner start =================-->

    <!--================ Hero Carousel start =================-->
    <section class="section-margin mt-0">
      <div class="owl-carousel owl-theme hero-carousel">
        <div class="hero-carousel__slide">
          <img src="img/home/hero-slide1.png" alt="" class="img-fluid">
          <a href="/#section-margin calc-60px" class="hero-carousel__slideOverlay">
            <h3>Wireless Headphone</h3>
            <p>Accessories Item</p>
          </a>
        </div>
        <div class="hero-carousel__slide">
          <img src="img/home/hero-slide2.png" alt="" class="img-fluid">
          <a href="#" class="hero-carousel__slideOverlay">
            <h3>Wireless Headphone</h3>
            <p>Accessories Item</p>
          </a>
        </div>
        <div class="hero-carousel__slide">
          <img src="img/home/hero-slide3.png" alt="" class="img-fluid">
          <a href="#" class="hero-carousel__slideOverlay">
            <h3>Wireless Headphone</h3>
            <p>Accessories Item</p>
          </a>
        </div>
      </div>
    </section>
    <!--================ Hero Carousel end =================-->

    <!-- ================ trending product section start ================= -->  
    <section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <p>Popular Item in the market</p>
          <h2>Trending <span class="section-intro__style">Product</span></h2>
        </div>
        <div class="row">
          @if(count($products) > 0)
            @foreach($products as $product)
              <div class="col-md-6 col-lg-4 col-xl-3">
              <div class="card text-center card-product">
                <div class="card-product__img">
                  <img class="card-img" src="{{Voyager::image((json_decode($product->image))[0])}}" alt="Product Image">
                  <ul class="card-product__imgOverlay">
                    <li><a href="/product/{{ $product->id }}"><button><i class="ti-search"></i></button></a></li>
                    <li><a href="/cart/{{ $product->id }}/edit"><button><i class="ti-shopping-cart"></i></button></a></li>
                  </ul>
                </div>
                <div class="card-body">
                  <p>{{ count($product->category)>0? $product->category->category_name : 'N/A' }}</p>
                  <h4 class="card-product__title"><a href="/product">{{ $product->name }}</a></h4>
                  <p class="card-product__price">&#8377; {{ $product->price }}</p>
                </div>
              </div>
            </div>
            @endforeach
          @else
            <div class="card-body">
              <h3>No Products Found!!</h3>
            </div>
          @endif
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
              <h4>Laptop Sale</h4>
              <a class="button button--active mt-3 mt-xl-4" href="/">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ offer section end ================= --> 

    <!-- ================ Best Selling item  carousel ================= --> 
    <section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <p>Popular Item in the market</p>
          <h2>Best <span class="section-intro__style">Sellers</span></h2>
        </div>
        <div class="owl-carousel owl-theme" id="bestSellerCarousel">
          @if(count($products)>0)
            @foreach($products as  $product)
              <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="img-fluid" src="{{Voyager::image((json_decode($product->image))[0])}}" alt="">
              <ul class="card-product__imgOverlay">
                    <li><a href="/product/{{ $product->id }}"><button><i class="ti-search"></i></button></a></li>
                    <li><a href="/cart/{{ $product->id }}/edit"><button><i class="ti-shopping-cart"></i></button></a></li>
                  </ul>
            </div>
            <div class="card-body">
              <p>{{ count($product->category)>0? $product->category->category_name : 'N/A' }}</p>
              <h4 class="card-product__title"><a href="single-product.html">{{ $product->company }}</a></h4>
              <p class="card-product__price">&#8377; {{ $product->price }}</p>
            </div>
          </div>
            @endforeach
          @endif
        </div>
      </div>
    </section>
    <!-- ================ Best Selling item  carousel end ================= --> 

    <!-- ================ Subscribe section start ================= --> 
    <section class="subscribe-position">
      <div class="container">
        <div class="subscribe text-center">
          <h3 class="subscribe__title">Get Update From Anywhere</h3>
          <p>Bearing Void gathering light light his eavening unto dont afraid</p>
          <div id="mc_embed_signup">
            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe-form form-inline mt-5 pt-1">
              <div class="form-group ml-sm-auto">
                <input class="form-control mb-1" type="email" name="EMAIL" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" >
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
@endsection