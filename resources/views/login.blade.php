@extends('layout')

@section('content')

    <div>

        @if(session()->has('message'))
            <div class="px-4 py-2 border rounded bg-yellow-300">
                {{ session()->get('message') }}
            </div>
        @endif

        <form method="POST" action="/login">
        @csrf

            <div class="my-2">
                Guard Type
                <select name="guard" id="guard" class="px-4 py-2 border rounded w-full">
                    <option value="doctor" {{ old('guard') == 'doctor' ? 'selected' : '' }}>Doctor</option>
                    <option value="patient" {{ old('guard') == 'patient' ? 'selected' : '' }}>Patient</option>
                    <option value="staff" {{ old('guard') == 'staff' ? 'selected' : '' }}>Staff</option>
                </select>
            </div>

            <div class="my-2">
                Username
                <input type="text" name="username" id="username" value="{{ old('username', 'doctor') }}" class="px-4 py-2 border rounded w-full">
            </div>

            <div class="my-2">
                Password (123)
                <input type="password" name="password" value="123" class="px-4 py-2 border rounded w-full">
            </div>

            <div class="my-2">
                <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded w-full">Login</button>
            </div>

        </form>
    </div>

@endsection

@push('scripts')

    <script>
        const usernameElement = document.querySelector('#username')

        document.querySelector('#guard').addEventListener('change', function(e) {
            usernameElement.value = e.target.value
        });
    </script>

@endpush
