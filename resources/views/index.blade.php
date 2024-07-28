<!DOCTYPE html>
<html>
<head>
    <title>Mi Pagina Web</title>
</head>
    <body>
        @if(session('usuario_creado'))
            <p>{{ session('usuario_creado') }}</p>
        @endif
        <h1>Bienvenidos a mi pagina web!</h1>
        <p>Porfavor introduzca sus credenciales</p>

            <form action="{{route('form.submit')}}"method=POST>
            @csrf 
            <label for="email">Correo Electrónico:</label><br>
                <input type="email" id="email" name="email" required><br><br>

                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre" required><br><br>

                <label for="fecha_de_nacimiento">Fecha de Nacimiento:</label><br>
                <input type="date" id="fecha_de_nacimiento" name="fecha_de_nacimiento" required><br><br>

                <input type="submit" value="Enviar">
            </form>
</body>
</html>
