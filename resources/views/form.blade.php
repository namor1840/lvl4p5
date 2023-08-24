<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form action="api/registrar" method="POST" class="max-w-sm mx-auto p-6 bg-white rounded-lg shadow-md">
        <div class="mb-4">
            <label for="nombre" class="block mb-1 text-gray-600">Nombre</label>
            <input type="text" id="nombre"  required  name="nombre" placeholder="Nombre" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="apellido" class="block mb-1 text-gray-600">Apellido</label>
            <input type="text" id="apellido" required name="apellido" placeholder="Apellido" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="correo" class="block mb-1 text-gray-600">Correo electrónico</label>
            <input type="email" id="correo" required name="correo" placeholder="Correo electrónico" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="contra" class="block mb-1 text-gray-600">Contraseña</label>
            <input type="password" id="contra" required name="contra" placeholder="Contraseña" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
        </div>
        <div>
            <button type="submit" class="w-full py-2 px-4 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Enviar</button>
        </div>
    </form>
    
</body>
</html>
