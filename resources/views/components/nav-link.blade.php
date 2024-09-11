@props(['active', 'title', 'label', 'variant', 'icon'])

@php
    $classes = $active ?? false ? ($variant = 'default') : ($variant = 'ghost');

@endphp

{{-- <a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a> --}}

<x-button {{ $attributes->merge([]) }} :variant="$variant">
    <x-dynamic-component :component="$icon" class="mr-2 h-4 w-4" />
    {{ $title }}
    <span class="ml-auto">
        {{ $label }}
    </span>
</x-button>
