@extends('component.app')

@section('title', 'Landing')

@section('content')
    <div class="container-dashboard">
        <div class="container-h1-dash p-3 rounded" style="background-color: #fff">
            <h1>Dashboard</h1>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="card-data book rounded">
                        <div class="row mx-auto">
                            <div class="col-6"><i class="bi bi-book"></i></div>
                            <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                                <div class="card-desc">Books</div>
                                <div class="card-count">{{ $book_count }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
