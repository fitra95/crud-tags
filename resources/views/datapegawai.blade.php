<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Laravel 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>

  <body>
    <h1 class="text-center mb-4">Data Tags</h1>

     <div class="container">
     <a href="/tambahpegawai" class="btn btn-success">Tambah Tags</a>
     <div class="row">
        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
          {{ $message }}
     </div>
     @endif
     <table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">Nama</th>
      <th scope="col">Slug</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php
    $no = 1;
    @endphp
    @foreach ($data as $row)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $row->nama }}</td>
      <td>{{ $row->slug }} </td>
      <td>
        <a href="/tampilkandata/{{  $row->id }}" class="btn btn-info">Edit</a>
        <a href="/delete/{{  $row->id }}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach


  </tbody>
</table>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>