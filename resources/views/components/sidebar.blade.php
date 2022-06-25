<div class="flex flex-col w-96 h-screen overflow-y-auto border-r relative z-10">
    <div class="flex px-4 py-5 mx-auto">
        <h2 class="text-3xl font-semibold text-blue-800">ToDo App</h2>
    </div>

    {{-- Sidebar Items --}}
    <div class="flex flex-col px-4">
        <aside>
            <div>
                <ul class="space-y-2">
                    <li>
                        <a  href="{{ route('home') }}">
                        <div class="group flex items-center  gap-5 rounded-md w-ful px-2 py-2 hover:border hover:shadow-md {{ (request()->is('/')) ? 'border shadow-md' : '' }} transition-all">
                            <div class="inline-flex rounded-md bg-gray-200 group-hover:bg-indigo-200 {{ (request()->is('/')) ? 'bg-indigo-200' : '' }}">
                                <span class="material-symbols-outlined px-2 py-2"> home </span>
                            </div>
                            <div>
                                <p class="font-semibold">Dashboard</p>
                            </div>
                        </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('add.task') }}">
                        <div class=" group flex items-center gap-5 rounded-md w-full px-2 py-2 hover:border hover:shadow-md {{ (request()->is('add')) ? 'border shadow-md' : '' }} transition-all">
                            <div class="inline-flex rounded-md bg-gray-200 group-hover:bg-indigo-200 {{ (request()->is('add')) ? 'bg-indigo-200' : '' }}">
                                <span class="material-symbols-outlined px-2 py-2"> note_add </span>
                            </div>
                            <div>
                                <p class="font-semibold ">Add Task</p>
                            </div>
                        </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('finished.task') }}">
                            <div class="group flex items-center  gap-5 rounded-md w-full px-2 py-2 hover:border hover:shadow-md {{ (request()->is('finished')) ? 'border shadow-md' : '' }} transition-all">
                                <div class="inline-flex rounded-md bg-gray-200 group-hover:bg-indigo-200 {{ (request()->is('finished')) ? 'bg-indigo-200' : '' }}">
                                    <span class="material-symbols-outlined px-2 py-2"> task </span>
                                </div>
                                <div>
                                    <p class="font-semibold ">Finished</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                       <a href="{{ route('trashed.task') }}">
                            <div class="group flex items-center  gap-5 rounded-md w-full px-2 py-2 hover:border hover:shadow-md {{ (request()->is('trashed')) ? 'border shadow-md' : '' }} transition-all">
                                <div class="inline-flex rounded-md bg-gray-200 group-hover:bg-indigo-200 {{ (request()->is('trashed')) ? 'bg-indigo-200' : '' }}">
                                    <span class="material-symbols-outlined px-2 py-2"> auto_delete </span>
                                </div>
                                <div>
                                    <p class="font-semibold ">Trash Bin</p>
                                </div>
                            </div>
                       </a>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
    {{-- Buttons --}}
    <div class="flex flex-col px-6 mt-auto">
        <div class="flex space-x-4">
            <div class="rounded-md bg-gray-200 hover:bg-indigo-200 transition-all">
                <span class="material-symbols-outlined px-2 py-2"> reorder </span>
            </div>
            <div class="rounded-md bg-gray-200 hover:bg-indigo-200 transition-all">
                <span class="material-symbols-outlined px-2 py-2"> nights_stay </span>
            </div>
        </div>
    </div>

    {{-- R Cube Dev --}}
    <div class="container mt-20">
    <div class="absolute bottom-0 w-full -z-10 border-t shadow-md">
        <div class="px-4 py-3 ">
            <div class="flex mx-auto items-center px-2 gap-7">
                <img class="h-10 w-10 rounded-full" src="{{ asset('images/rcube.jpg') }}" alt="">
                <p class="text-2xl font-semibold text-blue-800">R Cube Dev</p>
            </div>
        </div>
    </div>
    </div>
</div>