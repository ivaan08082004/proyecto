<!DOCTYPE html>
<html>
<head>
    <title>Mi Pagina Web</title>
</head>
<body>
    <h1>Bienvenidos a mi pagina web!</h1>
    <p>Porfavor introduzca sus credenciales</p>

        <form action="{{route('form.submit')}}"method=POST>
        @csrf 
        <label for="correo">Correo Electrónico:</label><br>
            <input type="email" id="correo" name="correo" required><br><br>
    
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <label for="fecha_nacimiento">Fecha de Nacimiento:</label><br>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br><br>

            <input type="submit" value="Enviar">
        </form>
        </body>

        
        
            </html>
