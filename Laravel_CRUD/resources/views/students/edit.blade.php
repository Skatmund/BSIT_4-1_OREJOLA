
@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')

<h2 class="page-title">Student Record Amendment</h2>

<p class="subtitle">
    Modify the enrollment details of an existing student.
</p>

<hr class="divider">

@if($errors->any())
    <ul class="error-list">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('students.update', $student->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Student Name</label>
        <input type="text" name="name"
               value="{{ old('name', $student->name) }}"
               required>
    </div>

    <div class="form-group">
        <label>Email Address</label>
        <input type="email" name="email"
               value="{{ old('email', $student->email) }}"
               required>
    </div>

    <div class="form-group">
        <label>Course</label>
        <input type="text" name="course"
               value="{{ old('course', $student->course) }}"
               required>
    </div>

    <button type="submit" class="btn add">
        Save Changes
    </button>

    <a href="{{ route('students.index') }}" class="btn edit">
        Return to Registry
    </a>

</form>

@endsection
