<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> add employee </h1>
    <form action="{{route('store')}}" method="POST">
       @csrf

      <input type="text" name="name" id= "" placeholder="ENTER THE NAME">
      <input type="email" name="email" id= "" placeholder="ENTER THE EMAIL">
      <input type="password" name="password" id= "" placeholder="ENTER THE PASSWORD">
      <select name="is_admin" id="">
        <option value="User">User</option>
        <option value="Admin">Admin</option>
      </select>
      

      <input type="submit">

    </form>
</body>
</html>