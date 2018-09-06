<div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="#">Home</a>
          <a class="nav-link" href="#">New features</a>
          <a class="nav-link" href="#">Press</a>
          <a class="nav-link" href="#">New hires</a>
          @if(Auth::check())
          <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
          <a href="/logout" class="nav-link ">Logout</a>
          @else
          <a href="/login" class="nav-link ml-auto">Login</a>
          <a href="/register" class="nav-link ">Register</a>
          @endif
        </nav>
      </div>
    </div>