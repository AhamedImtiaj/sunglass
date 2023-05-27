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
       
     @foreach ($product_array as $product )
        
     
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mx-auto">
             <div class="glasses_box">
                <figure><img src="{{asset('images/'.$product->image)}}" alt="#"/></figure>

                @if($product->sale_price != null)
                <h3><span class="blu">$</span>{{$product->sale_price}}</h3>
                <h3 style="text-decoration: line-through;"><span class="blu">$</span>{{$product->price}}</h3>

                @else
                <h3><span class="blu">$</span>{{$product->price}}</h3>
                @endif
                <p>{{$product->name}}</p>
                <p>{{$product->description}}</p>
                
                <form method="POST" action="{{route('add_to_cart')}}">

                  @csrf
                  <input type="hidden" name="id" value="{{$product->id}}">
                  <input type="hidden" name="name" value="{{$product->name}}">
                  <input type="hidden" name="price" value="{{$product->price}}">
                  <input type="hidden" name="sale_price" value="{{$product->sale_price}}">
                  <input type="hidden" name="quantity" value="1">
                  <input type="hidden" name="image" value="{{$product->image}}">
                  <input type="submit" value="Add to Cart" class="btn btn-primary mt-3">
                </form>
             </div>
          </div>
          @endforeach


       </div>
    </div>
 </div>
 <!-- end Our  Glasses section -->
@endsection