<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
  </head>
  <body>
    <div class="container">
      <div  class="row" id="app">

            <ul class="list-group offset-4 col-4 ">
              <li class="list-group-item active">Chat room</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Morbi leo risus</li>
              <li class="list-group-item">Porta ac consectetur ac</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
      </div>
    </div>
  <script src="{{asset('js/app.js')}}"></script>
  </body>

</html>
