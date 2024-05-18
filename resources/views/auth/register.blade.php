<x-layout>

<div class="container-fluid p-5 bg-info text-center text-white">
<div class="row justify-content-center">
<h1 class="display-1">
Register
</h1>
</div>
</div>
<div class="container my-5">
<div class="row justify-content-center">
<div class="col-12 col-md-8">
    @if ( $errors -> any())

<div class="alert alert-danger">
<ul >
@foreach ( $errors ->all() as  $error )
<li> 
{{ $error  }}
</li>
@endforeach 

</ul > 
</div>
@endif

<form class="card p-5 shadow" action="{{ route('register') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="username">Username</label>
    <input type="username" name="name" class="form-control" id="username" value="{{ old('name')  }}"  />
</div>
<div class="mb-3">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="email" value="{{ old('name') }}"  />
</div>
<div class="mb-3">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" />
</div>
<div class="mb-3">
    <label for="password_confirmation">Conferma Password</label>
    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"   />
</div>
<div>
<button class="btn bg-info text-white">Registrati</button>
<p class="smaill mt-2" >registrato ? <a href="{{ route('login') }}" >clicca qui </a></p>
</div>
</form>

</div>
</div>
</div>  
</x-layout>