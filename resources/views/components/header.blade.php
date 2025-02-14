<nav class="p-4 shadow-md bg-base-300">
    <div class="flex items-center justify-between mx-auto max-w-7xl">
        <!-- Logo -->
        <div class="flex items-center flex-shrink-0 mr-6 text-white hover:text-gray-300">
            <!-- Logo Image -->
            <span class="ml-2 mr-6 text-xl font-semibold">Logo</span>
        </div>

        <!-- Navigation Links -->
        <div>
            <a href="{{ route('home') }}"
                class="link no-underline block mt-4 lg:inline-block lg:mt-0 mr-4
                {{ request()->routeIs('Home') ? 'text-primary' : 'hover:opacity-75' }}">
                Home
            </a>
        </div>
    </div>
</nav>
