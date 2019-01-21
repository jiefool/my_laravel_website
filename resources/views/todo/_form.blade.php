<form action="{{ $actionUrl }}" method="post">
   @csrf

  <label for="basic-url">Title</label>
  <div class="input-group">
    <input name="title" type="text" class="form-control" placeholder="Buy milk" aria-label="Title" value="{{ $todo->title }}" aria-describedby="basic-addon1">
  </div>

  <label for="basic-url">Description</label>
  <div class="input-group">
    <textarea name="description" class="form-control" aria-label="With textarea">{{ $todo->description }}</textarea>
  </div>

  <label for="basic-url">Date</label>
  <div class="input-group date" data-provide="datepicker">
    <input name="date" type="text" class="form-control" value="{{ $todo->date }}">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
  </div>
  <br/>
  <button type="submit" class="btn btn-primary btn-block">{{ $buttonLabel }}</button>

</form>