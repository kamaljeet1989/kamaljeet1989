<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('homepage') }}"> AulabPost</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
      @auth
@if (Auth::user()->is_admin)
<li class="nav-item">
<a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard Admin</a> </li>
@endif
@if (Auth::user()->is_revisor)
<li class="nav-item">
<a class="nav-link" href="{{ route('revisor.dashboard') }}">Dashboard revisore</a> </li>
@endif
@if (Auth::user()->is_writer)
<li class="nav-item">
<a class="nav-link" href="{{ route('writer.dashboard') }}">Dashboard redattore</a> </li>
@endif



        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        benvenuto {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li class="nav-item">
      <li class="smaill mt-2" ><a href="{{ route("article.create") }}" >inserisci un articolo</a></li>
      </li>
      <li class="nav-item">
      <li class="smaill mt-2" ><a href="{{ route("article.index") }}" >Tutti gli articoli</a></li>
      </li>

          <li>
        <form class="card p-5 shadow" action="{{ route('logout') }}" id="logout-form" method="POST">
@csrf 
<button type="submit" class="btn nav-link">Logout</button>

</form>
</li>
        </div>
      </li>
      @endauth

      @guest
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        benvenuto ospite
        </a>
        <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <li class="smaill mt-2" ><a href="{{ route("register") }}" >registrati</a></li>
      </li>
      <li class="nav-item">
      <li class="smaill mt-2" ><a href="{{ route("login") }}" >accedi</a></li>
      </li>
      @endguest

</ul>

<form class="d-flex" method="GET" action="{{ route('article.search') }}">
<input class="form-control me-2" type="search" placeholder="Cosa stai cercando?" aria-label="Search" name="query"> <button class="btn btn-outline-info" type="submit">Cerca</button>
</form>

        
  </div>
</nav>