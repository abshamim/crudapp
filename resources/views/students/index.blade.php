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
                <th class="border px-4 py-2 text-white">Actions</th>
            </tr>
                @foreach ($students as $student)
                    <tr>
                        <td class="border px-4 py-2 ">{{ $student->id }}</td>
                        <td class="border px-4 py-2 ">{{ $student->first_name}}</td>
                        <td class="border px-4 py-2 ">{{ $student->last_name}}</td>
                        <td class="border px-4 py-2 ">{{ $student->email }}</td>
                        <td class="border px-4 py-2 ">{{ $student->phone }}</td>
                        <td class="border px-4 py-2 text-center">
                            <div class="flex items-center justify-center">
                                <a class="bg-purple-600 p-2 rounded-[50px] text-white" href="{{ route('edit', $student->id) }}">
                                    @include('components.icons.edit')
                                </a>

                                <a class="bg-blue-600 p-2 mx-2 rounded-[50px] text-white" href="{{ route('view', $student->id) }}">
                                    @include('components.icons.view')
                                </a>

                                <form onclick="return confirm('Are you sure?')" method="POST" action="{{ route('delete', $student->id) }}"> @csrf
                                    <button class="mb-1 p-2 rounded-[50px] bg-rose-600 text-white" type="submit">
                                        @include('components.icons.delete')
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
        </table>
    </div>
</x-app-layout>
