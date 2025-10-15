@extends('layout.app')

@section('page-content')
<div class="max-w-md mx-auto mt-10 bg-white dark:bg-gray-800 shadow-md rounded px-8 py-6">
    @if ($errors->any())
        <div class="mb-6 p-4 text-red-800 bg-red-100 border border-red-300 rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('faculty.update', $user->id) }}">
        @csrf
        @method('PUT')

        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100 mb-6">Update User: {{ $user->name }}</h2>

        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">Full Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required
                class="w-full p-2.5 text-sm border rounded-lg shadow-sm 
                    focus:ring-2 focus:ring-blue-500 focus:outline-none
                    @error('name') border-red-500 bg-red-50 dark:bg-red-900 dark:border-red-700 @else border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 @enderror
                    text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-400">
            @error('name')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">Email Address</label>
            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required
                class="w-full p-2.5 text-sm border rounded-lg shadow-sm 
                    focus:ring-2 focus:ring-blue-500 focus:outline-none
                    @error('email') border-red-500 bg-red-50 dark:bg-red-900 dark:border-red-700 @else border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 @enderror
                    text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-400">
            @error('email')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">New Password <span class="text-gray-500">(optional)</span></label>
            <input type="password" name="password" id="password" placeholder="Leave blank to keep current password"
                class="w-full p-2.5 text-sm border rounded-lg shadow-sm 
                    focus:ring-2 focus:ring-blue-500 focus:outline-none
                    @error('password') border-red-500 bg-red-50 dark:bg-red-900 dark:border-red-700 @else border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 @enderror
                    text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-400">
            @error('password')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="text-center">
            <button type="submit"
                class="w-full text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-800">
                Save Changes
            </button>
        </div>
    </form>
</div>
@endsection
