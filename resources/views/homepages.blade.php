<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
        <title> HomePages </title>
        <link rel="stylesheet" href="material/material.min.css">
    <script src="material/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <meta name=viewport content="width=device-width, initial-scale=1">
</head>
<body>


<!-- firebase version 3.9.0 !-->
<script src="js/firebase.js"></script>
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
