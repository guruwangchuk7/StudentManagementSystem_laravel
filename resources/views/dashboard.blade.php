<x-app-layout>
    <x-slot name="header">
        <h2 class="font-medium text-2xl text-gray-900">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Dashboard background set to white (updated 2025-11-07) -->
    <div class="py-16 bg-white min-h-screen">
        <div class="max-w-4xl mx-auto px-6">
            <div class="bg-white rounded-2xl shadow-sm p-8 text-center">
                
                <h3 class="text-2xl font-semibold mb-2 text-gray-800">
                    Welcome, {{ Auth::user()->name }} 👋
                </h3>
                <p class="text-gray-500 mb-8">You’re logged in successfully.</p>

                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <!-- Manage Students -->
                    <a href="{{ route('students.index') }}"
                       class="px-6 py-3 bg-gray-900 text-white rounded-full text-sm font-medium 
                              hover:bg-gray-700 transition duration-200 ease-in-out">
                        🧑‍🎓 Manage Students
                    </a>

                    <!-- Add Student -->
                    <a href="{{ route('students.create') }}"
                       class="px-6 py-3 bg-gray-100 text-gray-800 rounded-full text-sm font-medium 
                              hover:bg-gray-200 transition duration-200 ease-in-out">
                        ➕ Add Student
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
