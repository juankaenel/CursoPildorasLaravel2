<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Página para agregar usuarios</h1>
<div class="container mt-3"> <!--El enctype es para poder enviar imagenes-->
    <form action="{{action('AdminUsersController@store')}}" method="POST"  enctype="multipart/form-data" >
        @csrf
        <table class="table">
            <tr>
                <td>Nombre:</td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>


            <tr>
                <td>Password:</td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>


            <tr>
                <td>Email:</td>
                <td>
                    <input type="text" name="email">
                </td>
            </tr>

            <tr>
                <td>Verificar email:</td>
                <td>
                    <input type="text" name="email_verified_at">
                </td>
            </tr>

            <tr>
                <td>Rol:</td>
                <td>
                    <input type="text" name="role_id">
                </td>
            </tr>

            {{--                Tabla para la base de datos donde se guardará la imagen, la columna se llama ruta en la base de datos,--}}
            <table>
                <tr>
                    <td>
                        <input accept="image/*" type="file" name="ruta_foto">
                    </td>
                </tr>
            </table>

            <tr>
                <td>
                    <input type="submit" name="enviar" value="Crear usuario">
                </td>
                <td>
                    <input type="reset" name="borrar" value="Borrar info">
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
