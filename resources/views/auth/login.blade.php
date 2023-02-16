<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>



        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <!-- component -->
        <div class="flex min-h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat" style="background-image:url('https://images.unsplash.com/photo-1499123785106-343e69e68db1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1748&q=80')">
            <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
                <x-jet-validation-errors class="mb-4" />
                <div class="text-white">
                    <div class="mb-8 flex flex-col items-center">
                        <img src="https://www.logo.wine/a/logo/Instagram/Instagram-Glyph-Color-Logo.wine.svg" width="150" alt="" srcset="" />
                        <h1 class="mb-2 text-2xl">Instagram</h1>
                        <span class="text-gray-300">Enter Login Details</span>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4 text-lg flex justify-center">
                            <input class="rounded-3xl border-none bg-yellow-400 bg-opacity-25 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md text-black" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="id@email.com" />
                        </div>

                        <div class="mb-4 text-lg flex justify-center">
                            <input class="rounded-3xl border-none bg-yellow-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" type="password" name="password" required autocomplete="current-password" />
                        </div>

                        <div class="mt-8 flex justify-center text-lg text-black">
                            <button type="submit" class="rounded-3xl bg-yellow-400 bg-opacity-50 px-10 py-2 text-black shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-yellow-600">Login</button>
                        </div>

                    </form>
                </div>
                <div><a href="{{route('register')}}"> Deseas registrarte</a></div>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>