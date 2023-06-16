<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>



    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ asset('images/infst2-icon.png') }}">

        <!-- Scripts -->
        <script src="https://unpkg.com/feather-icons"></script>

    @yield('scripts')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index INFST2</title>
</head>
<body>
<div class="container">
    @include('partials.navigation')

    <main>
      <div class="jumbotron">
        <h1 class="display-4">Bienvenido a la página del proyecto</h1>
        <p class="lead">Me da muchisima flojera hacer la vista bonita asi que la haré después del jueves</p>
      </div>

    </main>

    <footer>
      <p>&copy;Todos los derechos reservados, uwu.</p>
    </footer>
  </div>
</body>

</html>