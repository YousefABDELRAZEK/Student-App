<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<style>
    body,html{
       background-color:#27296d;
       align-items: center;
       justify-content: center;
       text-align: center;
       height: 100%;
       display: flex; 
       margin: 0;
       flex-direction: column;
       font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
       

   }
   .container{
       font-size: 4.5rem;
       margin: 20px;
      color: #f5c7f7;
      background-color: #5e63b6;
     border-radius: 10px;
     padding: 100px;
    
    
   }
   input[type="text"]{
       margin-top: 10px;
   font-size: 2rem;
   padding: 20px;
   border : 2px solid #656eeb;

   border-radius: 50px;
   }
   .btn{
       font-size: 3.5rem;
       width: 250px;
       background-color: #f5c7f7;
       border-radius: 10px;
       color: #27296d;
     margin-top: 100px; 
   }
   .btn:hover{
    background-color: #c296c4 ;
        transition: 0.3s ease;
        color: #343793;
   }
.alert {
    padding: 20px;
    margin-bottom: 20px;
    border: 1px solid #f5c7f7;
    border-radius: 5px;
    background-color: #d01414;
    color: #000000;
    font-size: 1.5rem;
}

.alert strong {
    display: block;
    font-size: 1.5rem;
    margin-bottom: 10px;
}

.alert ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.alert ul li {
    margin-bottom: 5px;
}



   </style>
<body>

    @if ($errors->any())
        <div class="alert">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('put')
            <label>Student Name : </label><br>
            <input type="text" name="name" value="{{$student->name}}" placeholder="Edit Name..."><br>
            <label>Course : </label><br>
            <input type="text" name="course" value="{{$student->course}}"placeholder="Edit Course..."><br>
            <input type="submit" value="update" class="btn"><br>
        </form>

    </div>
  

    
</body>
</html>