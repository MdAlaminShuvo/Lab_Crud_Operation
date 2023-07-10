@extends('books.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">
        Books Details
    </div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Name : {{ $books->name }}</h5>
            <p class="card-text">Author : {{ $books->author }}</p>
            <p class="card-text">Price : {{ $books->price }}</p>
            <p class="card-text">ISBN : {{ $books->isbn }}</p>
            <p class="card-text">Quantity : {{ $books->quantity }}</p>
        </div>
        </hr>
    </div>
</div>