
@extends('master')

@section('content')
<div class="custom-product">



  <div class="col-sm-10">
    <div class="trending-wrapper">
      <h4>Cart List</h4>
<a class="btn btn-success" href="/ordernow">Order Now</a>
<br> <br>
      @foreach($products as $item)
      <div class="row searched-item cart-list-devider">


       <div class="col-sm-3">
         <a href="detail/{{$item->id}}">
          <img class="trending-img" src="{{$item->gallery}}">
        </a>
      </div>

      <div class="col-sm-3">
            <h3>{{$item->name}}</h3>
            <h4>{{$item->description}}</h4>
      </div>


      <div class="col-sm-3">
         <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove From Cart</a>
      </div>


    </div>

    @endforeach
<a class="btn btn-success" href="/ordernow">Order Now</a>
<br> <br>
  </div>
</div>
</div>
@endsection
