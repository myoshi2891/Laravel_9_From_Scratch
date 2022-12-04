@props(['name', 'type' => 'text'])

<x-form.field>
    <x-form.label name="{{ $name }}" />

    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name) }}"
        class="border border-gray-400 p-2 w-full" required>

    <x-form.error name="{{ $name }}" />
</x-form.field>
