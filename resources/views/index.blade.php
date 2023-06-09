@extends('layouts.main')
@section('content')
 <!-- banner -->
 <section class="banner_main">
    <div id="banner1" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
          <li data-target="#banner1" data-slide-to="0" class="active"></li>
          <li data-target="#banner1" data-slide-to="1"></li>
          <li data-target="#banner1" data-slide-to="2"></li>
       </ol>
       <div class="carousel-inner">
          <div class="carousel-item active">
             <div class="container">
                <div class="carousel-caption">
                   <div class="text-bg">
                      <h1> <span class="blu">Welcome <br></span>To Our Sunglasses</h1>
                      <figure><img src="images/banner_img.png" alt="#"/></figure>
                      <a class="read_more" href="#">Shop Now</a>
                   </div>
                </div>
             </div>
          </div>
          <div class="carousel-item">
             <div class="container">
                <div class="carousel-caption">
                   <div class="text-bg">
                      <h1> <span class="blu">Welcome <br></span>To Our Sunglasses</h1>
                      <figure><img src="images/banner_img.png" alt="#"/></figure>
                      <a class="read_more" href="#">Shop Now</a>
                   </div>
                </div>
             </div>
          </div>
          <div class="carousel-item">
             <div class="container">
                <div class="carousel-caption">
                   <div class="text-bg">
                      <h1> <span class="blu">Welcome <br></span>To Our Sunglasses</h1>
                      <figure><img src="images/banner_img.png" alt="#"/></figure>
                      <a class="read_more" href="#">Shop Now</a>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
       <i class="fa fa-arrow-left" aria-hidden="true"></i>
       </a>
       <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
       <i class="fa fa-arrow-right" aria-hidden="true"></i>
       </a>
    </div>
 </section>
 <!-- end banner -->
 <!-- about section -->
 <div class="about">
    <div class="container">
       <div class="row d_flex">
          <div class="col-md-5">
             <div class="about_img">
                <figure><img src="images/about_img.png" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-7">
             <div class="titlepage">
                <h2>About Our Shop</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
             </div>
             <a class="read_more" href="#">Read More</a>
          </div>
       </div>
    </div>
 </div>
 <!-- about section -->
 <!-- Our  Glasses section -->
 <div class="glasses">
    <div class="container">
       <div class="row">
          <div class="col-md-10 offset-md-1">
             <div class="titlepage">
                <h2>Our Glasses</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor
                   e et dolore magna aliqua. Ut enim ad minim veniam, qui
                </p>
             </div>
          </div>
       </div>
    </div>
    <div class="container-fluid">
       <div class="row">



         @foreach ( $products as $product )
            
        
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
             <div class="glasses_box">
                <figure>
                  <a href="{{route('single_product',['id'=>$product->id])}}">
                  <img src="{{('images/'.$product->image)}}" alt="#"/>
                  </a>
               </figure>
                @if($product->sale_price != null)
                <h3><span class="blu">$</span>{{$product->sale_price}}</h3>
                <h3 style="text-decoration: line-through;"><span class="blu">$</span>{{$product->price}}</h3>

                @else
                <h3><span class="blu">$</span>{{$product->price}}</h3>
                @endif
                <p>{{$product->name}}</p>
             </div>
          </div>



          @endforeach




          <div class="col-md-12">
             <a class="read_more" href="#">Read More</a>
          </div>
       </div>
    </div>
 </div>
 <!-- end Our  Glasses section -->
 <!-- Our shop section -->
 <div id="about" class="shop">
    <div class="container-fluid">
       <div class="row">
          <div class="col-md-5">
             <div  class="shop_img">
                <figure><img src="images/shop_img.png" alt="#"/></figure>
             </div>
          </div>
          <div class="col-md-7 padding_right0">
             <div class="max_width">
                <div class="titlepage">
                   <h2>Best SunGlasses  At Our shop</h2>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                   <a class="read_more" href="#">Shop Now</a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end Our shop section -->
 <!-- clients section -->
 <div class="clients">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>What say our clients</h2>
                <p>orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut la</p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-12">
             <div id="myCarousel" class="carousel slide clients_Carousel " data-ride="carousel">
                <ol class="carousel-indicators">
                   <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                   <div class="carousel-item active">
                      <div class="container">
                         <div class="carousel-caption ">
                            <div class="row">
                               <div class="col-md-12">
                                  <div class="clients_box">
                                     <figure><img src="images/our.png" alt="#"/></figure>
                                     <h3>Sandy Mark</h3>
                                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,It is a long established fact  a more-or-less normal distribution of letters,</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="carousel-item">
                      <div class="container">
                         <div class="carousel-caption">
                            <div class="row">
                               <div class="col-md-12">
                                  <div class="clients_box">
                                     <figure><img src="images/our.png" alt="#"/></figure>
                                     <h3>Sandy Mark</h3>
                                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,It is a long established fact  a more-or-less normal distribution of letters,</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="carousel-item">
                      <div class="container">
                         <div class="carousel-caption">
                            <div class="row">
                               <div class="col-md-12">
                                  <div class="clients_box">
                                     <figure><img src="images/our.png" alt="#"/></figure>
                                     <h3>Sandy Mark</h3>
                                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,It is a long established fact  a more-or-less normal distribution of letters,</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
                </a>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end clients section -->
@endsection