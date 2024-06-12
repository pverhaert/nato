<nav class="container mx-auto p-4 flex justify-between">
    {{-- left navigation--}}
    <div class="flex items-center space-x-2">
        <a class="hidden sm:block font-medium text-lg" href="{{ route('home') }}">
            Retake Examen PHP July 2024
        </a>
    </div>

    {{-- right navigation --}}
    <div class="relative flex items-center space-x-2">
        <x-nav-link href="#">
            NATO
        </x-nav-link>
    </div>
</nav>
