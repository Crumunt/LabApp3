@extends('layout.app')

@section('page-content')
    <div class="container mx-auto px-4">
        <!-- ADD Button -->
        <div class="flex justify-end my-4">
            <a href="{{ route('faculty.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                + ADD
            </a>
        </div>

        @if(session('error'))
            <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @elseif (session('success'))
            <div class="bg-emerald-100 text-emerald-800 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Table Wrapper -->
        <div class="overflow-x-auto bg-white shadow rounded-lg">
            <table class="min-w-full text-sm text-left text-gray-700">
                <thead class="text-xs uppercase bg-gray-100 text-gray-600">
                    <tr>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Email</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($users as $user)
                        <tr>
                            <td class="px-6 py-4">{{ $user->name }}</td>
                            <td class="px-6 py-4">{{ $user->email }}</td>
                            <td class="px-6 py-4 space-x-2">
                                <!-- Edit Button -->
                                <a href="{{ route('student.edit', $user->id) }}">
                                    <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">
                                        Edit
                                    </button>
                                </a>

                                <!-- Delete Form -->
                                <form action="{{ route('student.destroy', $user->id) }}" method="POST" class="inline-block"
                                    onsubmit="return confirm('Are you sure you want to delete this user?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-6 py-4 text-center text-gray-500">
                                No users found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection