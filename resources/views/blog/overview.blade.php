@extends('layouts.app')

@section('content')
    @foreach($posts as $post)
        <div class="mt-8 p-8">
            <ul role="list" class="divide-gray-100 divide-y flex justify-between p-3">
                <li>{!! $post->title !!}</li>
                <li>{!! $post->content !!}</li>
                <li>{{ $post->created_at }}</li>
            </ul>
        </div>
    @endforeach

@endsection