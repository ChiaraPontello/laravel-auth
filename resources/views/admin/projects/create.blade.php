@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Create</h1>
        <form action="{{ route('admin.projects.store')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                required maxlength="200" minlength="3" value="{{old('title')}}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="body">Body</label>
            <textarea  class="form-control @error('body') is-invalid @enderror" name="body" id="body"
                cols="30" rows="10">
                {{old('body')}}
            </textarea>
            @error('body')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex">
            <div class="me-3">
                <img id="previewImage" width="100" src="https://via.placeholder.com/300x200">
            </div>

        <div class="mb-3">
            <label for="image">Image</label>
            <input type="file"  class="form-control @error('image') is-invalid @enderror" name="image" id="image" value="{{old('image')}}"
                cols="30" rows="10"></textarea>
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
    </section>
@endsection
