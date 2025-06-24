<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
<!-- Password -->
<!-- Password -->
<!-- Password -->
<!-- Password -->
<!-- Password -->
<div class="mt-4">
    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
        Password
    </label>

    <div style="position: relative;">
        <input
            id="password"
            type="password"
            name="password"
            required
            autocomplete="current-password"
            class="block w-full rounded-md border border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-white pr-10 py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500"
        />

        <!-- 👁️ Eye Icon, absolutely overlaid with inline styles -->
        <button
            type="button"
            onclick="togglePasswordVisibility(this)"
            style="
              position: absolute;
              top: 50%;
              right: 12px;
              transform: translateY(-50%);
              background: none;
              border: none;
              padding: 0;
              margin: 0;
              cursor: pointer;
              font-size: 1.25rem;
              line-height: 1;
            "
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>

        </button>
    </div>

    @error('password')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>








        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

<script>
    // SVG icons as template strings
    const EYE_SVG = `
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
             viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943
                   9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        </svg>`;

    const EYE_SLASH_SVG = `
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
             viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13.875 18.825A10.05 10.05 0 0112
                   19c-4.477 0-8.268-2.943-9.542-7a9.97 9.97 0
                   012.223-3.182M6.223 6.223A9.953 9.953 0
                   0112 5c4.477 0 8.268 2.943 9.542
                   7a10.05 10.05 0 01-4.158 5.274M15
                   12a3 3 0 11-6 0 3 3 0 016 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 3l18 18" />
        </svg>`;

    function togglePasswordVisibility(button) {
        const input = document.getElementById("password");
        const isHidden = input.type === "password";

        // Swap input type
        input.type = isHidden ? "text" : "password";

        // Swap the SVG icon
        button.innerHTML = isHidden ? EYE_SLASH_SVG : EYE_SVG;
    }

    // On page load, set the initial icon:
    document.addEventListener("DOMContentLoaded", () => {
        const btn = document.querySelector('button[onclick^="togglePasswordVisibility"]');
        btn.innerHTML = EYE_SVG;
    });
</script>





</x-guest-layout>


