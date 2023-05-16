<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Jurusan Populer Universitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
  </head>
  <body>
    <h2 class="text-center mt-4" style="text-align: center;margin-bottom: 30px">Data Jurusan Populer Universitas</h2>
    <div class="container mt-3">
        <a href="/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
        <table class="table table-striped table-hover table-bordered mt-5" cellspacing="0" width="100%">
            <thead class="table-success">
                <tr>
                    <th style="text-align:center" scope="col">No</th>
                    <th style="text-align:center" scope="col">Nama Jurusan</th>
                    <th style="text-align:center" scope="col">Deskripsi Jurusan</th>
                    <th style="text-align:center" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($JurusanPopuler as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->Namajurusan }}</td>
                        <td>{{ $item->Deskripsijurusan }}</td>
                        <td>
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <a href="{{ '/lihat/'.$item->id }}" class="btn btn-info">Lihat</a>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <a href="{{ '/edit/'.$item->id }}" class="btn btn-warning">Edit</a>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <a onclick="return confirm('Yakin Untuk Menghapus?')" href="{{ '/hapus/'.$item->id }}" class="btn btn-danger">Hapus</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>