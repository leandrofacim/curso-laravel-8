@extends('admin.layouts.app')

@section('title', 'Editar Post')
    
@section('content')
<h1>Editar Post <strong>{{ $post->title }}</strong></h1>

<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @method('PUT')
    @include('admin.posts.partials.form');
</form>
@endsection