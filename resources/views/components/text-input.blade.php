{{-- @props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!}> --}}

@props([
    'required' => '',
    'type' => 'text',
    'name' => '',
    'label' => '',
    'value' => '',
])

@if ($label === 'none')
@elseif ($label === '')
    @php
        //remove underscores from name
        $label = str_replace('_', ' ', $name);
        //detect subsequent letters starting with a capital
        $label = preg_split('/(?=[A-Z])/', $label);
        //display capital words with a space
        $label = implode(' ', $label);
        //uppercase first letter and lower the rest of a word
        $label = ucwords(strtolower($label));
    @endphp
@endif

<div class="mb-5">
    @if ($label != 'none')
        <label for="{{ $name }}" class="text-label">{{ $label }}
            @if ($required != '')
                <span class="error">*</span>
            @endif
        </label>
    @endif
    <div class="rounded-md shadow-sm">
        <input {{ $attributes }} type="{{ $type }}" id="{{ $name }}" name="{{ $name }}"
            value="{{ $slot }}" {{ $required }}
            {{ $attributes->merge([
                'class' => 'text-input',
            ]) }}>
    </div>
    @error($name)
        <span class="error">{{ $message }}</span>
    @enderror
</div>
