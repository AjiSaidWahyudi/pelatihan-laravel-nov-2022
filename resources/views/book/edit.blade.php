<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('book.update', $book)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" name="title" type="text" :value="old('title', $book->title)" class="mt-1 block w-full" autofocus />
                        </div>
                        <div>
                            <x-input-label for="author" :value="__('Author')" />
                            <x-text-input id="author" name="author" type="text" :value="old('title', $book->author)" class="mt-1 block w-full" autofocus />
                        </div>
                        <div>
                            <x-input-label for="publisher" :value="__('Publisher')" />
                            <x-text-input id="publisher" name="publisher" :value="old('title', $book->publisher)" type="text" class="mt-1 block w-full" autofocus />
                        </div>
                        <div>
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@push('addcss')
    <link rel="stylesheet" href="{{asset('addstyle.css')}}">
@endpush