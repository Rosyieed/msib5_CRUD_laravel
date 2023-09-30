@extends('component.app')

@section('title', 'Book Edit')

@section('content')
    <div class="container-editbuku p-3 rounded" style="background-color: #fff">
        <h1>Edit Buku</h1>

        <div class="mt-2 d-flex justify-content-end">
            <a href="/books" class="btn btn-primary me-3">Kembali</a>
        </div>
        <hr>

        <div class="mt-3 w-50">
            <form action="{{ route('books.update', $book->book_id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Pengarang</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Judul Buku"
                        required value="{{ $book->title }} ">
                    @error('title')
                        <div class="alert alert-danger" style="margin-top: 10px;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label">Pengarang</label>
                    <input type="text" name="author" id="author" class="form-control" placeholder="Judul Buku"
                        required value="{{ $book->author }} ">
                    @error('author')
                        <div class="alert alert-danger" style="margin-top: 10px;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <input type="text" name="category" id="category" class="form-control" placeholder="Category Buku"
                        required value="{{ $book->category }}">
                    @error('category')
                        <div class="alert alert-danger" style="margin-top: 10px;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mt-3">
                    <button class="btn btn-success" type="submit">Save</button>
                </div>
            </form>
        </div>

    </div>
@endsection
