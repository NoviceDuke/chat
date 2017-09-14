<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <style>
      .list-group{
        overflow-y: scroll;
        height: auto;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div  class="row" id="app">
          <div class=" offset-4 col-4 ">
            <ul class="list-group  " vue-chat-scroll>
              <li class="list-group-item active">Chat room</li>
              <message v-for=" value in chat.message" :key=value.index  color='warning'>
                @{{ value }}
              </message>
            </ul>
            <input  v-model="message" @keyup.enter='send' class="form-control" placeholder="說話嗎" />
          </div>
      </div>
    </div>
  <script src="{{asset('js/app.js')}}"></script>
  </body>

</html>
