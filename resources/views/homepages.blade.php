<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
        <title> HomePages </title>
</head>
<body>
<h1> Hello World</h1>
<h2> Hello world</h2>
<h2> Hello world</h2>

<script src="https://www.gstatic.com/firebasejs/3.9.0/firebase.js"></script>
<script>
    // Initialize Firebase

    var config = {
        apiKey: "AIzaSyAgOdcWdysDPxh3M0D8VGvUXH1knHlxCos",
        authDomain: "chat-de9ba.firebaseapp.com",
        databaseURL: "https://chat-de9ba.firebaseio.com",
        projectId: "chat-de9ba",
        storageBucket: "chat-de9ba.appspot.com",
        messagingSenderId: "1008244834502"
    };
    firebase.initializeApp(config);
</script>
</body>
</html>
