@extends('welcome')


@section('form_edit')

<form method="post" action="{{route('update',["id" => $post->id ])}}" class="m-5">
    @csrf  
    @method('PUT')
    
  <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">product_name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" value="{{ $post->product_name }}" name="product_name" id="inputEmail3">
      </div>
    </div>

      
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">product_Price</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" value="{{ $post->product_price }}" name="product_Price" id="inputEmail3">
        </div>
      </div>

      

      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">product_Data</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" value="{{ $post->product_data }}" name="product_Data" id="inputEmail3">
        </div>
      </div>

      

      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">product_brand</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" value="{{ $post->product_brand }}" name="product_brand" id="inputEmail3">
        </div>
      </div>
  


      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">product_Img</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" value="{{ $post ->product_Img }}" name="product_Img" id="inputEmail3">
        </div>
      </div>

      
    <button type="submit" class="btn btn-primary w-100 mx-auto">edit produc</button>
 
</form>
@endsection