@include('header.header')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-bold mb-6 text-gray-800">Edit Role</h2>
        <form action="{{ route('roles.update', $role->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Role Name
                </label>
                <input type="text"
                       name="name"
                       id="name"
                       required
                       class="w-full px-3 py-2 border rounded-md @error('name') border-red-500 @enderror"
                       value="{{ old('name', $role->name) }}">
                @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="code">
                    Role Code
                </label>
                <input type="text"
                       name="code"
                       id="code"
                       required
                       class="w-full px-3 py-2 border rounded-md @error('code') border-red-500 @enderror"
                       value="{{ old('code', $role->code) }}">
                @error('code')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-end mt-6">
                <a href="{{ route('roles.index') }}"
                   class="mr-4 text-gray-600 hover:text-gray-800">
                    Cancel
                </a>
                <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md transition-colors">
                    Update Role
                </button>
            </div>
        </form>
    </div>
</div>
