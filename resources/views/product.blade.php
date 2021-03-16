
@extends('master')

@section('content')
<div class="custom-product">
	
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    @php  $i=1;  @endphp
     @foreach($products as $item)
    <div class="item {{ $i==1 ? 'active':''}}">
     
     <a href="detail/{{$item['id']}}">
        <img class="slider-img" src="{{$item['gallery']}}" alt="c">
      <div class="carousel-caption slider-text">
      <h3>{{$item['name']}}</h3>
        <p>{{$item['description']}}</p>
      </div>
     </a>
    </div>
    @php  $i++;  @endphp
    @endforeach
   
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="trending-wrapper">
  <h1>Tranding Products</h1>
  <div class=" ">
 
     @foreach($products as $item)
    <div class="trending-item">
     <a href="detail/{{$item['id']}}">
      <img class="trending-img" src="{{$item['gallery']}}">
      <div class=" ">
      <h3>{{$item['name']}}</h3>
    
      </div>
    </a>
    </div>
   
    @endforeach
 
  </div>
  
</div>
</div>
@endsection
