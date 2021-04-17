@extends('template.master')
@section('content')
<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-6">

        <form action="{{ route('task.store') }}" method="POST">
            @csrf
            <textarea class="form-control" name="task" id="message-text"></textarea>
            <button type="submit" class="btn btn-success">Concluir</button>
            <a  href="{{ route('task.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>

    </div>
  </div>
</div>
@endsection