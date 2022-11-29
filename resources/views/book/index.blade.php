<x-app-layout>
    <x-slot name="header">
        <a href="{{route('book.create')}}">Create Book</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th>Book</th>
                                <th>Author</th>
                                <th>Publisher</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                            <tr>
                                <td>{{$book->title}}</td>
                                <td>{{$book->author}}</td>
                                <td>{{$book->publisher}}</td>
                                <td>
                                    <form action="{{route('book.destroy', $book)}}" method="post">
                                        <a href="{{route('book.show', $book)}}">Show</a>
                                        <a href="{{route('book.edit', $book)}}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onClick='alert("Delete?")'>Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>