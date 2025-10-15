@extends('layout.app')

@section('page-content')

<div class="max-w-md mx-auto mt-10">

    @if ($errors->any())
        <div class="mb-6 p-4 text-red-800 bg-red-100 border border-red-300 rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('faculty.store') }}" method="POST" class="bg-white dark:bg-gray-800 shadow-md rounded px-8 py-6">
        @csrf

        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">Full Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}"
                class="w-full p-2.5 text-sm border rounded-lg shadow-sm 
                    focus:ring-2 focus:ring-blue-500 focus:outline-none
                    @error('name') border-red-500 bg-red-50 dark:bg-red-900 dark:border-red-700 @else border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 @enderror
                    text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-400">
            @error('name')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">Email Address</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}"
                class="w-full p-2.5 text-sm border rounded-lg shadow-sm 
                    focus:ring-2 focus:ring-blue-500 focus:outline-none
                    @error('email') border-red-500 bg-red-50 dark:bg-red-900 dark:border-red-700 @else border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 @enderror
                    text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-400">
            @error('email')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">Password</label>
            <input type="password" name="password" id="password"
                class="w-full p-2.5 text-sm border rounded-lg shadow-sm 
                    focus:ring-2 focus:ring-blue-500 focus:outline-none
                    @error('password') border-red-500 bg-red-50 dark:bg-red-900 dark:border-red-700 @else border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 @enderror
                    text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-400">
            @error('password')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>


        <div class="mb-5">
            <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">Confirm Password</label>
            <input type="password" name="confirm_password" id="confirm_password"
                class="w-full p-2.5 text-sm border rounded-lg shadow-sm 
                    focus:ring-2 focus:ring-blue-500 focus:outline-none
                    @error('password') border-red-500 bg-red-50 dark:bg-red-900 dark:border-red-700 @else border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 @enderror
                    text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-400">
            @error('password')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>


        <div class="text-center">
            <button type="submit"
                class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                Add Instructor
            </button>
        </div>
    </form>
</div>

@endsection
