<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">{{ __("Welcome to the Dashboard!") }}</h3>
                    <p class="mb-2">{{ __("You are currently logged in.") }}</p>
                    <p class="mb-2">{{ __("Here, you can manage your account and access various features.") }}</p>
                    <p class="mb-2">{{ __("Feel free to explore and make the most of your experience!") }}</p>
                    <p class="mb-2">{{ __("If you have any questions or need assistance, please don't hesitate to reach out.") }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">{{ __("File Graph") }}</h3>
                    <canvas id="fileGraph"></canvas>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
