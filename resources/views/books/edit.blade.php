@extends('books.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">
        Edit Books Details
    </div>
    <div class="card-header">

        <form action="{{ url('book/' .$books->id )}}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" class="form-control" type="text" name="name" value="{{ $books->name }}">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input id="author" class="form-control" type="text" name="author" value="{{ $books->author }}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input id="price" class="form-control" type="text" name="price" value="{{ $books->price }}">
            </div>
            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input id="isbn" class="form-control" type="text" name="isbn" value="{{ $books->isbn }}">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input id="quantity" class="form-control" type="text" name="quantity" value="{{ $books->quantity }}">
            </div>
            <div class="form-group" style="margin-top:20px;">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>

    </div>
</div>

@stop