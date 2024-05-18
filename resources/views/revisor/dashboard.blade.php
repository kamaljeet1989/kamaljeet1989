<x-layout>
<div class="container-fluid p-5 bg-info text-center text-white">
<div class="row justify-content-center">
<h1 class="display-1">
Bentornato, revisore
</h1>
</div>
</div>
@if (session('message'))
<div class="alert alert-success text-center">
{{ session ('message') }}
</div>
@endif
<div class="container my-5">
<div class="row justify-content-center">
<div class="col-12">
<h2>articoli da revisionare</h2> 
<x-articles-table :articles="$unrevisionedArticles" />
</div>
</div>
</div> [
<div class="container my-5">
<div class="row justify-content-center">
<div class="col-12">
<h2>articoli pubblicati</h2>
<x-articles-table :articles="$acceptedArticles" />
</div>
</div>
</div>
<div class="container my-5">
<div class="row justify-content-center">
<div class="col-12">
<h2>articoli respinti</h2>
<x-articles-table :articles="$rejectedArticles" />
</div>
</div>
</div>
</x-layout>