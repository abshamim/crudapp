<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Student') }}
        </h2>
    </x-slot>

    <div class="container mx-auto flex justify-center mt-7 px-4 sm:px-6 lg:px-8">
        <div>
            <h1 class="text-center mb-8">Add Student</h1>
            <form class="w-full max-w-lg" action="{{ route('store') }}" method="POST"> @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="text-xs text-gray-700 font-bold mb-4" for="firstName">First Name</label>
                    <input class="crud-input" name="firstName" type="text" placeholder="First Name">
                  </div>

                  <div class="w-full md:w-1/2 px-3">
                    <label class="text-xs text-gray-700 font-bold mb-4" for="lastName">Last Name</label>
                    <input class="crud-input" name="lastName" type="text" placeholder="Last Name">
                  </div>

                  <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 mt-3">
                    <label class="text-xs text-gray-700 font-bold mb-4" for="email">Email</label>
                    <input class="crud-input" name="email" type="email" placeholder="Email">
                  </div>

                  <div class="w-full md:w-1/2 px-3 mt-3">
                    <label class="text-xs text-gray-700 font-bold mb-4" for="phone">Phone</label>
                    <input class="crud-input" name="phone" type="number" placeholder="Phone">
                  </div>


                  <div class="w-full md:w-1/2 px-3 mt-3">
                    <button class="bg-blue-800 rounded text-white px-5 py-2" type="submit">Add</button>
                  </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
