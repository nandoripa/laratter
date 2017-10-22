@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center">
        <h1>Laratter</h1>
        <nav>
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            </ul>
        </nav>
    </div>
    <div class="row">
        <form action="/messages/create" method="post">
            <div class="form-group">
                {{ csrf_field() }}
                <input type="text" name="message" class="form-control @if($errors->has('message')) is-invalid @endif"
                       placeholder="What's happens?"/>
                @if($errors->has('message'))
                    @foreach($errors->get('message') as $error)
                        <div class="invalid-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </form>
    </div>
    <div class="row">
        @forelse($messages as $message)
            <div class="col-6">
                <img src="{{ $message->image }}" alt="Message banner" class="img-thumbnail">
                <p class="card-text">
                    {{ $message->content }}
                    <a href="/messages/{{ $message->id }}">Read more</a>
                </p>
            </div>
        @empty
            <p>There is no highlighted messsages</p>
        @endforelse
    </div>
@endsection

