<x-auth-layout>
    <x-auth.container class="font-medium">
        <x-slot name="logo">
            <a href="{{ route('home') }}">
                <x-srvn-stone class="h-12" />
            </a>
        </x-slot>
        <p class="text-center font-semibold text-[#ff460d]">
            Simrace Vereniging Nederland
        </p>

        <p class="mt-9 text-sm text-stone-600">
            {{ __('Vul je emailadres in om je wachtwoord opnieuw in te stellen.') }}
        </p>

        <!-- Session Status -->
        <x-auth.session-status class="mb-3"
                               :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth.validation-errors class="mb-3"
                                  :errors="$errors" />

        <form method="POST"
              action="{{ route('password.email') }}"
              class="mt-6">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input.label for="email"
                               :value="__('Emailadres')"
                               class="hidden" />

                <x-input.text id="email"
                              class="mt-1 block w-full"
                              type="email"
                              name="email"
                              :value="old('email')"
                              required
                              placeholder="Emailadres"
                              autofocus />
            </div>

            <div class="mt-6 flex items-center justify-end">
                <x-button class="w-full">
                    {{ __('Nieuw wachtwoord aanvragen') }}
                </x-button>
            </div>
            @if (Route::has('login'))
                <p class="mt-6 text-sm decoration-1 hover:underline">
                    <a href="{{ route('login') }}">
                        {{ __('Terug naar inloggen?') }}
                    </a>
                </p>
            @endif
        </form>
    </x-auth.container>
</x-auth-layout>
