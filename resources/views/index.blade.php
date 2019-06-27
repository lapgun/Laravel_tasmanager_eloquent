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
<h2>Manager Customer</h2>
<td>
    <a href="{{route('viewAdd')}}">
        <button>Add New</button>
    </a>
</td>
<table border="1px">

    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Action</th>
    </tr>
    @foreach($customers as $key => $customer)
        <tr>
            <td>{{++$key}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->phone}}</td>
            <td>{{$customer->address}}</td>
            <td><a href="{{route('customer.showEdit',["id"=>$customer->id])}}">
                    <button>Edit</button>
                </a>

                <a href="{{route('delete',['id'=>$customer->id])}}">
                    <button>Delete</button>
                </a><a href="{{route('view',['id'=>$customer->id])}}">
                    <button>View</button>
                </a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>