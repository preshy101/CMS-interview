<nav class="flex items-center justify-between py-3 px-6 border-b border-gray-100">
    <div id="nav-left" class="flex items-center">
        <a href="{{url('/')}}">
            <x-application-mark class="block h-9 w-auto" />

        </a>
        <div class="top-menu ml-10">
            <ul class="flex space-x-4">
                <x-nav-link href="{{route('home')}}" :active="request()->routeIs('home')">
                        {{ __('home')}}
                    </a>
                </x-nav-link>

                <x-nav-link href="{{route('posts.index')}}" :active="request()->routeIs('posts.index')">
                    <a class="flex space-x-2 items-center hover:text-yellow-500 text-sm text-gray-500"
                        href="http://127.0.0.1:8000/blog">
                        {{__('Blog')}}
                    </a>
                </x-nav-link>

                <x-nav-link>
                    <a class="flex space-x-2 items-center hover:text-yellow-500 text-sm text-gray-500"
                        href="http://127.0.0.1:8000/blog">
                        About Us
                    </a>
                </x-nav-link>
{{-- 
                <li>
                    <a class="flex space-x-2 items-center hover:text-yellow-500 text-sm text-gray-500"
                        href="http://127.0.0.1:8000/blog">
                        Contact Us
                    </a>
                </li>

                <li>
                    <a class="flex space-x-2 items-center hover:text-yellow-500 text-sm text-gray-500"
                        href="http://127.0.0.1:8000/blog">
                        Terms
                    </a>
                </li> --}}

            </ul>
        </div>
    </div>
    <div id="nav-right" class="flex items-center md:space-x-6">
        @guest
        @include('layouts.partials.header-guest')
        @endguest

        @auth
        @include('layouts.partials.header-right')
       @endauth

    </div>
</nav>
