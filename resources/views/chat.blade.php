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
              <message></message>
              <input  v-model="message" @keyup.enter='send' class="form-control" placeholder="說話嗎" />
            </ul>
      </div>
    </div>
  <script src="{{asset('js/app.js')}}"></script>
  </body>

</html>
