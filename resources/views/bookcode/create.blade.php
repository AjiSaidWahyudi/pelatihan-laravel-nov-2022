<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('bookcode.store')}}" method="post">
                        @csrf
                        <div>
                            <select name="book_id" id="">
                                @foreach ($books as $book)
                                    <option value="{{$book->id}}">{{$book->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <x-input-label for="barcode" :value="__('Barcode')" />
                            <x-text-input id="barcode" name="barcode" type="text" class="mt-1 block w-full" autofocus />
                        </div>
                        <div>
                            <x-input-label for="dateofsubs" :value="__('Publisher')" />
                            <x-text-input id="dateofsubs" name="dateofsubs" type="date" class="mt-1 block w-full" autofocus />
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