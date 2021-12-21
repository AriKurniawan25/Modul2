<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Edit</title>
</head>
<body>
    <div class="container">
            <h1>Form Presensi</h1>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form action="/edit/{{$edit->id}}" method="POST">
                            @csrf
                            <div>
                                <label for="floatingInput">Nama Lengkap</label>
                                <input type="text" class="form-control rounded-top" id="floatingInput" name="nama" value="{{$edit->nama}}" required>
                            </div>
                            <div>
                                <label for="floatingPassword">Kelas</label>
                                <input type="text" class="form-control" id="floatingPassword" name="kelas" value="{{$edit->kelas}}" required>
                            </div>
                            <div>
                                <label for="kehadiran">Kehadiran</label>
                                <select class="form-control" name="keadiran" id="kehadiran">
                                    <option value="Hadir" @if ($edit->kehadiran == 'Hadir') selected @endif>Hadir</option>
                                    <option value="Tidak Hadir" @if ($edit->kehadiran == 'Tidak Hadir') selected @endif>Tidak Hadir</option>
                                </select>
                            </div>
                            <div>
                                <label for="keterangan">Keterangan</label>
                                <select class="form-control" name="keadiran" id="keterangan">
                                    <option value="-" @if ($edit->keterangan == '-') selected @endif>-</option>
                                    <option value="Alpa" @if ($edit->keterangan == 'Alpa') selected @endif>Alpa</option>
                                    <option value="Izin" @if ($edit->keterangan == 'Izin') selected @endif>Izin</option>
                                    <option value="Sakit" @if ($edit->keterangan == 'Sakit') selected @endif>Sakit</option>
                                </select>
                            </div>
                            <button class="w-100 btn btn-lg btn-success mt-3" type="submit">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>