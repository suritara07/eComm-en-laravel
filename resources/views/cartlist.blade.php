@extends('master')
@section('content')
<div class="custom-product">
  <div class="col-sm-10">
    <div class="trending-wrapper">
        <h4>Result for Products</h4>
        <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
        <?php
            $i=1;
        ?>
        @foreach ($products as $item)
        <div class="row searched-item cart-list-devider">
            <div class="col-sm-1">
                <div class="order-text">{{$i++}}.</div>
            </div>
            <div class="col-sm-2">
                <a href="detail/{{$item->id}}">
                    <img class="cartlist-image" src="{{$item->gallery}}">
                </a>
            </div>
            <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <div class="">
                        <h3>{{$item->name}}</h3>
                        <h5>{{$item->description}}</h5>
                    </div>
                </a>
            </div>
            <div class="col-sm-1">
                <a href="detail/{{$item->id}}">
                    <div class="">
                        <h5>price</h5>
                        <h3>{{ number_format($item->price) }}</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 ml-10">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove to Cart</a>
            </div>
        </div>
        @endforeach
        <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
    </div>
  </div>
  </div>
@endsection

