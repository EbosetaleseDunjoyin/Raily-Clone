<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Raily Clone</title>
    <link href="https://cdn.prod.website-files.com/64aceaf9cb10fc1c8e4efdbc/64ad5758771455690c6cd002_favicon-32x32.png" rel="shortcut icon" type="image/x-icon">
    <link href="https://cdn.prod.website-files.com/64aceaf9cb10fc1c8e4efdbc/64ad57b8cfe4b6d03ca2342c_111.png" rel="apple-touch-icon">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="./css/app.css" rel="stylesheet"  />
  </head>
  <body>
    <header>
      @include('includes.header')
    </header>

    <main id="body" >
      @yield('content')
    </main>

    <footer>
      @include('includes.footer')
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
    <script src="./js/animate.js"></script>
    @yield('script')
  </body>
</html>