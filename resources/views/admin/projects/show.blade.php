@extends('layouts.admin')



@section('content')
    <div class="ms_container">
        <h1>{{ $project->title }}</h1>
        <h5>{{ $project->category }}</h5>
        <p>{{ $project->content }}</p>
        <a class="btn btn-primary" href="{{ route('admin.projects.index') }}">Torna indietro</a>
    </div>
@endsection
