<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Comic Index</title>
</head>
<body>
    @yield('navbar')

    <table class="table">
        <thead>
          <tr>
            <th scope="col">cover</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">price</th>
            <th scope="col">series</th>
            <th scope="col">sale_date</th>
            <th scope="col">type</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <th scope="row"><img src="{{$comic->thumb}}" alt=""></th>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td>
                        <a class="btn btn-warning" href="#">Dettagli</a>
                        <br>
                        <a class="btn btn-success" href="#">Modifica</a>
                        <br>
                        <a class="btn btn-danger" href="#">Elimina</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
