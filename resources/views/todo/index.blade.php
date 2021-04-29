<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{dd($data)}}
@foreach ($data as $item)
<p>
    <h2>{{$item["id"]}}</h2>
    <h2>{{$item["title"]}}</h2>
    <h4>{{$item["body"]}}</h4>
</p>
@endforeach
</body>
</html>
