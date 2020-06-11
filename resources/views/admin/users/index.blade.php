<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Página principal del administrador</h1>
<table class="table-borderless" border="2" width="800">
    <tr>
        <th>Id</th>
        <th>Rol ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Creado</th>
        <th>Actualizado</th>
        <th>Foto</th>
    </tr>
    @if($users)
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->role_id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
                {{--Si el usuario tiene foto mostrame la foto sino mostrame 'sin foto' --}}
                @if($user->foto)
                    <td><img src="/images/{{$user->foto->ruta_foto}}" width="150"></td>
                @else
                    <td>Sin foto</td>
                @endif
            </tr>
        @endforeach
    @endif
</table>

</body>
</html>
