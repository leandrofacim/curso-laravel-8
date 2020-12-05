@extends('admin.layouts.app')

@section('title', 'Criar Novo Post')

@section('content')

<h1>Cadastrar Novo Post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @include('admin.posts.partials.form')
</form>

@endsection