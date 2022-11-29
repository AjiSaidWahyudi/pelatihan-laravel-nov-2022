<x-app-layout>
    <x-slot name="header">
        <a href="{{route('bookcode.create')}}">Create Book Code</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Code</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookcode as $code)
                                <tr>
                                    <td>{{$code->book->title}}</td>
                                    <td>{{$code->barcode}}</td>
                                    <td>{{$code->dateofsubs}}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>