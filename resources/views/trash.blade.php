@extends('layout.app')

@section('content')

    <div class="w-9/12 mx-auto p-3 m-3">
        @if (Session::has('message'))
            <div class="w-auto h-auto my-2 rounded-md bg-gradient-to-r from-cyan-500 to-blue-500">
                <p class="px-5 py-5 text-2xl font-semibold text-white">{{ Session::get('message') }}</p>
            </div>
        @endif

        <div class="mx-auto border rounded-lg">
            <div class="px-4 py-3 border-b bg-gradient-to-r from-cyan-500 to-indigo-500 rounded-t-lg">
                <p class="text-2xl font-semibold text-white">Deleted Task - ToDo</p>
            </div>

            @if ($tasks->isNotEmpty())
            <div class="grid grid-cols-3 gap-10 p-4 py-10">
                @foreach ($tasks as $task)
                    <div class="flex flex-col bg-white rounded-md p-2 px-4 border hover:shadow-2xl">
                        <div class="space-y-2">
                            <p class="text-2xl font-semibold">{{  $task->name }}</p>
                            <span class="text-xs">{{ $task->user }}</span>
                        </div>
                        <div class="mt-2">
                            <p class="text-sm">{{ $task->description }}</p>
                        </div>
                        <div class="mt-auto pt-2">
                            <div class="inline-flex">
                                <form method="POST" action="{{ route('remove.task', $task->id) }}">
                                    @csrf
                                    <button type="submit">
                                        <span class="material-symbols-outlined text-red-600 align-middle cursor-pointer" title="Delete Task">
                                            delete
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @else
                <div class="text-center mx-auto py-3">
                    <p class="text-4xl font-bold text-gray-600 mt-10 mb-10">No Task in Trash</p>
                </div>
            @endif
        </div>
    </div>
@stop