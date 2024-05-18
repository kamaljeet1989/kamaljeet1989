<x-layout>

<div class="container-fluid p-5 bg-info text-center text-white">
<div class="row justify-content-center">
<h1 class="display-1">
login
</h1>
</div>
</div>
<div class="container my-5">
<div class="row justify-content-center">
<div class="col-12 col-md-8">
    @if ( $errors -> any())

<div class="aòert alert-danger">
<ul >
@foreach ( $errors -> all() as  $error )
<li> 
{{ $error  }}
</li>
@endforeach 

</ul > 
</div>
@endif

<form class="card p-5 shadow" action="{{ route('login') }}" method="POST">
    @csrf

<div class="mb-3">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="email" value="{{ old('name') }}"  />
</div>
<div class="mb-3">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" />
</div>

<div>
<button class="btn bg-info text-white">Accedi</button>
<p class="smaill mt-2" >non sei registrato ? <a href="{{ route('register') }}" >clicca qui </a></p>
</div>
</form>

</div>
</div>
</div>  
</x-layout>