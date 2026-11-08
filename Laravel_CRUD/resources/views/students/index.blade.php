
@extends('layouts.app')

@section('title', 'Student Registry')

@section('content')

<h2 class="page-title">Student Registry</h2>

<p class="subtitle">
    The official enrollment records of Hogwarts School.
</p>

<hr class="divider">

<a href="{{ route('students.create') }}" class="btn add">
    + Enroll New Student
</a>

@if(session('success'))
    <div class="success">
        {{ session('success') }}
    </div>
@endif

<div class="table-wrapper">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Email Address</th>
                <th>Course</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->course }}</td>
                    <td>
                        <div class="actions">

                            <a href="{{ route('students.edit', $student->id) }}"
                               class="btn edit">
                                Edit
                            </a>

                            <form action="{{ route('students.destroy', $student->id) }}"
                                  method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn delete"
                                        onclick="return confirm('Remove this student from the Hogwarts registry?')">
                                    Delete
                                </button>

                            </form>

                        </div>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="5" class="empty">
                        No students have been enrolled in the registry yet.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
