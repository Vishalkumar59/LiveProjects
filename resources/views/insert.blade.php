<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @csrf
    <form method='post' action="{{route('data.store')}}">
NAME: <input type="text" name="name"><br><br>
CLASS: <input type="number" name="class"><br><br>
<input type="submit">
    </form>
</body>
</html>