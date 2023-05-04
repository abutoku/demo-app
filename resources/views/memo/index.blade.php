<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('my memo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action={{ route('memos.store') }} method="post">
                @csrf
                    <input type="text" name="memo" required>
                    <button type="submit" class="ml-4 p-2 bg-slate-500 rounded text-white">
                        送信
                    </button>
            </form>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach ($memos as $memo)
                        <form action={{ route('memos.destroy', $memo->id ) }} method="post"
                            class="flex justify-between items-center">
                            @method('DELETE')
                            @csrf
                                <p class="m-2">{{ $memo->memo }}</p>
                                <button>削除</button>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
