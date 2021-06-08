<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        table tr td,
        table tr th{
            border: 1px solid black;
        }
    </style>
    <a href="{{ URL::route('admin.create') }}">Create new</a>
    <table cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Banner</th>
            <th>Video</th>
            <th></th>
        </tr>
        <tr>
            <td>Avatar</td>
            <td>Trending</td>
            <td><img src="" alt=""></td>
            <td><img src="" alt=""></td>
            <td>
                <a href="">updated</a>
                <a href="">delete</a>
            </td>
        </tr>
    </table>
</body>
</html>