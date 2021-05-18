<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
      @foreach ($movies as $movie)
      <h1>{{$movie->title}}</h1>
      <h2>{{$movie->original_title}}</h2>
      <h3>{{$movie->nationality}}</h3>
      <p>{{$movie->date}}</p>
      <p>{{$movie->vote}}</p>
      @endforeach
    </body>
</html>
