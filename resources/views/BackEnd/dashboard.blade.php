@extends('BackEnd.layouts.main')
@section('title', 'Dashboard')
@section('menuDashboard', 'active')

@section('content')
    <h2>Welcome, {{ Auth::user()->username }}</h2>
    <div class="row my-5">
        <div class="col-lg-4">
            <div class="card-data dvd">
                <div class="row">
                    <div class="col-6">
                        <i class="bi bi-journal-dvdmark"></i>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">DVDs</div>
                        <div class="card-count">{{ $dvd_count }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data category">
                <div class="row">
                    <div class="col-6">
                        <i class="bi bi-tags"></i>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Categories</div>
                        <div class="card-count">{{ $category_count }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data user">
                <div class="row">
                    <div class="col-6">
                        <i class="bi bi-people"></i>
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Users</div>
                        <div class="card-count">{{ $user_count }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h2>#Rent Log</h2>
        <x-rent-log-table :rentlog='$rentlogs' />

    </div>

@endsection
