<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body>


    @extends('welcome')


    @section('index')
        <div style="justify-content: center " class="d-flex my-5">

          <a href="{{ route('create') }}" type="button" class="btn btn-success ">Add product</a>

        </div>

        

        <div class="row row-cols-1 row-cols-md-3 g-4">
              
          @foreach ($allposts as $post )
            
          <div class="col">


            <a style="text-decoration: none" href="{{ route('show', ['id' => $post->id]) }}">
            <div class="card h-100 w-75 mx-auto">

              <img src={{ $post->product_Img }} class="card-img-top " alt="...">
              <div    class="card-body ">

                <h5 class="card-title d-flex" >
                    <h4 style="color: black"> Product Name </h4><h5> {{ $post->product_name }}</h5>
                </h5>
                <h5 class="card-title d-flex" >
                    <h4 style="color: black"> Product Price </h4><h5>${{ $post->product_price }}</h5> 
                </h5>
                <h5 class="card-title d-flex" >
                    <h4 style="color: black"> Product Type </h4><h5>{{ $post->product_data }}</h5> 
                </h5>
                <h5 class="card-title d-flex" >
                    <h4 style="color: black"> Product Brand </h4> <h5>{{ $post->product_brand }}</h5> 
                </h5>

                <div class="Btns d-flex gap-4 my-4 ">

                  <a href="{{ route('edit', ['id' => $post->id]) }}" type="button" class="btn btn-info">Edit</a>

                    <form method="post" action="{{ route('destroy',['id'=> $post->id]) }}">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  
                
                
                  </div>

            
            
              </div>

            </div>
            </a>
        
        
          </div>
          
          @endforeach
        
        
        
        </div>

    @endsection



</body>

</html>
