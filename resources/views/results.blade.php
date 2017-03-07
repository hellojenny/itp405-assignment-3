<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Results</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> 
  </head>
  <body>
    <div id="wrap">
      <a href="/dvds/search"><button>Back to Search</button></a>
      <h1>DVD Search: {{$title}}</h1>
      <ul>
        @foreach ($dvds as $dvd)
        <li><strong>{{$dvd->title}}</strong>
          <li style="margin: 0 0 20px 20px">{{$dvd->genre_name}}. Rated {{$dvd->rating_name}}.</li>
        @endforeach
      </ul>
    </div>
  </body>
</html>
