<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Form</title>
</head>
<body>
    <div class="container">
            <h1>Form Presensi</h1>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form action="{{route('formsend')}}" method="POST">
                            @csrf
                            <div>
                                <label for="floatingInput">Nama Lengkap</label>
                                <input type="text" class="form-control rounded-top" id="floatingInput" name="nama" required autofocus>
                            </div>
                            <div>
                                <label for="floatingPassword">Kelas</label>
                                <input type="text" class="form-control" id="floatingPassword" name="kelas" required>
                            </div>
                            <div>
                                <label for="kehadiran">Kehadiran</label>
                                <select class="form-control" name="keadiran" id="kehadiran">
                                    <option value="Hadir">Hadir</option>
                                    <option value="Tidak Hadir">Tidak Hadir</option>
                                </select>
                            </div>
                            <div>
                                <label for="keterangan">Keterangan</label>
                                <select class="form-control" name="keadiran" id="keterangan">
                                    <option value="-">-</option>
                                    <option value="Alpa">Alpa</option>
                                    <option value="Izin">Izin</option>
                                    <option value="Sakit">Sakit</option>
                                </select>
                            </div>
                            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>