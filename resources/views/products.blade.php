@extends('layouts.main')
@section('content')
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

@endsection