<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Product</h1>
    @if ( $errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li> {{$error}} </li>
        @endforeach
    </ul>
        
    @endif
    
    
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <div>
                <label for="">name</label>
                <input type="text" name="name" placeholder="name">
            </div>
            </div>

                <label for="">Quantity</label>
                <input type="text" name="qtr" placeholder="Quantity">
            <div>
                
            </div>    
                <label for="">price</label>
                <input type="text" name="price" placeholder="Price">
            <div>
                
            <div>
                <label for="">description</label>
                <input type="text" name="description" placeholder="description">
            </div><br/>
        </div>
        <div>
            <input type="submit" value="Save new Product">

        </div>
    </form>
</body>
</html>