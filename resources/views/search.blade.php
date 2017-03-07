<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Search</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet"> 
  </head>
  <body>
	  <div id="wrap">
	    <h1>Search DVD Titles</h1>
	    <form action="/dvds" method="get">
	      <input type="text" name="title" placeholder="DVD Title">
	      <button type="submit">Search</button>
	    </form>
	</div>
  </body>
</html>
