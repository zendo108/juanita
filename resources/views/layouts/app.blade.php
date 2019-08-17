<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Juanita</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('inc.navbar')

<main class="container" style="margin-top: 16px">
    @if(Request::is('/'))
        @include('inc.showcase')
    @endif
    <div class="row">
        <div class="col-md-8 col-lg-8">
            @include('inc.messages')
            @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
            @include('inc.sidebar')
        </div>
    </div>

</main><!-- /.container -->
<footer id="footer" class="text-center">
    <p>Copyright <script>document.write(new Date().getFullYear());</script> &copy; ivanaranda.gq</p>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="view-source:https://getbootstrap.com/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
</body>
</html>
