@extends('admin.layout.main')
@section('content')
    <h2 class="mt-10 text-lg font-medium">User List</h2>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="col-span-12 mt-2 flex flex-wrap items-center sm:flex-nowrap">
            <a href="{{ route('users.create') }}">
                <button
                    class="cursor-pointer inline-flex border items-center justify-center gap-2 whitespace-nowrap rounded-lg text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-(--color)/20 border-(--color)/60 text-(--color) hover:bg-(--color)/5 [--color:var(--color-primary)] h-10 px-4 py-2 box mr-2">
                    Add New User
                </button>
            </a>
            <div data-tw-placement="bottom-end" class="dropdown">
                <button
                    class="[--color:var(--color-foreground)] border items-center justify-center gap-2 whitespace-nowrap rounded-lg text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 text-(--color) hover:bg-(--color)/5 bg-background border-(--color)/20 h-10 py-2 dropdown-toggle inline-flex cursor-pointer relative z-[51] box px-2"
                    data-tw-toggle="dropdown">
                    <span class="flex h-5 w-5 items-center justify-center">
                        <i data-lucide="plus"
                            class="stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 size-4"></i>
                    </span>
                </button>
                <div
                    class="box before:absolute before:inset-0 before:mx-3 before:-mb-3 before:border before:border-foreground/10 before:bg-background/30 before:shadow-[0px_3px_5px_#0000000b] before:z-[-1] before:rounded-xl after:absolute after:inset-0 after:border after:border-foreground/10 after:bg-background after:shadow-[0px_3px_5px_#0000000b] after:rounded-xl after:z-[-1] after:backdrop-blur-md dropdown-menu invisible absolute z-50 p-1 opacity-0 before:backdrop-blur-xl [&.show]:visible [&.show]:opacity-100">
                    <div class="dropdown-content w-40">
                        <a
                            class="relative flex cursor-default select-none hover:bg-foreground/5 items-center rounded-lg px-2 py-1.5 outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                            <i data-lucide="printer"
                                class="stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 mr-2 size-4"></i>
                            Print
                        </a>
                        <a
                            class="relative flex cursor-default select-none hover:bg-foreground/5 items-center rounded-lg px-2 py-1.5 outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                            <i data-lucide="file-text"
                                class="stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 mr-2 size-4"></i>
                            Export to
                            Excel
                        </a>
                        <a
                            class="relative flex cursor-default select-none hover:bg-foreground/5 items-center rounded-lg px-2 py-1.5 outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                            <i data-lucide="file-text"
                                class="stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 mr-2 size-4"></i>
                            Export to
                            PDF
                        </a>
                    </div>
                </div>
            </div>
            {{-- <div class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto md:ml-0">
                <div class="relative w-56">
                    <input
                        class="h-10 rounded-md border bg-background px-3 py-2 ring-offset-background file:border-0 file:bg-transparent file:font-medium file:text-foreground placeholder:text-foreground/70 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-foreground/5 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 box w-56 pr-10"
                        type="text" placeholder="Search...">
                    <i data-lucide="search"
                        class="stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 absolute inset-y-0 right-0 my-auto mr-3 size-4 opacity-70"></i>
                </div>
            </div> --}}
        </div>
        <!-- BEGIN: Data List -->
        <div class="col-span-12 overflow-auto lg:overflow-visible">
            <div class="relative w-full overflow-auto">
                <table class="w-full caption-bottom border-separate border-spacing-y-[10px] -mt-2">
                    <thead class="[&_tr]:border-b-0 [&_tr_th]:h-10">
                        <tr class="transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted border-b-0">

                            <th
                                class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">
                                NAME
                            </th>
                            <th
                                class="h-12 px-4 align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 text-center">
                                Email
                            </th>
                            <th
                                class="h-12 px-4 align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 text-center">
                                STATUS
                            </th>
                            <th
                                class="h-12 px-4 align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0 text-center">
                                ACTIONS
                            </th>
                        </tr>
                    </thead>
                    <tbody class="[&_tr:last-child]:border-0">
                        @foreach ($users as $user)
                            <tr class="transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted border-b-0">

                                <td
                                    class="shadow-[3px_3px_5px_#0000000b] first:rounded-l-xl last:rounded-r-xl box rounded-none p-4 align-middle [&:has([role=checkbox])]:pr-0 border-y border-foreground/10 bg-background first:border-l last:border-r">
                                    <a class="whitespace-nowrap font-medium" href="#">
                                        {{ $user->name }}
                                    </a>
                                </td>
                                <td
                                    class="shadow-[3px_3px_5px_#0000000b] first:rounded-l-xl last:rounded-r-xl box rounded-none p-4 align-middle [&:has([role=checkbox])]:pr-0 border-y border-foreground/10 bg-background first:border-l last:border-r text-center">
                                    {{ $user->email }}
                                </td>
                                <td
                                    class="shadow-[3px_3px_5px_#0000000b] first:rounded-l-xl last:rounded-r-xl box rounded-none p-4 align-middle [&:has([role=checkbox])]:pr-0 border-y border-foreground/10 bg-background first:border-l last:border-r">
                                    <div class="flex items-center justify-center text-danger">
                                        <i data-lucide="check-square"
                                            class="stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 mr-2 size-4"></i>
                                        Inactive
                                    </div>
                                </td>
                                <td
                                    class="shadow-[3px_3px_5px_#0000000b] first:rounded-l-xl last:rounded-r-xl box rounded-none p-4 align-middle [&:has([role=checkbox])]:pr-0 border-y border-foreground/10 bg-background first:border-l last:border-r">
                                    <div class="flex items-center justify-center">
                                        <a class="mr-3 flex items-center" href="{{ route('users.edit', $user->id) }}">
                                            <i data-lucide="check-square"
                                                class="stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 mr-1 size-4"></i>
                                            Edit
                                        </a>
                                        <!-- Delete Trigger -->
                                        <a class="text-danger flex items-center" data-tw-toggle="modal"
                                            data-tw-target="#delete-confirmation-dialog"
                                            data-url="{{ route('users.destroy', $user->id) }}" href="#">
                                            <i data-lucide="trash"
                                                class="stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 mr-1 size-4"></i>
                                            Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <!-- END: Data List -->

        <!-- BEGIN: Pagination -->
        <div class="col-span-12 flex flex-wrap items-center sm:flex-row sm:flex-nowrap">
            <nav class="w-full sm:mr-auto sm:w-auto">
                <ul class="flex gap-1">
                    {{-- First Page --}}
                    <li>
                        <a href="{{ $users->url(1) }}" class="...">
                            <i data-lucide="chevrons-left"></i>
                        </a>
                    </li>

                    {{-- Previous Page --}}
                    <li>
                        <a href="{{ $users->previousPageUrl() }}"
                            class="... {{ $users->onFirstPage() ? 'opacity-50 pointer-events-none' : '' }}">
                            <i data-lucide="chevron-left"></i>
                        </a>
                    </li>

                    {{-- Page Numbers --}}
                    @foreach ($users->getUrlRange(1, $users->lastPage()) as $page => $url)
                        <li>
                            <a href="{{ $url }}"
                                class="... {{ $page == $users->currentPage() ? 'bg-background border rounded-xl' : '' }}">
                                {{ $page }}
                            </a>
                        </li>
                    @endforeach

                    {{-- Next Page --}}
                    <li>
                        <a href="{{ $users->nextPageUrl() }}"
                            class="... {{ $users->currentPage() == $users->lastPage() ? 'opacity-50 pointer-events-none' : '' }}">
                            <i data-lucide="chevron-right"></i>
                        </a>
                    </li>

                    {{-- Last Page --}}
                    <li>
                        <a href="{{ $users->url($users->lastPage()) }}" class="...">
                            <i data-lucide="chevrons-right"></i>
                        </a>
                    </li>
                </ul>

            </nav>
            <form method="GET" action="{{ route('users.index') }}">
                <select name="per_page" onchange="this.form.submit()" class="...">
                    <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                    <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
                    <option value="35" {{ request('per_page') == 35 ? 'selected' : '' }}>35</option>
                    <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
                </select>
            </form>

        </div>
        <!-- END: Pagination -->
    </div>
    <!-- BEGIN: Delete Confirmation Modal -->
    <div data-tw-backdrop=""
        class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]"
        id="delete-confirmation-dialog">
        <div
            class="box relative before:absolute before:inset-0 before:mx-3 before:-mb-3 before:border before:border-foreground/10 before:z-[-1] after:absolute after:inset-0 after:border after:border-foreground/10 after:bg-background after:shadow-[0px_3px_5px_#0000000b] after:z-[-1] after:backdrop-blur-md before:bg-background/60 dark:before:shadow-background before:shadow-foreground/60 z-50 mx-auto -mt-16 p-6 transition-[margin-top,transform] duration-[0.4s,0.3s] before:rounded-3xl before:shadow-2xl after:rounded-3xl group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] sm:max-w-lg">
            <div class="p-5 text-center">
                <i data-lucide="circle-x"
                    class="[--color:currentColor] stroke-(--color) fill-(--color)/25 text-danger mx-auto mt-3 size-16 stroke-1"></i>
                <div class="mt-5 text-2xl font-medium">Are you sure?</div>
                <div class="mt-2 opacity-70">
                    Do you really want to delete these records? <br>
                    This process cannot be undone.
                </div>
            </div>
            <div class="px-5 pb-4 text-center">
                <div class="flex justify-center gap-3">
                    <button
                        class="[--color:var(--color-foreground)] cursor-pointer inline-flex border items-center justify-center gap-2 whitespace-nowrap rounded-lg text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 text-(--color) hover:bg-(--color)/5 bg-background border-(--color)/20 h-10 px-4 py-2 w-24"
                        data-tw-dismiss="modal" type="button">
                        Cancel
                    </button>

                    <form id="deleteForm" method="POST" action="" class="inline">
                        @csrf
                        @method('DELETE')
                        <button
                            class="cursor-pointer inline-flex border items-center justify-center gap-2 whitespace-nowrap rounded-lg text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-(--color)/20 border-(--color)/60 text-(--color) hover:bg-(--color)/10 [--color:var(--color-danger)] h-10 px-4 py-2 w-24"
                            type="submit">
                            Delete
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- Script to set delete form action -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const deleteLinks = document.querySelectorAll("[data-tw-target='#delete-confirmation-dialog']");
            const deleteForm = document.getElementById("deleteForm");

            deleteLinks.forEach(link => {
                link.addEventListener("click", function() {
                    const url = this.getAttribute("data-url");
                    deleteForm.setAttribute("action", url);
                });
            });
        });
    </script>
@endsection
