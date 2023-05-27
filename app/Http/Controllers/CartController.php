<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
   public function cart(){
      return view('cart');
   }

   public function add_to_cart(Request $request){
      if ($request->session()->has('cart')){
         $cart = $request->session()->get('cart');
         $products_array_ids = array_column($cart, 'id');
         $id = $request->input('id');

         // Check if product is already in the cart
         if(!in_array($id, $products_array_ids)){
            $name = $request->input('name');
            $image = $request->input('image');
            $price = $request->input('price');
            $quantity = $request->input('quantity');
            $sale_price = $request->input('sale_price');

            if($sale_price != null){
               $price_to_charge = $sale_price;
            } else {
               $price_to_charge = $price;
            }

            $product = array(
               'id' => $id,
               'name' => $name,
               'image' => $image,
               'price' => $price,
               'quantity' => $quantity,
            );

            $cart[$id] = $product;
            $request->session()->put('cart', $cart);
         } else {
            echo "<script>alert('Product Already in Cart');</script>";
         }

         return view('cart');
      } else {
         $cart = array();
         $id = $request->input('id');
         $name = $request->input('name');
         $image = $request->input('image');
         $price = $request->input('price');
         $quantity = $request->input('quantity');
         $sale_price = $request->input('sale_price');

         if($sale_price != null){
            $price_to_charge = $sale_price;
         } else {
            $price_to_charge = $price;
         }

         $product = array(
            'id' => $id,
            'name' => $name,
            'image' => $image,
            'price' => $price,
            'quantity' => $quantity,
         );

         $cart[$id] = $product;
         $request->session()->put('cart', $cart);


         $this->calculateTotalCart($request);
         return view('cart');
      }
   }


   function calculateTotalCart(Request $request){
    $cart = $request->session()->get('cart');
    $total_price = 0;
    $total_quantity = 0;

    foreach ($cart as $id => $product){
        $price = $product['price'];
        $quantity = $product['quantity'];
        $total_price += $price * $quantity;
        $total_quantity += $quantity;
    }

    $request->session()->put('total', $total_price);
    $request->session()->put('quantity', $total_quantity);
}

   }



