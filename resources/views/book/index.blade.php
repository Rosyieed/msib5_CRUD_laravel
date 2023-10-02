@extends('component.app')

@section('title', 'Buku')

@section('content')
    <div class="container-listbuku p-3 rounded" style="background-color: #fff">
        <h1>List Buku</h1>

        <div class="my-4 d-flex justify-content-start">
            <a href="{{ route('books.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle me-2"></i>Tambah Buku</a>
        </div>

        <hr>

        <table class="table">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->book_id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->category }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ route('books.edit', $book->book_id) }}" class="btn text-white"
                                style="background-color: rgb(49, 211, 0)"><i class="bi bi-subtract me-2"></i>Edit</a>
                            <a href="{{ route('books.destroy', $book->book_id) }}" class="btn btn-danger"
                                data-confirm-delete="true"><i class="bi bi-trash me-2"></i>Delete</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $books->links() }}
    </div>
    @include('sweetalert::alert')
@endsection
