<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{--    --}}{{--    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">--}}
    {{--    --}}{{--    <head>--}}
    {{--    --}}{{--    </head>--}}

    {{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
</head>
<body class="h-full">
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                             alt="Your Company">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="/"
                               class="{{ request()->is('/') ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"}}
                               rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                               aria-current="page">Trang chủ</a>
                            <a href="/products"
                               class="{{ request()->is('products') ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"}}
                               rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                               aria-current="page">Sản phẩm</a>
                            <a href="/contact"
                               class="{{ request()->is('contact') ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"}}
                                rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Liên
                                hệ</a>
                            <a href="/about"
                               class="{{ request()->is('about') ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"}}
                               rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Chúng
                                tôi</a>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <button type="button"
                                class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"/>
                            </svg>
                        </button>

                        <!-- Profile dropdown -->
                        <div class="relative ml-3">
                            <div>
                                <button type="button"
                                        class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full"
                                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt="">
                                </button>
                            </div>

                            <!--
                              Dropdown menu, show/hide based on menu state.

                              Entering: "transition ease-out duration-100"
                                From: "transform opacity-0 scale-95"
                                To: "transform opacity-100 scale-100"
                              Leaving: "transition ease-in duration-75"
                                From: "transform opacity-100 scale-100"
                                To: "transform opacity-0 scale-95"
                            -->
                            {{--                            <div--}}
                            {{--                                class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"--}}
                            {{--                                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"--}}
                            {{--                                tabindex="-1">--}}
                            {{--                                <!-- Active: "bg-gray-100", Not Active: "" -->--}}
                            {{--                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"--}}
                            {{--                                   id="user-menu-item-0">Your Profile</a>--}}
                            {{--                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"--}}
                            {{--                                   id="user-menu-item-1">Settings</a>--}}
                            {{--                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"--}}
                            {{--                                   id="user-menu-item-2">Sign out</a>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button"
                            class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                        </svg>
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="/"
                   class="{{ request()->is('/') ?'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}}
                    block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                   aria-current="page">Trang chủ</a>
                <a href="/products"
                   class="{{ request()->is('products') ?'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}}
                    block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                   aria-current="page">Sản phẩm</a>
                <a href="/contact"
                   class="{{ request()->is('contact') ?'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}}
                    block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Liên
                    hệ</a>
                <a href="/about"
                   class="{{ request()->is('about') ?'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}}
                    block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Chúng
                    tôi</a>
            </div>
            <div class="border-t border-gray-700 pb-3 pt-4">
                <div class="flex items-center px-5">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full"
                             src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                             alt="">
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium leading-none text-white">Vũ Tiến Lộc</div>
                        <div class="text-sm font-medium leading-none text-gray-400">loc@gmail.com</div>
                    </div>
                    <button type="button"
                            class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                             aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"/>
                        </svg>
                    </button>
                </div>
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

