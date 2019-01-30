@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-12">

			<div class="panel panel-default">
			  <!-- Default panel contents -->
			  <div class="panel-heading">Panel heading</div>

			  <!-- Table -->
			  <table class="table">
			    <thead>
			    	<tr>
			    	</tr>
			    </thead>
			    <tbody>
			    	@foreach($users as $user)
				    	<tr>
				    		<td>
				    			{{$user->name}}
				    		</td>

				    		<td>
				    			{{$user->email}}
				    		</td>
				    			
				    		<td>
				    			@if($user->is_admin) 
				    				admin
				    			@else 
				    				ordinary
				    			@endif
				    		</td>
				    	</tr>
			    	@endforeach
			    </tbody>
			  </table>
			</div>
		</div>
	</div>
</div>



@endsection