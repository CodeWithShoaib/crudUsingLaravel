<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <form  method="post" class="mt-4 container">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name"  placeholder="Name">
          
        </div>
        <div class="form-group">
          <label for="city">City</label>
          <input type="text" class="form-control" name="city"  placeholder="city">
          
        </div>
        <div class="form-group">
          <label for="name">marks</label>
          <input type="text" class="form-control" name="marks">
          
        </div>
        <input type="submit" value="submit" class="btn btn-primary">
    </form>

    <div class="heading">
<h1 class="text-center text-danger">studentlist</h1>
    </div>
    <table class="table container">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>City</th>
                <th>Marks</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $item)
                
            <tr>
                
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->city}}</td>
                <td>{{$item->marks}}</td>
                <td><a href="{{url('destroy',[$item->id])}}" class="btn btn-danger">delete</a>
                <a href="{{url('edit',$item->id)}}" class="btn btn-success">Edit</a></td>
                
            </tr>
            @endforeach
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>