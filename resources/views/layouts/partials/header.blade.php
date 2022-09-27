<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white">
    <div class="container mx-auto px-4 sm:px-6">
        <div class="flex items-center justify-between lg:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="{{ route('home') }}" class="p-2 lg:p-0">
                    <img class="h-10 w-auto lg:h-20" src="{{ asset('images/metorology90X90.jpg') }}" alt="">
                </a>
            </div>
            <div class="-my-2 -mr-2 lg:hidden">
                <button type="button"
                    class="togglemenu inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                    aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <!-- Heroicon name: outline/bars-3 -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <nav class="hidden sm:hidden space-x-1 lg:flex">
                <ul>
                    <li class="py-10"><a href="#"
                            class="text-base font-medium text-gray-500 text-white bg-blue rounded py-1 px-2.5">Home</a>
                    </li>
                </ul>
                <ul>
                    <li class="py-10"><a href="#"
                            class="text-base font-medium text-gray-500 hover:text-white hover:bg-blue rounded py-1 px-2.5">Public
                            Forecast</a></li>
                </ul>
                <ul>
                    <li class="py-10"><a href="#"
                            class="text-base font-medium text-gray-500 hover:text-white hover:bg-blue rounded py-1 px-2.5">Marine
                            Forecast</a></li>
                </ul>
                <ul>
                    <li class="py-10"><a href="#"
                            class="text-base font-medium text-gray-500 hover:text-white hover:bg-blue rounded py-1 px-2.5">Weather
                            Alerts</a></li>
                </ul>
                <ul>
                    <li class="py-10"><a href="#"
                            class="text-base font-medium text-gray-500 hover:text-white hover:bg-blue rounded py-1 px-2.5">7-Day
                            Forecast</a></li>
                </ul>
                <ul>
                    <li class="py-10"><a href="#"
                            class="text-base font-medium text-gray-500 hover:text-white hover:bg-blue rounded py-1 px-2.5">Sun,
                            Moon & Tides</a></li>
                </ul>
                <ul>
                    <li class="py-10"><a href="#"
                            class="text-base font-medium text-gray-500 hover:text-white hover:bg-blue rounded py-1 px-2.5">About</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>


    <!--
    Mobile menu, show/hide based on mobile menu state.

    Entering: "duration-200 ease-out"
      From: "opacity-0 scale-95"
      To: "opacity-100 scale-100"
    Leaving: "duration-100 ease-in"
      From: "opacity-100 scale-100"
      To: "opacity-0 scale-95"
  -->
  <div class="absolute inset-x-0 top-0 origin-top-right transform p-2 transition hidden lg:hidden" id="mobilemenu">
    <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
      <div class="p-4">
        <div class="flex items-center justify-between">
          <div>
            <a href="{{ route('home') }}" class="p-2 sm:p-0">
                <img class="h-10 w-auto sm:h-20" src="{{ asset('images/metorology90X90.jpg') }}" alt="">
            </a>
          </div>
          <div class="-mr-2">
            <button type="button" class="togglemenu inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
              <span class="sr-only">Close menu</span>
              <!-- Heroicon name: outline/x-mark -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
        <div class="mt-6">
          <nav class="grid gap-y-8">
            <ul>
                <li class=""><a href="{{route('home')}}"
                        class="text-base font-medium text-gray-500 text-white bg-blue rounded py-1 px-2.5">Home</a>
                </li>
            </ul>
            <ul>
                <li class=""><a href="#"
                        class="text-base font-medium text-gray-500 hover:text-white hover:bg-blue rounded py-1 px-2.5">Public
                        Forecast</a></li>
            </ul>
            <ul>
                <li class=""><a href="#"
                        class="text-base font-medium text-gray-500 hover:text-white hover:bg-blue rounded py-1 px-2.5">Marine
                        Forecast</a></li>
            </ul>
            <ul>
                <li class=""><a href="#"
                        class="text-base font-medium text-gray-500 hover:text-white hover:bg-blue rounded py-1 px-2.5">Weather
                        Alerts</a></li>
            </ul>
            <ul>
                <li class=""><a href="#"
                        class="text-base font-medium text-gray-500 hover:text-white hover:bg-blue rounded py-1 px-2.5">7-Day
                        Forecast</a></li>
            </ul>
            <ul>
                <li class=""><a href="#"
                        class="text-base font-medium text-gray-500 hover:text-white hover:bg-blue rounded py-1 px-2.5">Sun,
                        Moon & Tides</a></li>
            </ul>
            <ul>
                <li class=""><a href="#"
                        class="text-base font-medium text-gray-500 hover:text-white hover:bg-blue rounded py-1 px-2.5">About</a>
                </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="space-y-6 py-6 px-5 hidden">
        <div>
          <a href="#" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Sign up</a>
          <p class="mt-6 text-center text-base font-medium text-gray-500">
            Existing customer?
            <a href="#" class="text-indigo-600 hover:text-indigo-500">Sign in</a>
          </p>
        </div>
      </div>
    </div>
  </div>


</div>
