@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">To Do List</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Description</th>
                          <th scope="col">Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- <tr>
                          <th scope="row">1</th>
                          <td>Buy milk</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Buy fish</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Go to School</td>
                        </tr> -->

                        @foreach($todos as $todo)
                            <tr>
                              <th scope="row">{{ $loop->iteration }}</th>
                              <td>{{ $todo->title }}</td>
                              <td>{{ $todo->date }}</td>
                              <td>
                                <a href="{{ route('todo.id.edit', ['id'=>$todo->id]) }}" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                              </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="4" style="text-align:right">
                                <a href="{{ route('todo.create') }}" class="btn btn-primary">
                                    Add Item
                                </a>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
