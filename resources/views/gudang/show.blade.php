<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Warehouse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <h1>{{ $warehouse->name }}</h1>

        <table class="table">
            <tr>
                <th scope="col">Name</th>
                <td>{{ $warehouse->name }}</td>
            </tr>
            <tr>
                <th scope="col">Address</th>
                <td>{{ $warehouse->address }}</td>
            </tr>
            <tr>
                <th scope="col">Created at</th>
                <td>{{ $warehouse->created_at }}</td>
            </tr>
            <tr>
                <th scope="col">Last updated at</th>
                <td>{{ $warehouse->updated_at }}</td>
            </tr>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>