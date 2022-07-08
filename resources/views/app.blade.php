<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <!-- As a heading -->
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 text-white">PRODUCTOS</span>
            <form action="/logout" method="POST">
                @csrf
                <a href="#" style="display: inline" onclick="this.closest('form').submit()" class="btn btn-info" role="button">Cerrar sesion </a>

            </form>

        </div>
    </nav>

    <a href="{{ route('products.create') }}" class="btn btn-dark" role="button"
        style="margin-top: 50px; margin-left: 50px"> NUEVO PRODDUCTO</a>

    <div class="container" style="margin-top: 120px">

        <table class="table">


            <thead table-info>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Country</th>
                    <th scope="col">Price</th>
                    <th scope="col">accions</th>

                </tr>
            </thead>
            <tbody class="table-group-divider">

                @foreach ($products as $row)
                    <tr>
                        <th scope="row">{{ $row->id }}</th>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->country }}</td>
                        <td>{{ $row->price }}</td>
                        <td>
                            <div style="display: flex"> 
                                <form action="{{ route('product.destroy', $row->id) }}" method="POST">
                                    @csrf
                                    @method ('delete')
                                    <button type="submit" class="btn btn-danger" role="button">eliminar</button>
                                </form>
    
                                <a href="{{ route('product.edit', $row->id) }}" class="btn btn-success mx-1" role="button">Editar</a>

                            </div>
                            
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>




















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
