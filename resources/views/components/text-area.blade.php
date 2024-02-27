@props(['disabled' => false, 'value' => null])


@if (is_null($value))
    <textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
        'class' =>
            'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm',
    ]) !!}></textarea>
@else
    <textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
        'class' =>
            'relative sm:flex sm:justify-center sm:items-center  bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-whitehover:border-dotted',
    ]) !!}>{{ $value }}</textarea>
@endif
