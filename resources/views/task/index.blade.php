@extends('template.master')
@section('title', 'CRUD - Bootstrap 5')
@section('content')

<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-6">
      <table class="table">
          <thead class="table-success">
              <tr>
                <th scope="col"></th>
                <th scope="col">Tarefa</th>
                <th scope="col">Ação</th>
              </tr>
          </thead>
          <tbody>
            @foreach($taskList as $list)
              <tr>
                <td>{{ $list->id }}</td>
                <td>{{ $list->task }}</td>
                <td>
                  <a class="btn" href="{{ route('task.edit', $list->id) }}"><i class="bi bi-pencil"></i></a>
                  <form action="{{ route('task.destroy', $list->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn"><i class='bi bi-trash'></i></button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
      </table>
    </div>
  </div>
</div>

@endsection