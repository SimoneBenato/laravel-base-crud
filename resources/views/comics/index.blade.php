@foreach ($comics as $comic)
<div>
    <div>
        {{$comic->thumb}}
    </div>
    <h3>{{$comic->title}}</h3>
    <p>{{$comic->description}}</p>
    <p>{{$comic->price}}</p>
    <p>{{$comic->series}}</p>
    <p>{{$comic->sale_date}}</p>
    <p>{{$comic->type}}</p>
</div>    
@endforeach