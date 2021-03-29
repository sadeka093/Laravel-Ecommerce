
@extends('master')

@section('content')
<div class="custom-product">



  <div class="col-sm-10">
    <div class="trending-wrapper">
      <h4>My Order List</h4>

<br> <br>
      @foreach($orders as $item)
      <div class="row searched-item cart-list-devider">


       <div class="col-sm-3">
         <a href="detail/{{$item->id}}">
          <img class="trending-img" src="{{$item->gallery}}">
        </a>
      </div>

      <div class="col-sm-3">
            <h3>{{$item->name}}</h3>
            <h4>Delivery Status : {{$item->status}}</h4>
            <h4>Payment Status : {{$item->payment_status}}</h4>
            <h4>Payment method : {{$item->payment_method}}</h4>
            <h4>Delevery Address : {{$item->address}}</h4>
      </div>


      <div class="col-sm-3">
         <!--  -->
      </div>


    </div>

    @endforeach

<br> <br>
  </div>
</div>
</div>
@endsection
