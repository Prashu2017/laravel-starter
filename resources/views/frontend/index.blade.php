@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

<section class="bg-gray-100 mb-20">
    <div class="container mx-auto flex px-1 sm:px-20 py-20 md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-center rounded" alt="hero" src="{{ asset('img/logo-square.jpg') }}">
        </div>
        <div class="lg:flex-grow md:w-1/2 px-4 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-8xl text-5xl mb-4 font-medium text-gray-800">
                {{ app_name() }}
            </h1>
            <p class="mb-8 sm:text-4xl text-3xl">
                {!! setting('meta_description') !!}
            </p>
            <div class="flex justify-center">
                <a href="https://github.com/prashu2017" class="inline-flex text-white bg-gray-700 border-0 py-2 px-6 focus:outline-none hover:bg-gray-800 rounded text-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="w-8 h-8" viewBox="0 0 18 18">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                    Github
                </a>
                
            </div>

            @include('frontend.includes.messages')

        </div>
    </div>
</section>

<section class="mb-20">
    <div class="container mx-auto flex px-5 py-10 items-center justify-center flex-col">
        <div class="text-center lg:w-2/3 w-full">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-800">
                Screenshots of the project
            </h1>
            <p class="mb-8 leading-relaxed">
                In the following section we listed a number of screenshots of different parts of the project, Laravel Starter.
            </p>
        </div>
    </div>
</section>

<section class="mb-20">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 p-5">
        <div class="shadow-lg p-3 sm:p-10 rounded-lg">
            <img src="https://media.licdn.com/dms/image/D4D22AQFmHbmCc1Nqfg/feedshare-shrink_800/0/1703943190319?e=1706745600&v=beta&t=WKZ-XKE6LKKstxaaBf41iiFVY2VgPthm12PvzLIM6t4" alt="Page preview">
        </div>
        <div class="shadow-lg p-3 sm:p-10 rounded-lg row-span-2">
            <img src="https://media.licdn.com/dms/image/D4D22AQGolkWsVQG8Vw/feedshare-shrink_800/0/1703943190361?e=1706745600&v=beta&t=eChXHvMK0i5WRZ-kGcNNIzXu6Df6ldFUTbHiei2ED5k" alt="Page preview">
        </div>
        <div class="shadow-lg p-3 sm:p-10 rounded-lg">
            <img src="https://media.licdn.com/dms/image/D4D22AQFPk6pK02T7KQ/feedshare-shrink_2048_1536/0/1703943190437?e=1706745600&v=beta&t=M7Dlkhj61L6D-JAOQd6Cfktyks_KnhB2OqUygwaFngk" alt="Page preview">
        </div>
    </div>
</section>

@endsection