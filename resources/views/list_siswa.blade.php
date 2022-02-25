<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <title>List Data Siswa</title>
  </head>
  <body>

   @include('include.navbar')

        <div class="container-fluid">
        <h1 class=" mt-3">{{ $title }}</h1>
        <p class="lead" class="mb-3">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>

        <div class="container-fluid">
              <table id="table_siswa" class="display">
                  <thead>
                      <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Lahir</th>
                          <th scope="col">Hobby</th>
                          <th scope="col">Gender</th>
                          <th scope="col">Agama</th>
                          <th scope="col">Alamat</th>
                          <th scope="col">Telp</th>
                          <th scope="col">Email</th>
                          <th scope="col">Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($siswa as $siswa)
                        <tr>
                            <td>{{ $siswa->id }}</td>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->lahir }}, {{ $siswa->tgl }}</td>
                            <td>{{ $siswa->hobi }}</td>
                            <td>{{ $siswa->jk }}</td>
                            <td>{{ $siswa->agama }}</td>
                            <td>{{ $siswa->alamat }}</td>
                            <td>{{ $siswa->telp }}</td>
                            <td>{{ $siswa->email }}</td>
                            <td>
                                <td><form method="POST" action="{{ route('destroy-siswa',$siswa->id) }}">
                                    <a button type="button" class="btn btn-warning" href="{{ route('edit-siswa',$siswa->id) }}">Edit</button></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        <a button type="button" class="btn btn-primary" href="{{ route('show-bio',$siswa->id) }}">Lihat</button></a>
                                    </form>
                                </td>
                              </tr>
                            </td>
                        </tr>
                      @endforeach
                  </tbody>
              </table>
            </div>

          <a href="tambah" class="btn btn-primary mt-3 mx-3">Tambah Siswa</a>


      	<script>
        $(document).ready( function () {
            $('#table_siswa').DataTable();
        } );
        </script>
</body>
    <!-- Datatables -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
</html>
