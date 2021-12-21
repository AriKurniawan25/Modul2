<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Login</title>
</head>
<body class="text-center">
    <div class="container">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-floating">
                            <input type="email" class="form-control rounded-top" id="floatingInput" placeholder="name@example.com" required autofocus>
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
                        <a href="{{ route('data') }}" class="w-100 btn btn-lg btn-success mt-3">Cek CRUD</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>