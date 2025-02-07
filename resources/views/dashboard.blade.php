<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
<!-- Навигация -->
<nav class="bg-white shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center py-4">
{{--            @foreach($users as $user)--}}
            <div class="flex items-center">
                <span class="text-2xl font-bold text-blue-600">Home Page</span>
            </div>
{{--            @endforeach--}}
            <div class="hidden md:flex items-center space-x-8">
                <a href="#" class="text-gray-600 hover:text-blue-600 transition">Главная</a>
                <a href="{{route('users.index')}}" class="text-gray-600 hover:text-blue-600 transition">Ползователи</a>
                <a href="{{route('roles.index')}}" class="text-gray-600 hover:text-blue-600 transition">Рольи</a>
                <a href="{{route('login')}}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                    Войти
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Герой секция -->
<div class="bg-white py-20">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h1 class="text-5xl font-bold text-gray-800 mb-6">
            Добро пожаловать на наш сайт
        </h1>
        <p class="text-xl text-gray-600 mb-8">
            Создавайте, управляйте и делитесь своими проектами с миром
        </p>
        <div class="space-x-4">
            <a href="{{route('register')}}"
               class="bg-blue-500 text-white px-8 py-3 rounded-lg text-lg hover:bg-blue-600 transition">
                Начать сейчас
            </a>
            <a href="#"
               class="border-2 border-blue-500 text-blue-500 px-8 py-3 rounded-lg text-lg hover:bg-blue-50 transition">
                Узнать больше
            </a>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="py-20 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition">
                <h3 class="text-xl font-bold mb-4">Простота использования</h3>
                <p class="text-gray-600">Интуитивно понятный интерфейс для максимального комфорта</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition">
                <h3 class="text-xl font-bold mb-4">Безопасность</h3>
                <p class="text-gray-600">Ваши данные защищены по современным стандартам</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition">
                <h3 class="text-xl font-bold mb-4">Поддержка</h3>
                <p class="text-gray-600">Круглосуточная помощь нашим пользователям</p>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-8">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <p class="mb-4">© 2025   Test . Все права защищены.</p>
        <div class="flex justify-center space-x-6">
            <a href="#" class="hover:text-blue-400 transition">Политика конфиденциальности</a>
            <a href="#" class="hover:text-blue-400 transition">Условия использования</a>
            <a href="#" class="hover:text-blue-400 transition">Контакты</a>
        </div>
    </div>
</footer>
</body>
</html>
