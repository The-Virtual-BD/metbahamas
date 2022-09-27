@extends('layouts.app')
@section('title')
    Home
@endsection
@section('hscript')
@endsection
@section('content')
    {{-- Hero --}}
    <div class="bg-hero-image bg-no-repeat bg-cover bg-center">
        <div class="container mx-auto py-10 sm:py-40 px-4 sm:px-0">
            <h1 class="font-os font-bold text-2xl sm:text-6xl text-white">Department of <br />
                Meteorology Bahamas</h1>
        </div>
    </div>


    {{-- Weather Forecast --}}
    <div class="bg-lblue px-4 sm:px-0">
        <div class="container mx-auto py-7 sm:py-14">
            <h2 class="font-os font-bold text-2xl sm:text-4xl text-dark text-center mb-7 sm:mb-9">Weather Forecast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                <div class="sm:col-span-2 shadow-lg">
                    <div class="h-[150px] sm:h-[212px] bg-hero-image"></div>
                    <div class="px-5 sm:px-10 py-5">
                        <h3 class="font-os font-bold text-lg sm:text-2xl text-blue mb-4 sm:mb-7"><span class="iconify inline mr-2.5"
                                data-icon="charm:cloud"></span>Todays Update</h3>
                        <p class="text-sm sm:text-xl font-normal text-justify sm:text-left">The bahamas department of meteorology has issued a severe
                            thunderstorm warning for the islands of central abaco, new providence, north cat island, crocked
                            island, acklins and long cay along with their adjacent waters, from 1:30 pm to 3:30 pm wednesday
                            08th, june 2022 </p>
                    </div>
                    <div class="bg-blue flex items-center px-5 sm:px-10 py-1">
                        <span class="iconify inline text-white" data-icon="uil:calender"></span>
                        <p class="text-white inline text-sm sm:text-base">11 June, 2022</p>
                    </div>
                </div>
                <div class="shadow-lg pb-5 sm:pb-0">
                    <div class="h-[150px] sm:h-[212px] bg-hero-image min-w-full"></div>
                    <div class="px-5 py-2.5">
                        <div class="flex justify-between items-center">
                            <h4 class="font-os font-bold text-lg mb-2.5 text-blue">Todays Conditions </h4>
                            <span class="iconify inline text-blue" data-icon="uil:calender"></span>
                        </div>
                        <form action="">
                            <select name="" id="" class="bg-blue rounded text-white px-4 text-sm sm:text-base">
                                <option value="">Albaco</option>
                                <option value="">Albaco</option>
                                <option value="">Albaco</option>
                            </select>
                        </form>
                    </div>
                    <div class="grid grid-cols-3 px-5 text-sm sm:text-base">
                        <div class="col-span-2">
                            <div class="flex justify-between items-center">
                                <p>Max 88O F</p>
                                <p>Min 73O F</p>
                            </div>
                        </div>
                        <div class="flex justify-end items-center">
                            <p class="py-2 px-3 border border-blue inline-block rounded text-sm sm:text-base">F</p>
                        </div>
                    </div>
                    <div class="px-5 text-sm sm:text-base">
                        <h5 class="font-semibold">Thunderstorm</h5>
                        <div class="flex justify-between">
                            <p class="inline">Sunrise</p>
                            <p class="inline">5:40 AM</p>
                        </div>
                        <div class="flex justify-between">
                            <p class="inline">Sunset</p>
                            <p class="inline">5:40 AM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- Hazerd --}}
    <div class="py-7 sm:py-14 px-4 sm:px-0 container mx-auto">
        <h2 class="font-os font-bold text-2xl sm:text-4xl text-dark text-center mb-7 sm:mb-9">Hazards</h2>
        <iframe src="https://hazards.bahamasweather.org.bs/" frameborder="0" class="w-full h-[625px]"></iframe>
    </div>



    {{-- Raders --}}
    <div class="py-7 sm:py-14 px-4 sm:px-0 container mx-auto">
        <h2 class="font-os font-bold text-2xl sm:text-4xl text-dark text-center mb-7 sm:mb-9">Raders</h2>
        <iframe src="https://radars.bahamasweather.org.bs/" frameborder="0" class="w-full h-[625px]"></iframe>
    </div>

    {{-- Updated --}}
    <div class="py-7 sm:py-14 px-4 sm:px-0 container mx-auto">
        <h2 class="font-os font-bold text-2xl sm:text-4xl text-dark text-center mb-7 sm:mb-9">Updated</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
            <div class="">
                <img src="https://cdn.star.nesdis.noaa.gov//GOES16/ABI/SECTOR/CAR/GEOCOLOR/GOES16-CAR-GEOCOLOR-1000x1000.gif" alt="">
            </div>
            <div class="sm:col-span-2">

                <iframe class="w-full h-[400px] sm:h-full" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1843587.4003844715!2d-78.67582681181828!3d25.513161509066325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sregion%20of%20bahamas!5e0!3m2!1sen!2sbd!4v1664199465656!5m2!1sen!2sbd"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
