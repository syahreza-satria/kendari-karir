<nav class="py-2 shadow-md" x-data="{ isOpen: false }">
    <div class="w-full max-w-screen-md px-4 mx-auto">
        <div class="flex items-center justify-between">
            <a href="{{ route('index') }}" class="text-2xl font-bold">Kendari<span class="text-sky-500">Karir</span></a>

            <div class="items-center hidden space-x-4 md:flex">
                <form action="#" method="POST">
                    <input type="text" name="searchBar" id="searchBar"
                        class="px-4 py-2 text-xs border border-gray-300 rounded-full" placeholder="Cari lowongan">
                </form>
                <a href="{{ route('contact') }}"
                    class="px-4 py-2 text-xs font-light text-white transition duration-300 rounded-full bg-sky-500 hover:bg-sky-400 whitespace-nowrap">Hubungi
                    Kami</a>
            </div>

            <div class="md:hidden">
                <button @click="isOpen = !isOpen" type="button"
                    class="text-gray-600 hover:text-gray-800 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path :class="{ 'hidden': isOpen, 'inline-flex': !isOpen }" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        <path :class="{ 'hidden': !isOpen, 'inline-flex': isOpen }" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <div x-show="isOpen" @click.away="isOpen = false" class="mt-4 space-y-4 md:hidden">
            <form action="#" method="POST">
                <input type="text" name="searchBarMobile" id="searchBarMobile"
                    class="w-full px-4 py-2 text-sm border border-gray-300 rounded-full" placeholder="Cari lowongan...">
            </form>
            <a href="{{ route('contact') }}"
                class="block px-4 py-2 text-sm font-light text-center text-white transition duration-300 rounded-full bg-sky-600 hover:bg-sky-400">Hubungi
                Kami</a>
        </div>
    </div>
</nav>
