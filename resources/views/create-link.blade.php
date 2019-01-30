@extends('layouts.master')


@section('content')
    <h2>Create link</h2>

    <form action="/link-opslaan" method="POST">
        @csrf

        <label for="title">
            Title:
            <br>
            <input type="text" name="title" placeholder="Link title" value="{{ old('title') }}">
        </label>
        <br>
        <label for="url">
            Url:
            <br>
            <input type="text" name="url" placeholder="Link url" value="{{ old('url') }}">
        </label>
        <br>
        <label for="description">
            Description:
            <br>
            <textarea name="description" placeholder="Link description" value="">{{ old('description') }}</textarea>
        </label>
        
        <button type="submit" class="btn btn-primary">Submit</button>

                @if ($errors->any())
        <div style="background-color:red; color: white;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif



    </form>
@endsection