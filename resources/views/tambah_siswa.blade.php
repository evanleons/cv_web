<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    @include('include.navbar')

    <div class="row">
        <div class="container">
            <h1 class"display-4 mt-3">{{ $title }}</h1>
            <p class="lead" class="mb-3">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                <form method="POST" action="store">

                    @csrf

                    @method('POST')
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="lahir">Tempat</label>
                        <input type="text" name="lahir" class="form-control" id="lahir" placeholder="tempat">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tgl">Tanggal lahir</label>
                        <input type="date" name="tgl" class="form-control" id="tgl">
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="hobi">Hobby</label>
                        <input type="text" name="hobi" class="form-control" id="hobi">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="jk">Jenis Kelamin</label>
                            <select name="jk" class="form-control">
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="agama">Agama</label>
                            <select name="agama" class="form-control">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghuchu">Konghuchu</option>
                                <option value="Atheis">Atheis</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                    <label for="alamat">Alamat</label>
                   <textarea name="alamat" cols="149" rows="5"></textarea>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="telp">Telepon</label>
                        <input name="telp" type="text" class="form-control" id="telp" placeholder="Nomor Telepon">
                    </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
