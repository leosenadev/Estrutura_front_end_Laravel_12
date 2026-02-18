<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Astro v5.13.2">
    <title>Album example · Bootstrap v5.3</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
    <script src="https://getbootstrap.com/docs/5.3/assets/js/color-modes.js"></script>
    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <meta name="theme-color" content="#712cf9">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}" />
</head>
<body>
    @include('site.header')
    @yield('conteudo')
    @include('site.footer')
    @include('site.acessibilidade')

    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>