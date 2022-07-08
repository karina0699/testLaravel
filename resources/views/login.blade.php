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
        <a href=""  class="btn btn-dark" role="button">Register</a>
    </div>
  </nav>


  <div class="container" style="margin-top: 120px">

    <form class="row g-3"  method="POST">
        @csrf
        <div class="col-12">
            <label for="inputEmail3" class="col-sm-2 col-form-label" required>Gmail</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="col-12">
            <label for="inputPassword3" class="col-sm-2 col-form-label" required>Password</label>
            <input type="passsword" class="form-control" name="password">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
      </form>

  </div>



  


 

  




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>