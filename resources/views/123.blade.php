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
    <form method="post" action="{{route('calculate')}}">
        @csrf
        <p><input type="text" name="Description" placeholder="Product Description"></p>
        <p><input type="text" name="Price" placeholder="List Price"></p>
        <p><input type="text" name="Discount" placeholder="Discount Percent"></p>
        <p><input type="submit" value="Calculate Discount"></p>
    </form>
</body>
</html>
