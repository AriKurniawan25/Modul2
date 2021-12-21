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
    <table class="table">
        <tr>
            <th>Nama Lengkap</th>
            <th>Kelas</th>
            <th>Kehadiran</th>
            <th>Keterangan</th>
        </tr>
        @foreach ($data as $siswa)
            <tr>
                <td>{{$siswa->nama}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>