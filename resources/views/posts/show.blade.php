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
                <h1>{{$posts->title}}</h1>
                <small>Tanggal: {{$posts->created_at}}</small>
                <p>{{$posts->description}}</p>
                <br>
                <a href="/posts/{{$posts->id}}/edit" class="btn btn-primary">Edit</a>
                <br>
                <form action="{{ route('posts.destroy', $posts->id) }}" method="POST">
                    @method('DELETE')
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $posts->id }}"> <br />
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>