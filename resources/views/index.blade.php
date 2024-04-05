<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>


<body>
   {{-- @php
      dd($user); 
   @endphp --}}

    <h1> All Employees Of Our Company</h1>

    <br>
    <a href="{{route('users')}}">Show Users List</a>
    <br><br>
    





    <a href="{{route('admins')}}">Show Admins List</a>
    <br><br>
    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Admin/User</th>
          </tr>
        </thead>
        <tbody>
           @foreach ($user as $worker)
           <tr>
               <td>{{$worker->id}}</td>
               <td>{{$worker->name}}</td>
               <td>{{$worker->email}}</td>
               <td>{{$worker->password}}</td>
               <td>{{$worker->is_admin}}</td>
               <td>
                @if(Auth::User()['is_admin'])
                 <a href="{{route('edit',$worker->id)}}">Edit</a>

                 <form action="{{ROUTE('delete',$worker->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input value="Delete" type="submit" value="Submit" style="background-color: rgb(211, 13, 13); color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">

                 </form>
                 @endif
               </td>
           </tr>
           @endforeach
        
        </tbody>
      </table>
</body>
</html>