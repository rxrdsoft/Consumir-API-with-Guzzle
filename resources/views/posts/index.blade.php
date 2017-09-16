<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>POST PLACEHOLDER</title>
    <style>
      .title{
        text-align:center;
        padding:1.5em;
        border: 1px solid #fedded;
        border-radius:20px;
        color:#000;
      }
    </style>
</head>
<body>
    <div class="container" style="margin-top:30px">
    <h3 class="title">Publicaciones {{$fecha}}</h3>
      @foreach($posts as $post)
        <div class="panel panel-info">
          <div class="panel-body">
            <a href="posts/{{$post->id}}">{{$post->body}}</a>
          </div>
        </div>
      @endforeach  
    </div>
</body>
</html>