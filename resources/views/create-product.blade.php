@extends('templates.layout')

@section('title', 'Create')

@push('name')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('header')
    <a class="btn btn-secondary" href="{{ route('PageShowProducts') }}">Show Products</a>
@endsection

@section('main')
    <section class="my-4">
        <h3>Create Product</h3>
    </section>

    <section class="d-flex justify-content-center my-4">
        <form class="bg-primary bg-opacity-25 border border-4 border-primary rounded-2 p-3 d-flex flex-wrap flex-column gap-3"
            action="{{ route('Create') }}" method="post">
            @csrf
            <div>
                <label>Name:</label>
                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
            </div>
            <div>
                <label>Price:</label>
                <input class="form-control" type="number" name="price" value="{{ old('price') }}">
            </div>
            <div>
                <label>Description:</label>
                <textarea class="form-control" name="description" cols="30" rows="10">{{ old('description') }}</textarea>
            </div>
            <div class=" text-end">
                <button class="btn btn-primary" type="submit">Create</button>
            </div>
        </form>
    </section>
@endsection
