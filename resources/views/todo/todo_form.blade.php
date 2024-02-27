<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    @endif

                    @if (isset($todo))
                        <form method="POST" action="{{ route('todo.update', $todo->id) }}">
                            <x-text-input id="title" class="hidden" type="text" name="_method" value="PUT" />
                        @else
                            <form method="POST" action="{{ route('todo.store') }}">
                    @endif

                    @csrf
                    <div class="relative sm:column sm:justify-center sm:items-center ">
                        <label for="title">TITULO</label>
                        <x-text-input id="title" class="block mt-1  w-80" type="title" name="title"
                            value="{{ @$todo->title }}" disabled="{{ isset($show) }}" />

                        <label for="body">TEXTO</label>
                        <x-text-area name="body" id="body" cols="30" disabled="{{ isset($show) }}"
                            rows="10" value="{{ @$todo->body }}" />

                        @if (!isset($show))
                            <button type="submit"
                                class="bg-transparent hover:bg-gray-500 text-white-700 font-semibold hover:text-white py-2 px-4 border border-white-500 hover:border-transparent rounded mt-3">Enviar</button>
                        @endif
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
