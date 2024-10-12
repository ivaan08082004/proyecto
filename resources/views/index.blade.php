<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Web</title>
    <style>
        body {
            background-color: #f0f0f0; /* Fondo gris claro */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        label, input {
            margin-bottom: 10px;
        }

        p {
            color: green;
        }

        span {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        @if(session('usuario_creado'))
            <p>{{ session('usuario_creado') }}</p>
        @endif

        <h1>Bienvenidos a mi página web!</h1>
        <p>Por favor introduzca sus credenciales</p>

        <form action="{{ route('form.submit') }}" method="POST">
            @csrf 
            <label for="email">Correo Electrónico:</label><br>
            <input type="email" id="email" name="email" required><br>
            @error('email')
                <span>{{ $message }}</span><br>
            @enderror
            <br>

            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br>
            @error('nombre')
                <span>{{ $message }}</span><br>
            @enderror
            <br>

            <label for="fecha_de_nacimiento">Fecha de Nacimiento:</label><br>
            <input type="date" id="fecha_de_nacimiento" name="fecha_de_nacimiento" required><br>
            @error('fecha_de_nacimiento')
                <span>{{ $message }}</span><br>
            @enderror
            <br>

            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>

