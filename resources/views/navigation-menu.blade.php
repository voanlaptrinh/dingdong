<nav x-data="{ open: false }" class="border-gray-100">
    <x-dropdown align="right" width="">
        <x-slot name="trigger">
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <button
                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                    <a href="#" class="user-toggle">
                        <img class="rounded-circle " style="width: 40px;" src="{{ Auth::user()->profile_photo_url }}" />
                    </a>
                    <div class="content">
                        <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                    </div>
                </button>
            @else
                <span class="inline-flex rounded-md">
                    <button type="button" class="inline-flex items-center px-3 py-2 text-sm">
                        <a href="#" class="user-toggle mr-2">
                            <img class="rounded-circle mr-10" style="width: 40px;" src="/assets/images/avatar-1.jpg" />
                        </a>
                        <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                    </button>
                </span>
            @endif
        </x-slot>

        <x-slot name="content">
            <!-- Account Management -->
            {{-- <div class="block px-4 text-black">
                {{ Auth::user()->name }}
            </div>
            <div class="block px-4 text-gray-400">
                {{ Auth::user()->email }}
            </div> --}}
            <div class="border-t border-gray-200"></div>
            <div class="block px-4 py-2 text-xs text-gray-400">
                {{ __('Manage Account') }}
            </div>
            @if (Auth::user()->user_type == 'admin')
                <x-dropdown-link href="{{ route('home') }}">
                    {{ __('DashBoard') }}
                </x-dropdown-link>
            @endif

            {{-- <x-dropdown-link href="{{ route('profile.show') }}">
                {{ __('Profile') }}
            </x-dropdown-link> --}}

            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                    {{ __('API Tokens') }}
                </x-dropdown-link>
            @endif

            <div class="border-t border-gray-200"></div>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf

                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();"
                    class="text-decoration-none">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </x-slot>
    </x-dropdown>
</nav>
