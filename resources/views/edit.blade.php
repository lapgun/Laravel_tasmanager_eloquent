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
<form  method="post">
    @csrf
    Name:
    <p><input type="text" placeholder="name" value="{{$customer->name}}" name="name"></p>
    Number Phone:
    <p><input type="text" placeholder="phone"  value="{{$customer->phone}}" name="phone"></p>
    Address:
    <p><input type="text" placeholder="address" value="{{$customer->address}}" name="address"></p>
    <a href="{{route('customer.Edit',['id'=>$customer->id])}}"><button type="submit">Edit</button></a>

</form>
</body>
</html>