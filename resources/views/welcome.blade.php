<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
   
   
</head>
<style>
   html, body{
        background-color: #27296d;
        align-items: center;
        justify-content: center;
        text-align: center;
        height: 100%;
        display: flex; 
        flex-direction: column;
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif

    }
    h1{
        font-size: 3.5rem;
    }
    .container{
       
        color: #f5c7f7;
        align-items: center;
        text-align: center;
        font-size: 3.5rem;
        

    }
   .btn{
        font-size: 3.5rem;
        border-radius: 10px;
        background-color:#a393eb;
        color:#27296d;
        transition: box-shadow 0.3s ease-in-out ;
        box-shadow:#65286b 6px 2px 16px 0px,#f02da87c -6px -2px 16px 0px;
    }
    .btn:hover{
        color: #65286b;
        box-shadow: rgba(240, 45, 169, 0.4) 5px 5px, rgba(240, 46, 170, 0.3) 10px 10px, rgba(240, 46, 170, 0.2) 15px 15px, rgba(240, 46, 170, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 25px 25px;
    }
    
    </style>
<body>
    <div class="container">
        <h1>Add Students And Manage Their Courses 📚📝</h1>
        <a href="./students">
            <button class="btn">Get Started</button>
        </a>
    </div>
    
</body>
</html>