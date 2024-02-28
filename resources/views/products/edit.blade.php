<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>edit Product</h1>
    @if ( $errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li> {{$error}} </li>
        @endforeach
    </ul>
        
    @endif
    
    
    <form method="post" action="{{route('product.update' , ['product' => $product])}}" >
        @csrf
        @method('put')
        <div>
            <div>
                <label for="">name</label>
                <input type="text" name="name" placeholder="name" value="{{$product->name}}">
            </div>
            </div>

                <label for="">Quantity</label>
                <input type="text" name="qtr" placeholder="Quantity" value="{{$product->qtr}}">
            <div>
                
            </div>    
                <label for="">price</label>
                <input type="text" name="price" placeholder="Price" value="{{$product->price}}">
            <div>
                
            <div>
                <label for="">description</label>
                <input type="text" name="description" placeholder="description" value="{{$product->description}}">
            </div><br/>
        </div>
        <div>
            <input type="submit" value="Update">

        </div>
    </form>
</body>
</html>