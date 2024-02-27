<x-app-layout>
    <div class="p-6 mx-auto sm:px-6 lg:px-8 text-gray-900 dark:text-gray-100">
        <a href="{{ route('todo.create') }}">
            <button
                class="bg-transparent hover:bg-gray-500 text-white-700 font-semibold hover:text-white py-2 px-4 border border-white-500 hover:border-transparent rounded mt-3 ml-7">
                Adicionar nota
            </button>
        </a>
    </div>

    <div class="p-8">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @session('success')
                    <div class="p-4 bg-green-400">
                        {{ $value }}
                    </div>
                @endsession
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-5 grid gap-4 grid-cols-4 ">

                @if (isset($todos))

                    @foreach ($todos as $todo)
                        <div
                            class=" bg-zinc-500 scroll-px-0.5 my-3 mx-3 flex flex-col justify-between whitespace-pre-wrap min-h-32 py-4 px-4 sm:rounded-lg text-zinc-300">
                            <h4>{{ $todo->title }}</h4>
                            <p>{{ $todo->body }}</p>
                            <x-heroicon-o-trash class="w-8" />
                            <a href="{{ route('todo.show', $todo->id) }}" class="p-0 m-0">
                                <x-heroicon-o-eye class="w-8" />
                            </a>
                            <a href="{{ route('todo.edit', $todo->id) }}" class="p-0 m-0">
                                <x-heroicon-o-pencil-square class="w-8" />
                            </a>
                        </div>
                    @endforeach

                @endif
            </div>
        </div>
    </div>
</x-app-layout>
