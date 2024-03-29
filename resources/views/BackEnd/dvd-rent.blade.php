@extends('BackEnd.layouts.main')
@section('title', 'DVD Rent')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
        <h1 class="mb-5">DVD Rent Form</h1>
        @if (Session::has('message'))
            <div class="alert {{ session('alert-class') }}">
                {{ Session('message') }}
            </div>
        @endif
        <form action="dvd-rent" method="post">
            @csrf
            <div class="mb-3">
                <label for="user" class="form-label">User</label>
                <select name="user_id" id="user" class="form-control inputbox">
                    <option value="">Select User</option>
                    @foreach ($users as $item)
                        <option value="{{ $item->id }}">{{ $item->username }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="dvd" class="form-label">DVD</label>
                <select name="dvd_id" id="dvd" class="form-control inputbox">
                    <option value="">Select DVD</option>
                    @foreach ($dvds as $item)
                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.inputbox').select2();
        });
    </script>
@endsection
