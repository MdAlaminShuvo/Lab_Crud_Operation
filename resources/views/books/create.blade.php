@extends('books.layout')
@section('content')

<div class="card" style='margin:20px;'>
    <div class="card-header">
        Create New Books
    </div>
    <div class="card-body">
        <form action="{{url('/book')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" class="form-control" type="text" name="name">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input id="author" class="form-control" type="text" name="author">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input id="price" class="form-control" type="text" name="price">
            </div>
            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input id="isbn" class="form-control" type="text" name="isbn">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input id="quantity" class="form-control" type="text" name="quantity">
            </div>
            <div class="form-group" style="margin-top:20px;">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
    </div>
</div>
  
@stop