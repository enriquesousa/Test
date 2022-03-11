<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <h1>Esta en la rama i7</h1>
                <h2>Cambios, crear una lista ordenada R-i7</h2>
                <ol>
                    <li>Coffee</li>
                    <li>Tea
                        <ol>
                            <li>Black tea</li>
                            <li>Green tea</li>
                        </ol>
                    </li>
                    <li>Milk</li>
                </ol>

            </div>
        </div>
    </div>
</x-app-layout>
