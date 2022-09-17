<div x-data="{ showBar: false }"
     class="shadow-b bg-white px-6 font-medium shadow-md">

    {{-- Navbar Desktop --}}
    <div class="mx-auto max-w-7xl">

        {{-- Secondary Navbar --}}
        <div class="flex h-8 w-full items-center justify-between text-xs">

            {{-- Call To Action --}}
            <div class="flex w-full items-center">
                <a href="{{ route('register') }}"
                   class="font-semibold text-[#ff460d]">
                    Wordt lid voor €25 per jaar!
                </a>
                <ul class="flex text-stone-500">
                    <li class="ml-6 flex items-center">
                        <x-heroicon-s-check class="mr-1 h-4 text-[#ff460d]" />
                        24/7 raceservers
                    </li>
                    <li class="ml-6 flex items-center">
                        <x-heroicon-s-check class="mr-1 h-4 text-[#ff460d]" />
                        Kampioenschappen
                    </li>
                    <li class="ml-6 flex items-center">
                        <x-heroicon-s-check class="mr-1 h-4 text-[#ff460d]" />
                        Evenementen
                    </li>
                    <li class="ml-6 flex items-center">
                        <x-heroicon-s-check class="mr-1 h-4 text-[#ff460d]" />
                        Eigen livery
                    </li>
                    <li class="ml-6 flex items-center">
                        <x-heroicon-s-check class="mr-1 h-4 text-[#ff460d]" />
                        2x ALV
                    </li>
                </ul>
            </div>

            {{-- External Navigation --}}
            <div>
                <ul class="flex w-full items-center">
                    <li class="ml-6 hover:underline">
                        <a href="https://srvn.liveracers.com/League"
                           target="_blank">
                            LiveRacers
                        </a>
                    </li>
                    <li class="ml-6 hover:underline">
                        <a href="https://forum.srvn.nl/"
                           target="_blank">
                            Forum
                        </a>
                    </li>
                    <li class="ml-6 hover:underline">
                        <a href="https://discord.com/invite/U5rs68Q9CQ"
                           target="_blank">
                            Discord
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Primary Navbar --}}
        {{-- :class="{ 'h-18 transition duration-150': showBar }" --}}
        <div :class="showBar ? 'bg-red-500' : 'bg-blue-500'"
             class="flex w-full items-center border-t border-stone-200"
             @scroll.window="showBar = (window.pageYOffset > 20) ? true : false">
            <div x-text="showBar"></div>
            <a href="{{ route('home') }}">
                <x-srvn-stone class="h-8 pr-3" />
            </a>
            <div class="flex h-full w-full justify-between">
                <ul class="flex h-full">
                    <li class="h-full">
                        <a class="flex h-full w-full items-center px-3 hover:text-[#ff460d]"
                           href="{{ route('schedule') }}">
                            <span>Kalender</span>
                        </a>
                    </li>
                    <li class="h-full">
                        <a class="flex h-full w-full items-center px-3 hover:text-[#ff460d]"
                           href="{{ route('standings') }}">
                            <span>Klassement</span>
                        </a>
                    </li>
                    <li class="h-full">
                        <a class="flex h-full w-full items-center px-3 hover:text-[#ff460d]"
                           href="{{ route('drivers') }}">
                            <span>Rijders</span>
                        </a>
                    </li>
                    <li class="h-full">
                        <a class="flex h-full w-full items-center px-3 hover:text-[#ff460d]"
                           href="{{ route('teams') }}">
                            <span>Teams</span>
                        </a>
                    </li>
                </ul>
                <ul class="flex h-full items-center">
                    <li>
                        <a href="{{ route('dashboard') }}"
                           class="flex items-center justify-center space-x-1 rounded border-2 border-[#ff460d] bg-[#ff460d] px-3 py-2 font-semibold text-white transition duration-150 ease-in-out hover:bg-transparent hover:text-stone-800">
                            <x-heroicon-o-user class="h-6" />
                            <span>Mijn SRVN</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
