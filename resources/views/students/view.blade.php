<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 mt-5">
        <table class="w-full table-auto">
            <tr class="bg-emerald-500">
                <th class="border px-4 py-2 text-left text-white">ID</th>
                <th class="border px-4 py-2 text-left text-white">First Name</th>
                <th class="border px-4 py-2 text-left text-white">Last Name</th>
                <th class="border px-4 py-2 text-left text-white">Email</th>
                <th class="border px-4 py-2 text-left text-white">Phone</th>
            </tr>
                <tr>
                    <td class="border px-4 py-2 ">{{ $student->id }}</td>
                    <td class="border px-4 py-2 ">{{ $student->first_name}}</td>
                    <td class="border px-4 py-2 ">{{ $student->last_name}}</td>
                    <td class="border px-4 py-2 ">{{ $student->email }}</td>
                    <td class="border px-4 py-2 ">{{ $student->phone }}</td>
                </tr>
        </table>
    </div>
</x-app-layout>
