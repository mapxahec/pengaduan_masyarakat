<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>LOGIN ADMIN</h1>

    <p>{{ session()->get('pesan') ?? '' }}</p>

    <form action="/login-admin" method="post">
        @csrf
       Username :  <input type="text" name="username">
       Password :  <input type="text" name="password">
       <input type="submit" value="LOGIN">
    </form>
</body>
</html>
