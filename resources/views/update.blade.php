<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <!-- As a heading -->
<nav class="navbar bg-dark">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1 text-white">Crear nuevo producto</span>

    </div>
  </nav>

  <a href="{{ route('products') }}"  class="btn btn-dark" role="button" style="margin-top: 50px; margin-left: 50px">volver</a>

  <div class="container" style="margin-top: 120px">
     <h4>ACTUALIZAR PRODUCCTO {{$product->id}}</h4>

    <form class="row g-3" action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="col-12">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
            <input type="text" class="form-control" name="title" value="{{$product->title}}">
        </div>
        <div class="col-12">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Country</label>
            <input type="text" class="form-control" name="country" value="{{$product->country}}">
        </div>
        <div class="col-12">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
            <input type="number" class="form-control" name="price" value="{{$product->price}}">
          </div>
        <div class="col-12">
          <button type="submit" class="btn btn-dark">Actualizar</button>
        </div>
      </form>

  </div>



  


 

  




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>