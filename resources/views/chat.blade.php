<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <link rel="stylesheet" href="{{assert('css/app.css')}}" />
  </head>
  <body>
    <div class="container">
      <div  class="row" id="app">
          <h1>Chat Room</h1>
      </div>
    </div>
  <script src="{{assert('js/app.js')}}"></script>
  </body>

</html>
