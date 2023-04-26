<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table w-full border-collapse border border-gray-400">
                    <thead>
                    <tr>
                        <th class="p-2 border border-gray-400">ID</th>
                        <th class="p-2 border border-gray-400">Name</th>
                        <th class="p-2 border border-gray-400">Email</th>
                        <th class="p-2 border border-gray-400">Age</th>
                        <th class="p-2 border border-gray-400">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="p-2 border border-gray-400">{{ $user->id }}</td>
                            <td class="p-2 border border-gray-400">{{ $user->name }}</td>
                            <td class="p-2 border border-gray-400">{{ $user->email }}</td>
                            <td class="p-2 border border-gray-400">{{ \Carbon\Carbon::createFromDate($user->birthday)->age }}</td>
                            <td class="p-2 border border-gray-400">
                                <div class="text-center">
                                    <a href="{{ route('users.edit', $user->id) }}"
                                       class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="post" class="inline-block p-4 ">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                                onclick="return confirm('¿Are you sure?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
