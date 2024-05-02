<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield('header-script')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<header class="navbar navbar-expand-md navbar-dark bd-navbar" style="background-color: #7952b3;">
    <nav class="container-xxl flex-wrap flex-md-nowrap" aria-label="Main navigation">
        <div class="collapse navbar-collapse" id="bdNavbar">
            <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav pt-2 py-md-0">
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2" href="/">Home</a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2" aria-current="true" href="">Docs</a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2" href="">Examples</a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2" href="">Icons</a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2" href="">Themes</a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a class="nav-link p-2" href="">Blog</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="main-container container">
    @yield('content')
</div>
</body>
</html>