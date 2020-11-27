<a href="{{ route('posts.create') }}">Criar Novo Post</a>

@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

@foreach ($posts as $post)
  
    <p>{{ $post->title }} </p>
    <a href="{{ route('posts.show',$post->id) }}">Ver</a>
    
@endforeach