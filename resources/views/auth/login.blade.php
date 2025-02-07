<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
<div class="bg-white p-8 rounded-lg shadow-md w-96">
    <h2 class="text-2xl font-bold mb-6 text-center">Вход</h2>
    <form method="POST" action="{{route('login')}}">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
            <input type="email"
                   class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                   required
                   name="email">
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-semibold mb-2">Пароль</label>
            <input type="password"
                   class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                   required
                   name="password">
        </div>

        <button type="submit"
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-200">
            Войти
        </button>
    </form>
        <p class="mt-4 text-center text-gray-600">
            Нет аккаунта?
            <a href="{{route('register')}}" class="text-blue-500 hover:underline">Зарегистрироваться</a>
        </p>
</div>
</body>
</html>
