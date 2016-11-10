<!DOCTYPE html>
<html>
  <head>
    <html lang="es">
    <meta name="viewport" content="width=deviced-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    @if( Request::is( Config::get('chatter.routes.home')) )
    <title>Perdidos - Encontrados -  PetMap</title>
    @elseif( Request::is( Config::get('chatter.routes.home') . '/*' ) && isset($discussion->title))
    <title>{{ $discussion->title }} - PetMaṕ</title>
    @else
      <title>PETMAP - @yield('title')</title>
    @endif

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    @yield('css')
  </head>
  <body>

    <div id="app">
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">

          <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>

          {{-- logo  --}}
          <a href="/" class="navbar-brand">
            {{ config('app.name', 'PetMap') }}
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">

        {{-- Derecha --}}
        <ul class="nav navbar-nav">
          <li><a href="/">Home</a></li>
          <li><a href="faqs">FAQs</a></li>
          <li><a href="perdido-encontrado">Perdidos y Encontrados</a></li>
        </ul>


        <ul class="nav navbar-nav navbar-right">

            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Registrate</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('/logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>

  <!-- fin del nav -->
    @yield('content')
  </div>

  <script src="/js/app.js"></script>
  @yield('js')
</body>

</html>
