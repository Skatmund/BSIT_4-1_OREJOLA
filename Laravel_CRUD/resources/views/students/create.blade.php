
@extends('layouts.app')

@section('title', 'Enroll Student')

@section('content')

<h2 class="page-title">New Student Enrollment</h2>

<p class="subtitle">
    Record a new member in the Hogwarts student registry.
</p>

<hr class="divider">

@if($errors->any())
    <ul class="error-list">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('students.store') }}" method="POST">

    @csrf

    <div class="form-group">
        <label>Student Name</label>
        <input type="text" name="name"
               value="{{ old('name') }}"
               placeholder="Enter full name"
               required>
    </div>

    <div class="form-group">
        <label>Email Address</label>
        <input type="email" name="email"
               value="{{ old('email') }}"
               placeholder="Enter email address"
               required>
    </div>

    <div class="form-group">
        <label>Course</label>
        <input type="text" name="course"
               value="{{ old('course') }}"
               placeholder="Enter course"
               required>
    </div>

    <button type="submit" class="btn add">
        Enroll Student
    </button>

    <a href="{{ route('students.index') }}" class="btn edit">
        Return to Registry
    </a>

</form>

@endsection
