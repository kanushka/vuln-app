<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> --}}
        </x-slot>

        <div class="mb-8 text-md text-gray-600 flex items-center justify-center">
            {{ __('Your avatar has sucessfully uploaded.') }} <br>
        </div>

        <div class="mb-4 flex items-center justify-center">
            <img class="inline-block h-20 w-20 rounded-full ring-2 ring-white" src="{{ $url }}" alt="">
        </div>

        <a href="{{ $url }}"
            class="mb-4 font-medium text-sm text-green-600 no-underline hover:underline flex items-center justify-center flex-wrap">
            {{ $name }}
        </a>

    </x-auth-card>
</x-guest-layout>
