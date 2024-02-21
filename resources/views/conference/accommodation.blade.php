<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Accommodation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>We recommend the following hotels for reservations within walking distance of "G. S. Rakovski" Military Academy:</p>

                    <ul class="list-disc my-10 text-justify">
                        <li>Hotel Kapri Sofia/Perfect location – <a href="https://www.kaprisofia.eu/" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" target="_blank">Hotel Kapri Sofia</a></li>
                        <li>Crystal Palace Boutique Hotel - <a href="https://www.crystalpalace-sofia.com/" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" target="_blank">Crystal Palace Boutique Hotel</a></li>
                        <li>Oborishte 63 Boutique Hotel - <a href="https://oborishte63.com/" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" target="_blank">Oborishte 63 Boutique Hotel</a></li>
                        <li>Hyatt Regency Sofia - <a href="https://www.hyatt.com/en-US/hotel/bulgaria/hyatt-regency-sofia/sofrs" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" target="_blank">Hyatt Regency Sofia</a></li>
                      

                        <p class="text-justify my-8"><b>Contacts with the organizing committee:</b></p>
                        <p class="text-justify">Sofia 1504</p>
                        <p class="text-justify">bul. "Evlogi and Hristo Georgievi" No 82</p>
                        <p class="text-justify">Military Academy "G. S. Rakovski"</p>
                        <p class="text-justify"><a href= "mailto:ncva@rndc.bg" class = "text-blue-500 hover:text-blue-700" > ncva@rndc.bg</a></p>
                </div>
            </div>
        </div>
    </div>
    
    </x-app-layout>