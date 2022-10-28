<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <h1 class="mb-2">Product</h1>
        <a href="{{ route('product.create') }}" class="btn btn-primary mb-5">Tambah Baru</a>

        @if(session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Brand</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Stock</th>
                <th scope="col">Warehouse</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->brand->name }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->warehouse->name }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('product.edit', $product->id) }}">Update</a>
                        <form action="{{ route('product.destroy', $product->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>