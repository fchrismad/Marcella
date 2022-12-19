<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Marcella | CMS Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Inter&display=swap");
    </style>
  </head>
  <body>
    <div class="container mt-4">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
            <h1>Blog Posts</h1>
            @if(count($posts)>0)
                @foreach ($posts as $post)
                <div class="well">
                    <h3><a href="/posts/{{$post->id}}">
                    {{$post->title}}</a></h3>
                    <small>Tanggal: 
                    {{$post->created_at}}</small>
                </div>
                @endforeach
            @else
                <h3>Tidak ada data</h3>
            @endif
            <br><br>
            <a href="{{ route('posts.create') }}">Create New Post</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>