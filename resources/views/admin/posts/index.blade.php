<a href="{{ route('posts.create') }}">Criar Novo Post</a>
@foreach ($posts as $post)
    <p>{{ $post->id }}</p>
    <p>{{ $post->title }}</p>
    <p>{{ $post->content }}</p>
@endforeach