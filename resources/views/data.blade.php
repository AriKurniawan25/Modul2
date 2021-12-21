<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Data</title>
</head>
<body>
    <div class="container-md">
        <h1>Data</h1>
        <table class="table table-hover">
            <tr class="table-info">
                <th>Nama Lengkap</th>
                <th>Kelas</th>
                <th>Kehadiran</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
            @foreach ($data as $siswa)
            <tr>
                <td>{{$siswa->nama}}</td>
                <td>{{$siswa->kelas}}</td>
                <td>{{$siswa->kehadiran}}</td>
                <td>{{$siswa->keterangan}}</td>
                <td>
                    <a href="/edit/{{$siswa->id}}" class="btn btn-warning">Edit</a>
                    <a href="/hapus/{{$siswa->id}}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
        <a href="{{ route('form') }}" class="btn btn-primary">Tambah Data</a>
    </div>
</body>
</html>