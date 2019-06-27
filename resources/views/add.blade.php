<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" style="border: 1px; width: 300px">
    @csrf
    Name:
    <p><input type="text" placeholder="name"  name="name"></p>
    Number Phone:
    <p><input type="text" placeholder="phone"  name="phone"></p>
    Address:
    <p><input type="text" placeholder="address" name="address"></p>
    <a href="{{route('add')}}"><button type="submit">Add</button></a>
</form>
</body>
</html>
