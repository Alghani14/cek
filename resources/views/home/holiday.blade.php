@extends('layouts.home')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-7 mx-auto">
            <div class="mb-2">
                @include('partials.attendance-badges')
            </div>

            <livewire:aktivitas-form attendanceId="{{ $attendance->id }}">
        </div>
    </div>
</div>
@endsection