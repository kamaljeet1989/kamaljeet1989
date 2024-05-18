<x-layout>
<div class="container-fluid p-5 bg-info text-center text-white">
<div class="row justify-content-center">
<h1 class="display-1">
inserisci un articolo
</h1>
</div>
</div>
<div class="container my-5">
<div class="row justify-content-center">
<div class="col-12 col-md-8">
@if ( $errors -> any())

<div class="aòert alert-danger">
<ul >
@foreach ( $errors ->all() as  $error )
<li> 
{{ $error  }}
</li>
@endforeach 

</ul > 
</div>
@endif

<form class="card p-5 shadow" action="{{ route('article.store') }}" method="POST" encType="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="title">Titolo</label>
    <input type="title" name="title" class="form-control" id="title" value="{{ old('title')  }}"  />
</div>
<div class="mb-3">
    <label for="subtitle">SottoTitolo</label>
    <input type="subtitle" name="subtitle" class="form-control" id="subtitle" value="{{ old('subtitle')  }}"  />
</div>
<div class="mb-3">
    <label for="image">Immagine</label>
    <input type="file" name="image" class="form-control" id="image"   />
    <span claas="small fst-italic" >Dividi ogni tag con la virgola </span>
        </div>
<div class="mb-3">
    <label for="tags">Tags</label>
    <input  name="tags" class="form-control" id="tags"  value="{{ old('tags')  }}"/>
</div>
<div class="mb-3">
    <label for="category">Categoria</label>
    <select  name="category" id="c" class="form-control text-capitalize">
	@foreach ( $categories as  $category )
	<option value="{{ $category->id }}">{{ $category->name }}</option>
	@endforeach
	</select>
	</div>
	<div class="mb-3">
	<label for="body" class="form-label">Corpo del testo</label>
	<textarea name="body" id="body" cols="30" rows="7" class="form-control">{{ old('body')  }}</textarea>

</div>
<div class="mt-2 d-flex justify-content-center">
<button class="btn btn-info text-white">Inserisci un articolo</butto>
</div>
</form>
</x-layout>
