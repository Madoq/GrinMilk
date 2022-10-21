<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Kolejorz</title>
</head>
<body class="bg-gray-200">

<nav class="flex items-center justify-between flex-wrap bg-gray-800 px-8">
    <div class="flex items-center text-white mr-6 pt-4 pb-5">
        <a href="#"
           class="flex inline-block"
        >
            <img
                src="https://img.icons8.com/ios/50/88E8D9/steam-engine.png"
                onmouseover="src='https://img.icons8.com/ios/50/FFFFFF/steam-engine.png'"
                onmouseout="src='https://img.icons8.com/ios/50/88E8D9/steam-engine.png'"
                width="40"
                alt="Kolejorz"
            />
            <span class="flex items-center ml-2 font-bold text-3xl">Kolejorz</span>
        </a>
    </div>
    <div class="block lg:hidden">
        <button
            id="menu-button"
            class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
    <div
        id="menu"
        class="hidden w-full block flex-grow lg:flex lg:items-center lg:w-auto lg:border-0 border-t-2 border-teal-200 pb-2 lg:pb-0">
        <div class="lg:flex-grow">
            <a href="#" class="block mt-6 lg:inline-block lg:mt-0 text-teal-200 lg:ml-12 font-semibold hover:text-teal-100">
                Wszystkie stacje
            </a>
            <a href="#" class="block mt-6 lg:inline-block lg:mt-0 text-teal-200 lg:ml-12 font-semibold hover:text-teal-100">
                Moje stacje
            </a>
            <a href="#" class="block mt-6 lg:inline-block lg:mt-0 text-teal-200 lg:ml-12 font-semibold hover:text-teal-100">
                Moje wycieczki
            </a>
        </div>

        <div>
            <a href="#" class="inline-block flex justify-left lg:justify-center lg:w-28 text-sm lg:px-2 py-2 lg:border rounded lg:bg-white text-white lg:text-black lg:border-white lg:hover:bg-gray-300 mt-8 lg:mt-0 hover:font-semibold lg:hover:font-normal">
                <img
                    class="lg:hidden inline-block mr-2"
                    src="https://img.icons8.com/ios-glyphs/20/20/FFFFFF/login-rounded-right--v1.png"
                />
                <span class="flex items-center">Zaloguj się</span>
            </a>
        </div>
        <div>
            <a href="#" class="inline-block flex justify-left lg:justify-center lg:w-28 text-sm lg:ml-4 lg:px-2 py-2 lg:border rounded text-white lg:border-white lg:hover:bg-gray-600 lg:mt-0 hover:font-semibold lg:hover:font-normal">
                <img
                    class="lg:hidden inline-block mr-2"
                    src="https://img.icons8.com/ios-glyphs/20/20/FFFFFF/add-user-male.png"
                />
                <span class="flex items-center">Dołącz do nas</span>
            </a>
        </div>
    </div>
</nav>

<section class="flex mx-auto">
    <div class="bg-gray-600 w-full sm:w-1/2 lg:w-1/3 h-screen pt-8 px-8">

        <div class="flex justify-start">
            <p class="text-white font-semibold">Szukaj stacji</p>
        </div>
        <div class="flex w-full my-2 py-5 px-3 bg-gray-800 rounded-2xl text-white">
            <div class="w-full flex">
                <input type="text" class="rounded-2xl bg-gray-600 w-full py-2 mr-2">
                {{--Button to submit--}}
                <button>
                    <img src="https://img.icons8.com/ios-glyphs/30/FFFFFF/search--v1.png"/>
                </button>
            </div>
        </div>

        <div class="flex justify-end mt-10">
            <p class="text-white font-semibold">Zaznacz na mapie</p>
        </div>

{{--Component for found station--}}
        <div class="flex flex-wrap w-full my-4 py-4 px-2 bg-gray-800 rounded-lg text-white">
            <div class="w-2/3">
                <p class="font-semibold">Wrocław Wrocław Główny Wrocław Główny Główny</p>
                <p class="text-teal-200 mt-2">Ilość odwiedzin: 8</p>
            </div>
            {{--Button for showing found station on the map--}}
            <a href="#" class="w-1/3">
                <div class="flex justify-end">
                    <img class="px-1 rounded hover:bg-gray-600"
                         src="https://img.icons8.com/quill/50/FFFFFF/experimental-map-quill.png"/>
                </div>
            </a>
        </div>

        <div class="flex flex-wrap w-full my-4 py-4 px-2 bg-gray-800 rounded-lg text-white">
            <div class="w-2/3">
                <p class="font-semibold">Wrocław Główny</p>
                <p class="text-teal-200 mt-2">Ilość odwiedzin: 8</p>
            </div>
            <a href="#" class="w-1/3">
                <div class="flex justify-end">
                    <img class="px-1 rounded hover:bg-gray-600"
                         src="https://img.icons8.com/quill/50/FFFFFF/experimental-map-quill.png"/>
                </div>
            </a>
        </div>
    </div>

{{--Example map--}}
    <div class="hidden sm:block sm:w-1/2 lg:w-2/3 h-screen">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2499.7933988731024!2d16.147909515758872!3d51.
                    20445847958652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470f128c143643e9%3A0xd13d291bc4044b4c!2sColle
                    gium%20Witelona%20Uczelnia%20Pa%C5%84stwowa!5e0!3m2!1spl!2spl!4v1649251131301!5m2!1spl!2spl" width="100%" height="100%"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
</body>
</html>

<script>
    //Simple script before adding vue.js to project
    const menuButton = document.getElementById('menu-button');
    const menu = document.getElementById('menu');

    document.addEventListener('DOMContentLoaded', () => {
        menuButton.addEventListener('click', (event) => {
            dropMenu();
        })
    })
    function dropMenu() {
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden')
        } else {
            menu.classList.add('hidden');
        }
    }
</script>

