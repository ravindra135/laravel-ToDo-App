@extends('layout.app')

@section('content')

    <div class="w-9/12 mx-auto p-3 m-3">
        @if (Session::has('message'))
            <div class="w-auto h-auto rounded-md bg-gradient-to-r from-cyan-500 to-blue-500">
                <p class="px-5 py-6 text-2xl font-semibold text-white">{{ Session::get('message') }}</p>
            </div>
        @endif
        <div class="flex flex-col w-3/5 my-20 mx-auto bg-white border rounded-md shadow-md hover:shadow-lg transition-all">
            <div class="w-full bg-gradient-to-r from-cyan-500 to-indigo-500 px-2 py-3 text-center rounded-t-md">
                <p class="text-2xl text-white">Add Task</p>
            </div>
            <div class="w-full px-5 py-5 rounded-b-md ">
                <div class="max-w-lg rounded-md shadow p-6 mx-auto lg:ml-auto space-y-6">
                    <form method="POST" action="{{ route('store.task') }}" class="space-y-4">
                        @csrf
                        <div class="group">
                            <label for="name" class="text-lg font-semibold group-hover:text-indigo-500">Name:</label>
                            <input class="w-full rounded-md outline-gray-300 text-gray-500 border px-4 py-2" required type="text" placeholder="Task Name" name="name" id="name">
                        </div>
                        <div class="group">
                            <label for="description" class="text-lg font-semibold group-hover:text-indigo-500">Description:</label>
                            <textarea class="w-full rounded-md outline-gray-300 text-gray-500 border px-4 py-2 " type="text" rows="3" placeholder="Something about it!!" name="description" id="description"></textarea>
                        </div>
                        <div class="group">
                            <label for="deadline" class="text-lg font-semibold group-hover:text-indigo-500">Deadline:</label>
                            <input type="datetime-local" class="w-full rounded-md outline-gray-300 text-gray-500 border px-4 py-2" placeholder="Select Date" name="deadline" id="deadline">
                        </div>
                        <div>
                            <button class="px-7 py-3 bg-indigo-500 rounded-md text-white hover:shadow-lg hover:bg-indigo-400 transition-all">
                                <span class="mr-1 material-symbols-outlined align-middle">
                                    add_task
                                    </span>
                                Add
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>    
    </div>

@stop