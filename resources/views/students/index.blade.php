<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-medium text-gray-900">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <!-- Page background changed to white to match app layout -->
    <div class="py-16 bg-white min-h-screen">
        <div class="max-w-6xl mx-auto px-6">
            <div class="bg-white rounded-2xl shadow-sm p-8">
                <div class="flex flex-col sm:flex-row justify-between items-center gap-4 mb-6">
                    <!-- Search Form -->
                    <form method="GET" action="{{ route('students.search') }}" class="flex w-full sm:w-auto gap-2">
                        <input 
                            type="text" 
                            name="query" 
                            placeholder="Search students..." 
                            value="{{ request('query') }}"
                            class="flex-1 sm:w-64 border border-gray-300 rounded-full px-4 py-2 text-sm focus:ring-2 focus:ring-gray-800 focus:outline-none"
                        >
                        <button 
                            type="submit"
                            class="px-5 py-2 text-sm font-medium text-white bg-gray-900 rounded-full hover:bg-gray-700 transition">
                            Search
                        </button>
                    </form>

                    <!-- Add Student -->
                    <a href="{{ route('students.create') }}"
                       class="px-5 py-2 text-sm font-medium text-white bg-gray-900 rounded-full hover:bg-gray-700 transition">
                        + Add Student
                    </a>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm text-left border border-gray-200 rounded-lg overflow-hidden">
                        <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
                            <tr>
                                <th class="py-3 px-4 font-medium">First Name</th>
                                <th class="py-3 px-4 font-medium">Last Name</th>
                                <th class="py-3 px-4 font-medium">Email</th>
                                <th class="py-3 px-4 font-medium">Course</th>
                                <th class="py-3 px-4 font-medium text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @forelse ($students as $student)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="py-3 px-4">{{ $student->first_name }}</td>
                                    <td class="py-3 px-4">{{ $student->last_name }}</td>
                                    <td class="py-3 px-4">{{ $student->email }}</td>
                                    <td class="py-3 px-4">{{ $student->course }}</td>
                                    <td class="py-3 px-4 text-center">
                                        <form action="{{ route('students.destroy', $student) }}" method="POST"
                                              onsubmit="return confirm('Are you sure you want to delete this student?')" 
                                              class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-sm text-red-600 hover:text-red-800 font-medium transition">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-6 text-gray-500">
                                        No students found.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
