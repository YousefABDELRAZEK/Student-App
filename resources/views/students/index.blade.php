<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
</head>
<style>
    body,html{
        background-color:#27296d;
        align-items: center;
        justify-content: center;
        text-align: center;
        height: 100%;
        display: flex; 
        flex-direction: column;
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        

    }
    .btn{
        font-size: 3.5rem;
        width: 250px;
        background-color: #f5c7f7;
        border-radius: 10px;
        color: #27296d;
    }
    .table{
        font-size: 4.5rem;
        margin: 20px;
       color: #f5c7f7;
       background-color: #5e63b6;
      border-radius: 10px;
     
       border-collapse: collapse;
      
    }
    .tbl{
        border: 3px solid #f5c7f7;
        border-radius: 10px;
        width: 100%;
        margin: auto;
      
        

    }
    .tbl th, .tbl td{
        padding: 20px;
        border: 2px solid #f5c7f7;

    }
    .tbl th{
       background-color: #ca98cc;
       color:#585ca8
    }
    .edit{
        font-size: 3rem;
        width: 250px;
        background-color: #f5c7f7;
        border-radius: 10px;
        color: #27296d;
    }
    .delete{
        font-size: 3rem;
        width: 250px;
        background-color: #f5c7f7;
        border-radius: 10px;
        color: #27296d;
        
    }
    .edit:hover ,.delete:hover,.btn:hover{
        background-color: #c296c4 ;
        transition: 0.3s ease;
        color: #343793;
    }
    /* public/css/app.css */
.alert {
    padding: 20px;
    margin-bottom: 20px;
    border: 1px solid #f5c7f7;
    border-radius: 5px;
    background-color: #07de35;
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
    <div class="divv">
        <a href="{{ route('students.create') }}">
            <button type="button" class="btn">Add</button>
        </a>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="table">
        <table class="tbl" border="2">
            <tr>
                <th>NO.</th>
                <th>Name</th>
                <th>Course</th>
                <th>Actions</th>
            </tr>
            @foreach ($students as $student)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->course }}</td>
                <td>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                        <a href="{{ route('students.edit', $student->id) }}">
                            <button type="button" class="edit">Edit</button>
                        </a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>