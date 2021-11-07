<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Crate new comic</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('comics.store')}}" method="post">
                    @csrf
                    @method('POST')
                    
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
                    </div>
    
                    <div class="form-group">
                      <label for="description">Description</label>
                      <input type="text" name="description" class="form-control" id="description" placeholder="Enter Description">
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Enter price">
                    </div>

                    <div class="form-group">
                        <label for="series">Series</label>
                        <input type="text" name="series" class="form-control" id="series" placeholder="Enter series">
                    </div>

                    <div class="form-group">
                        <label for="sale_date">Sale Date</label>
                        <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Enter sale_date">
                    </div>

                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" name="type" class="form-control" id="type" placeholder="Enter type">
                    </div>
                      
                    
                    <button type="submit" class="btn btn-success my-3">Submit</button>
                </form>
            </div>
        </div>
    </div> 
</body>
</html>
   