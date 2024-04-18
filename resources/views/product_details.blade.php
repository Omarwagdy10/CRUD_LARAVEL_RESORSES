@extends('welcome')


@section('view_products')

<div class="card" style="width: 18rem;">
    <img src="{{$post ->product_Img}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Product Name: {{$post->product_name}}</h5>
        <h5 class="card-title">Product Price: ${{$post->product_price }}</h5>
        <h5 class="card-title">Product Type: {{$post->product_data}}</h5>
        <h5 class="card-title">Product Brand: {{$post->product_brand}}</h5>
        <a href="{{ route('index') }}" type="button" class="btn btn-primary">Return to all products </a>

      </div>
  </div>



@endsection