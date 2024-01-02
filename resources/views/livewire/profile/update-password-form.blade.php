<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Livewire\Volt\Component;

new class extends Component {
    public string $current_password = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Update the password for the currently authenticated user.
     */
    public function updatePassword(): void
    {
        try {
            $validated = $this->validate([
                'current_password' => ['required', 'string', 'current_password'],
                'password' => ['required', 'string', Password::defaults(), 'confirmed'],
            ]);
        } catch (ValidationException $e) {
            $this->reset('current_password', 'password', 'password_confirmation');

            throw $e;
        }

        Auth::user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        $this->reset('current_password', 'password', 'password_confirmation');
        $this->dispatch('password-updated');
    }
}; ?>

<section>
    <div class="max-w-2xl card">
        <div class="card-title">{{ __('Update Password') }}
            <div class="card-sub-title">{{ __('Ensure your account is using a long, random password to stay secure.') }}
            </div>
        </div>
        <div class="card-body">
            <form wire:submit="updatePassword">
                <x-text-input wire:model="current_password" type="password" :label="__('Password')" name='current_password'
                    id="update_password_current_password" />

                <x-text-input wire:model="password" type="password" :label="__('Password')" name='password'
                    id="update_password_password" />

                <x-text-input wire:model="password_confirmation" type="password" :label="__('Confirm Password')"
                    name='password_confirmation' id="update_password_password_confirmation" required />

                <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('Save') }}</x-primary-button>

                    <x-action-message class="me-3" on="password-updated">
                        {{ __('Saved.') }}
                    </x-action-message>
                </div>
            </form>
        </div>
    </div>
</section>
