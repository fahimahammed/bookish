<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome to bookstore</h1>
    <table width="100%" border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
        </tr>

        @foreach ($books as $book)
            <tr>
                <td>{{$book -> id}}</td>
                <td>{{$book -> title}}</td>
                <td>{{$book -> author}}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
