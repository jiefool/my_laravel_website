@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-4 offset-md-4">
      <div class="card" style="width: 20rem;">
        <div class="card-body">
          <h3>To Do</h3>
          @include('todo._form', ['todo'=>$todo, 'actionUrl'=>$actionUrl, 'buttonLabel'=>'Create'])
        </div>
      </div>
    </div>
  </div>
</div>

@endsection