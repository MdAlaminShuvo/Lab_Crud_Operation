@extends('books.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 10 Crud (Create, Read, Update and Delete) </h2>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/book/create')}}" class="btn btn-success btn-sm" title="Add New Book">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Author</th>
                                        <th>Price</th>
                                        <th>ISBN</th>
                                        <th>Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($books as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->author }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->isbn }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>
                                                <a href="{{ url('/book/'.$item->id)}}" class="btn btn-primary btn-sm" title="View Book">
                                                    View
                                                </a>
                                                <a href="{{ url('/book/'.$item->id . '/edit')}}" class="btn btn-info btn-sm" title="Edit Book">
                                                    Edit
                                                </a>
                                                <form action="{{ url('/book/'.$item->id)}}" method="post" style="display:inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm" type="submit" title="Delete Book" onclick="return confirm('Confirm delete?')">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>