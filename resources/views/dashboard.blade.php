<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @session('success')
                    <div class="p-4 bg-green-400">
                        {{ $value }}
                    </div>
                @endsession
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Seja bem vindo!!') }}
                    <a href="{{ route('todo.todo') }}">
                        <button
                            class="bg-transparent hover:bg-gray-500 text-white-700 font-semibold hover:text-white py-2 px-4 border border-white-500 hover:border-transparent rounded mt-3 ml-7">
                            Adicionar nota
                        </button>
                    </a>
                </div>
            </div>
            <div>
                @if (session('todos'))
                    @foreach (session('todos') as $todo)
                        <div>{{ $todo->title }}</div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
