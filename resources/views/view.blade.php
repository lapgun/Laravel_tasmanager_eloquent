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
<table border="1px">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>

    </tr>
    <tr>
        <td>{{$customer->id}}</td>
        <td>{{$customer->name}}</td>
        <td>{{$customer->phone}}</td>
        <td>{{$customer->address}}</td>
    </tr>
</table>

</body>
</html>
