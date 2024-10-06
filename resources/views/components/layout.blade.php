@props(['header'=>false])
@stack('scripts')

    <!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full">
<div class="min-h-full">
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo"/>
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg
                    md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400
                     dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50
                md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800
                md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/"
                           class="{{ request()->is('/') ? 'block py-2 px-3 text-white bg-blue-700 rounded
                           md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500'
                           : 'block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent
                           md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500
                           dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent'}}  "
                           aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/about"
                           class="{{ request()->is('about') ? 'block py-2 px-3 text-white bg-blue-700 rounded
                           md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500'
                           : 'block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent
                           md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500
                           dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent'}}">About</a>
                    </li>
                    <li>
                        <a href="/products"
                           class="{{ request()->is('products') ? 'block py-2 px-3 text-white bg-blue-700 rounded
                           md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500'
                           : 'block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent
                           md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500
                           dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent'}}">Products</a>
                    </li>
                    <li>
                        <a href="/contact"
                           class="{{ request()->is('contact') ? 'block py-2 px-3 text-white bg-blue-700 rounded
                           md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500'
                           :'block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0
                            md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500
                            dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent'}}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="bg-white shadow">
        <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
            <img
                src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply"
                alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">
            <div
                class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl"
                aria-hidden="true">
                <div
                    class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div
                class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
                aria-hidden="true">
                <div
                    class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Work with us</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-300">Anim aute id magna aliqua ad ad non deserunt
                        sunt.
                        Qui
                        irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                </div>
                <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
                    <div
                        class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-white sm:grid-cols-2 md:flex lg:gap-x-10">
                        <a href="#">Open roles <span aria-hidden="true">&rarr;</span></a>
                        <a href="#">Internship program <span aria-hidden="true">&rarr;</span></a>
                        <a href="#">Our values <span aria-hidden="true">&rarr;</span></a>
                        <a href="#">Meet our leadership <span aria-hidden="true">&rarr;</span></a>
                    </div>
                    <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
                        <div class="flex flex-col-reverse">
                            <dt class="text-base leading-7 text-gray-300">Offices worldwide</dt>
                            <dd class="text-2xl font-bold leading-9 tracking-tight text-white">12</dd>
                        </div>
                        <div class="flex flex-col-reverse">
                            <dt class="text-base leading-7 text-gray-300">Full-time colleagues</dt>
                            <dd class="text-2xl font-bold leading-9 tracking-tight text-white">300+</dd>
                        </div>
                        <div class="flex flex-col-reverse">
                            <dt class="text-base leading-7 text-gray-300">Hours per week</dt>
                            <dd class="text-2xl font-bold leading-9 tracking-tight text-white">40</dd>
                        </div>
                        <div class="flex flex-col-reverse">
                            <dt class="text-base leading-7 text-gray-300">Paid time off</dt>
                            <dd class="text-2xl font-bold leading-9 tracking-tight text-white">Unlimited</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
        {{--        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">--}}
        {{--            --}}
        {{--        </div>--}}
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <!-- Your content -->
            {{ $slot }}
        </div>
    </main>
</div>
</body>
</html>

