@extends('layouts.frontmaster')

@section('content')

		<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Shopping Cart</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->
  
  

  <!--================Cart Area =================-->
  <section class="cart_area">
      <div class="container">
          <div class="cart_inner">
              <div class="table-responsive">
                  <table class="table">
                      <thead>
                          <tr>
                              <th scope="col">Product</th>
                              <th scope="col">Price</th>
                              <th scope="col">Quantity</th>
                              <th scope="col">Total</th>
                          </tr>
                      </thead>
                      <tbody>
                        @if(count($cartitems)>0)
                          @foreach($cartitems as $item)
                            <tr>
                              <td>
                                  <div class="media">
                                      <div class="d-flex">
                                          <img src="{{Voyager::image((json_decode($item->attributes->image))[0])}}" alt="{{ $item->attributes->image }}" style="width: 150px; height: 100%; object-fit: cover;">
                                      </div>
                                      <div class="media-body">
                                          <p>{{ $item->name }}</p>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <h5>{{ $item->price }}</h5>
                              </td>
                              <td align="center">
                                  {{ Form::open(['action' => ['CartController@update',$item->id] , 'method' => 'PUT']) }}
                                    <input type="number" name="qty" value="{{ $item->quantity }}" align="center" min="1" max="20">
                                    <button type="submit" class="btn btn-primary" style="height: 30px; padding: 2px;margin: 5px;">Update</button>
                                  {{ Form::close() }}
                              </td>
                              <td>
                                  <h5>{{ $item->getPriceSum() }}</h5>
                              </td>
                              <td>
                                {{ Form::open(['action' => ['CartController@destroy',$item->id] , 'method' => 'DELETE']) }}
                                  <button type="submit" class="btn btn-danger">Remove</button>
                                {{ Form::close() }}
                              </td>
                            </tr>    
                          @endforeach
                        @endif
                          <tr class="bottom_button">
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                                  <div class="cupon_text d-flex align-items-center">
                                      <input type="text" placeholder="Coupon Code">
                                      <a class="primary-btn" href="#">Apply</a>
                                      <a class="button" href="#">Have a Coupon?</a>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td>

                              </td>
                              <td>

                              </td>
                              <td>
                                  <h5>Subtotal</h5>
                              </td>
                              <td>
                                  <h5>${{ Cart::getSubTotal() }}</h5>
                              </td>
                          </tr>
                          <tr class="shipping_area">
                              <td class="d-none d-md-block">

                              </td>
                              <td>

                              </td>
                              <td>
                                  <h5>Shipping</h5>
                              </td>
                              <td>
                                  <div class="shipping_box">
                                      <ul class="list">
                                          <li><a href="#">Flat Rate: $5.00</a></li>
                                          <li><a href="#">Free Shipping</a></li>
                                          <li><a href="#">Flat Rate: $10.00</a></li>
                                          <li class="active"><a href="#">Local Delivery: $2.00</a></li>
                                      </ul>
                                      <h6>Calculate Shipping <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
                                      <select class="shipping_select">
                                          <option value="1">India</option>
                                          <option value="2">USA</option>
                                          <option value="3">UK</option>
                                          <option value="3">Russia</option>
                                      </select>
                                      <select class="shipping_select">
                                          <option value="1">Select a State</option>
                                          <option value="2">Select a State</option>
                                          <option value="4">Select a State</option>
                                      </select>
                                      <input type="text" placeholder="Postcode/Zipcode">
                                      <a class="gray_btn" href="#">Update Details</a>
                                  </div>
                              </td>
                          </tr>
                          <tr class="out_button_area">
                              <td class="d-none-l">

                              </td>
                              <td class="">

                              </td>
                              <td>

                              </td>
                              <td>
                                  <div class="checkout_btn_inner d-flex align-items-center">
                                      <a class="gray_btn" href="#">Continue Shopping</a>
                                      <a class="primary-btn ml-2" href="#">Proceed to checkout</a>
                                  </div>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </section>
  <!--================End Cart Area =================-->


@endsection