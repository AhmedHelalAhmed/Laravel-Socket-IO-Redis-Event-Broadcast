<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body>

    <h1>new users</h1>

    <ul>
        <li v-repeat="user: users">@{{user}}</li>
    </ul>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.15/vue.min.js"></script>
    <script>
        var socket=io("http://localhost:3000/");

        new Vue({

            el: 'body',

            data:{
                users:[]

            },

            ready: function(){

                socket.on('test-channel:UserSignUp',function(data){

                    this.users.push(data.username);
                }.bind(this));
            },
            methods:{

                send: function(e){
                    //alert("send");


                    socket.emit('chat.message',this.message);

                    this.message='';
                    e.preventDefault();


                }
            }
        });
    </script>
    </body>
</html>
