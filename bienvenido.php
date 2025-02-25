<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right,rgb(231, 190, 200),rgb(222, 177, 241));
            color: white;
            display: flex;
            flex-direction: column; 
            justify-content: center;
            align-items: center;
            height: 100vh; 
            text-align: center; 
        }

        h1 {
            margin-bottom: 20px;
        }

        .btn {
            background: linear-gradient(to right, #8e44ad, #ff7f9f);
            color: white; 
            border: none; 
            border-radius: 25px; 
            padding: 15px 30px; 
            font-size: 16px; 
            cursor: pointer;
            outline: none; 
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido</h1>
        <p>Has iniciado sesión correctamente.</p>
        <button class="btn" onclick="window.location.href='sesion.php'">Cerrar Sesión</button>
    </div>
</body>
</html>
