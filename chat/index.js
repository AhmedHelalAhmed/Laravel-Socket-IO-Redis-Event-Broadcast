
var app = require('express')();
var server = require('http').Server(app);

var io= require('socket.io')(server);


server.listen(3000);

app.get('/',function(request, response){

   // response.send('hello world!');

   response.sendFile(__dirname + '/index.html');
});

io.on('connection',function(socket){

    //console.log('A connection was made');


    socket.on('chat.message',function(message){

        //console.log('New message '+ message);

        io.emit('chat.message',message);

    });

    socket.on('disconnect',function(){
        io.emit('chat.message','User has disconnected');
    });
});