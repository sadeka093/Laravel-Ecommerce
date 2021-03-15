
@extends('master')

@section('content')
<div class="custom-product">
	<div class="row">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    @php  $i=1;  @endphp
     @foreach($products as $item)
    <div class="item {{ $i==1 ? 'active':''}}">
     
      <img class="slider-img" src="{{$item['gallery']}}" alt="c">
      <div class="carousel-caption slider-text">
      <h3>{{$item['name']}}</h3>
        <p>{{$item['description']}}</p>
      </div>
    </div>
    @php  $i++;  @endphp
    @endforeach
    ...
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
	</div>
</div>
@endsection
