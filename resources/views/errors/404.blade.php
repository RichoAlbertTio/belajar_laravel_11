<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }
        .container {
            text-align: center;
        }
        .container h1 {
            font-size: 100px;
            margin: 0;
            color: #333;
        }
        .container p {
            font-size: 24px;
            color: #666;
        }
        .container a {
            text-decoration: none;
            color: #3498db;
            font-size: 20px;
            margin-top: 20px;
            display: inline-block;
        }
        .container a:hover {
            color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>404</h1>
        <p>Page Not Found</p>
        <a href="{{ url('/home') }}">Go Back Home</a>
    </div>
</body>
</html>
