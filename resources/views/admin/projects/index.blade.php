@extends('layouts.admin')



@section('content')
    <div class="ms_container">
        <a class="btn btn-primary"href="{{ route('admin.projects.create') }}">
            Crea nuovo progetto
        </a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Categoria</th>
                <th scope="col">Slug</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th>{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->category }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>
                        <a class="btn btn-primary"href="{{ route('admin.projects.show', ['project' => $project->id]) }}">
                            Mostra
                        </a>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
