<div class="fixed w-full bg-gray-800 flex items-center justify-around md:hidden bottom-0 z-10">
    @if (!Auth::guest())
    <a
        href="{{ route('profile') }}"
        class="flex flex-col items-center py-3 px-[5px] hover:text-gray-200 gap-1 hover:bg-gray-900 text-xs"
    >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 mr-2"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
            />
        </svg>
        My Profile
    </a>
    <a
        href="{{ route('order.index') }}"
        class="flex flex-col items-center py-3 px-[5px] hover:text-gray-200 gap-1 hover:bg-gray-900 text-xs"
    >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 mr-2"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
            />
        </svg>
        My Orders
    </a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <a href="{{ route('logout') }}"
            class="flex flex-col items-center py-3 px-[5px] hover:text-gray-200 gap-1 hover:bg-gray-900 text-xs"
            onclick="event.preventDefault();
                this.closest('form').submit();">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 mr-2"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                />
            </svg>
            {{ __('Log Out') }}
        </a>
    </form>
    @else
    <a
        href="{{ route('register') }}"
        class="flex flex-col items-center py-3 px-[5px] hover:text-gray-200 gap-1 hover:bg-gray-900 text-xs"
    >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 mr-2"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
            />
        </svg>
        Register
    </a>
    <a
        href="{{ route('login') }}"
        class="flex flex-col items-center py-3 px-[5px] hover:text-gray-200 gap-1 hover:bg-gray-900 text-xs"
    >
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3"/><circle cx="12" cy="10" r="3"/><circle cx="12" cy="12" r="10"/></svg>
    Login
    </a>
    @endif
</div>
