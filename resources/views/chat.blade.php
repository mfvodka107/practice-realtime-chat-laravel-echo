<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chat room</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body class="container">
    <h1>welcome to chat room</h1>
    <div id="app">
        <chat-log :messages="messages"></chat-log>
        <chat-composer v-on:messagesent="addMessage"></chat-composer>
    </div>
    
    <script src="js/app.js" charset="utf-8"></script>
</body>
</html>