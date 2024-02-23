<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/kirimhasilregister" method="POST">
        @csrf
        NIK : <input type="text" name="nik"> 
        Nama : <input type="text" name="nama"> 
        Username : <input type="text" name="username">
        Password : <input type="text" name="password"> 
        Telpon : <input type="text" name="telpon"> 
        Level :
        <select name="level">
            <option value="masyarakat">Masyarakat</option>
            <option value="petugas">Petugas</option>
            <option value="admin">Admin</option>
        </select>
        <input type="submit" value="daftar">
    </form>
</body>
</html>