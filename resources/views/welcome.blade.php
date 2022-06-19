@extends('layouts.main')

@section('title','Mangá Project - Online')

@section('content')

<div id="search-container" class="col-md-12">
   <h1>search for mangás</h1> 
   <form action="">
    <input type="text" id="search" name="search" class="form-control" placeholder="Search ....">
   </form>
</div>
<div id="books-container" class="col-md-12">
    <h2>Other Mangas</h2>
    <p class="subtitle">Find more mangas</p>
    <div id="cards-container" class="row">
        @foreach($mangas as $manga)
        <div class="card col-md-3">
            <img src="{{$manga->foto}}" alt="{{$manga -> name}}">
           <div class="card-body">
               <p class="card-date">18/06/2022</p>
                <h5 class="card-name">{{ $manga->name }}</h5>
                <p class="card-status">status:{{$manga->status}}</p>
		<p class="card-description">{{ $manga->description }}</p>
                <a href="a" class="btn btn-primary">read more</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
   
@endsection