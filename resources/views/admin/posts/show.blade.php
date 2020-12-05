@extends('admin.layouts.app')

@section('title', 'Detalhes do Post')

@section('content')
<h1>Detalhes do post {{ $post->title}}</h1>

<ul>
    <li><strong>Título: </strong>{{ $post->title }}</li>
    <li><strong>Conteúdo: </strong>{{ $post->content }}</li>
</ul>

<form action="{{ route('posts.destroy', $post->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">Deletar</button>
</form>
@endsection