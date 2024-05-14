<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<body>
    <h1>Example View</h1>
    {{-- akses array --}}
    <h3>Name : {{ $user['name'] }}</h3>
    <h3>Email : {{ $user['email'] }}</h3>
</body>
</html>