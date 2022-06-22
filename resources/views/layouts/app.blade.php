<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LiveCRUD') }}</title>

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="/css/app.css" rel="stylesheet">
    {{-- <link href="/css/style.css" rel="stylesheet"> --}}

    <!-- Scripts -->

    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/js/app.js" defer></script>

  </head>
    <body>
      <div id="app">
        {{-- @include('shared/navbar') --}}
        <main class="py-4">
          @yield('content')
        </main>
      </div>
    
      <!-- Scripts -->
      <!-- <script src="{{ mix('/js/app.js') }}" defer></script> -->
      @yield('javascripts')
      @livewireScripts
    </body>
  </html>
  