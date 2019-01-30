@extends('layouts.master')


@section('content')

    <a href="{{ route('create-link') }}">Add link</a>

    <div class="container" style="padding: 50px;">
        <div class="row">
        @foreach ($links as $link)

            <div class="card text-center" style="width: 18rem;">
                <div class="card-header">
                    {{ $link->title }}
                </div>
                    <div class="card-body">
                        <a href="{{ $link->url }}">{{ $link->url }}</a>
                        <p>{{ $link->description }}</p>
                                        <form method="POST" action="/link-verwijderen/{{ $link->id }}">
                    @method('DELETE')
                    @csrf
                    
                    <button type="submit" class="btn btn-primary">Delete project</button>

                </form>  
                    </div>
            </div>
        @endforeach
    </div>
    </div>
@endsection