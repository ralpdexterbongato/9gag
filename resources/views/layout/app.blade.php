<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet"  href="/css/master.css">
        <link rel="stylesheet" href="/icons/css/font-awesome.min.css">
        <link rel="shortcut icon" href="9gaglogo.png">
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <header>
      <div class="header-container">
        <div class="left-header">
          <div class="logo">
          </div>
          <div class="mygif">
          </div>
          <ul class="categories">
            <a href="#"><li>Hot</li></a>
            <a href="#"><li>Trending</li></a>
            <a href="#"><li>Fresh</li></a>
            <a href="#"><li>More <i class="fa fa-caret-down"></i></li></a>
          </ul>
          <ul class="types">
            <a href="#"><li>TV</li></a>
            <a href="#"><li>NSFW</li></a>
            <a href="#"><li>GIF</li></a>
            <a href="#"><li>Get Our App!</li></a>
            <a href="#">
              <li>NSFW Clothing - Sale
                <h2>NEW</h2>
              </li>
            </a>
            <a href="#">
              <li>Video <i class="fa fa-tv"></i>
                <h2>NEW</h2>
              </li>
            </a>
          </ul>
        </div>
        <div class="right-header">
          <li><i class="fa fa-search"></i></li>
          <li>Login</li>
          <li class="SignUpBtn">Sign up</li>
        </div>
      </div>
    </header>
    <body>
      @section('body')
      @show
    </body>
    <footer>
    </footer>
</html>
