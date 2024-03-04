<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students | {{ env('APP_NAME') }}</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fontawesome/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="container-fluid mt-4">
            <div class="card">
                <div class="card-header">Data Siswa
                    <a href="/student/add" type="button" style="float:right" class="btn btn-primary "><i class="fas fa-plus mr-2"></i>Tambah</a>
                </div>
                <div class="card-body">
                @if(session('notifikasi'))
                    <div class="alert alert-{{ session('type') }}">
                        {{ session('type') }}
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <th>No.</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Prodi</th>
                                <th>#</th>
                            </thead>
                            <tbody>
                                @forelse ( $students as $index => $data )
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $data->nim }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->prodi }}</td>
                                    <td>
                                        <a href="/student/edit/{{ $data->nim }}" class="btn btn-sm
 btn-warning mr-1"> <i class="fas fa-edit mr-2"></i> Edit</a>
                                        <form method="POST" action="/student/delete/{{ $data->nim }}">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger mr-1"><i class="fas
 fa-trash-alt mr-2"></i> Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td rowspan="100%">Tidak ada data untuk ditampilkan !</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.
 com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.
 com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>