@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>{{$project->title}}</h1>
        <p>{{$project->body}}></p>
        <img src="{{asset('storage/' . $project->image)}}" alt="{{$project->title}}">
        <div class="d-flex">
            <form action="{{ route('admin.projects.destroy', $project->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" data-item-title="{{$project->title}}" class="cancel-button btn btn-danger">
            Delete</button>
            </form>
            <a class="btn btn-primary ms-2" href="{{route('admin.projects.edit', $project->id)}}">Edit</a>
            <a class="btn btn-warning ms-2" href="{{route('admin.projects.index')}}">Back</a>
        </div>
    </section>

@endsection
