<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Jurusan Populer Universitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="text-center mt-4">Tambah Data</h2>
    <div class="w-50 mx-auto border p-3 mt-5" >
        <form action="/tambah" method="POST">
            @csrf
            <div class="mb-3">
                <label for="Namajurusan" class="form-label">Nama Jurusan</label>
                <input type="text" class="form-control @error('Namajurusan') is-invalid @enderror" id="Namajurusan" name="Namajurusan">
                @error('Namajurusan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Deskripsijurusan" class="form-label">Deskripsi Jurusan</label>
                <input type="text" class="form-control @error('Deskripsijurusan') is-invalid @enderror" id="Deskripsijurusan" name="Deskripsijurusan">
                @error('Deskripsijurusan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/" class="btn btn-dark">Kembali</a>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>