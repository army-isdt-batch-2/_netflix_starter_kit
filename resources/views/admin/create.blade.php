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
    <form action="" method="">
        @csrf

        <input type="text" name="title" required placeholder="Title">
        <select name="category"> 
            <option>Top 10 in the Philippines today</option>
            <option>Trending Now</option>
            <option>Western Movies</option>
            <option>Suspenseful Movies</option>
            <option>Comedies</option>
            <option>Sci-Fi Thrillers</option>
            <option>Only on Netflix</option> 
        </select>
        <input type="file" name="file1" required placeholder="Title">
        <input type="file" name="file2" required placeholder="Title">
        <button>Save</button>
    </form>
</body>
</html>