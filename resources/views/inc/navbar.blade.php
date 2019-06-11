<header class="header_area">
  <div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand logo_h" href="/"><img src="{{ Voyager::image(setting('site.logo')) }}" alt="Lapcart" style="height: 80px; width: 100px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
          <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item submenu dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                aria-expanded="false">Shop</a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a class="nav-link" href="/">Shop Category</a></li>
                <li class="nav-item"><a class="nav-link" href="/cart">Shopping Cart</a></li>
              </ul>
						</li>
            <li class="nav-item"><a class="nav-link" href="/contactus">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="/">Tracking</a></li>
          </ul>

          <ul class="nav-shop">
            <li class="nav-item"><button><i class="ti-search"></i></button></li>
            <a href="/cart">
              <li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">
              @guest
                0
              @else
                {{ Cart::session(Auth::user()->id)->getTotalQuantity() }}
              @endguest
            </span></button> </li>
            </a>
            <li class="nav-item"><a class="button button-header" href="/cart">Buy Now</a></li>
          </ul>
          <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
            <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>