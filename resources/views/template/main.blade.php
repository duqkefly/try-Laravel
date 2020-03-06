<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <title>@yield('title')</title>
</head>
<body>
    <div class="container-fluid mt-1">
        @yield('content')
        <div class="row">
            <div class="col">
                <div class="footer mt-5">
                    <div class="alert alert-dark" role="alert">
                        A simple dark alert—check it out!
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>