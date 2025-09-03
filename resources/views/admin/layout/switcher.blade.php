<div>
        <div data-tw-toggle="modal" data-tw-target="#settings-dialog" class="fixed inset-y-0 right-0 z-50 my-auto flex hover:w-20 transition-all w-14 h-12 cursor-pointer border-(--color)/50 items-center border justify-center rounded-l-full shadow-lg overflow-hidden bg-background/80 [--color:var(--color-primary)] before:bg-(--color)/20 before:absolute before:inset-0">
            <i data-lucide="settings" class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 animate-spin"></i>
        </div>
        <div data-tw-backdrop="" class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]" id="settings-dialog">
            <div class="box relative before:absolute before:inset-0 before:mx-3 before:-mb-3 before:border before:border-foreground/10 before:z-[-1] after:absolute after:inset-0 after:border after:border-foreground/10 after:bg-background after:shadow-[0px_3px_5px_#0000000b] after:z-[-1] after:backdrop-blur-md before:bg-background/60 dark:before:shadow-background before:shadow-foreground/60 z-50 mx-auto -mt-16 p-6 transition-[margin-top,transform] duration-[0.4s,0.3s] before:rounded-3xl before:shadow-2xl after:rounded-3xl group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] sm:max-w-lg">
                <div class="flex flex-col gap-7 px-5 pb-6 pt-2 text-center">

                    <div class="">
                        <h2 class="text-lg font-medium">Main Colors</h2>
                        <div class="opacity-70">Choose your color</div>
                        <div class="mt-5 grid grid-cols-6 gap-6">
                            <div data-theme="default" class="cursor-pointer h-10 overflow-hidden bg-primary rounded-lg shadow-md image-fit ring-1 ring-offset-4 ring-offset-background ring-foreground/15 transition-transform hover:scale-[110%] duration-100"></div>
                            <div data-theme="1" class="cursor-pointer h-10 overflow-hidden bg-primary rounded-lg shadow-md image-fit ring-1 ring-offset-4 ring-offset-background ring-foreground/15 transition-transform hover:scale-[110%] duration-100"></div>
                            <div data-theme="2" class="cursor-pointer h-10 overflow-hidden bg-primary rounded-lg shadow-md image-fit ring-1 ring-offset-4 ring-offset-background ring-foreground/15 transition-transform hover:scale-[110%] duration-100"></div>
                            <div data-theme="3" class="cursor-pointer h-10 overflow-hidden bg-primary rounded-lg shadow-md image-fit ring-1 ring-offset-4 ring-offset-background ring-foreground/15 transition-transform hover:scale-[110%] duration-100"></div>
                            <div data-theme="4" class="cursor-pointer h-10 overflow-hidden bg-primary rounded-lg shadow-md image-fit ring-1 ring-offset-4 ring-offset-background ring-foreground/15 transition-transform hover:scale-[110%] duration-100"></div>
                            <div data-theme="5" class="cursor-pointer h-10 overflow-hidden bg-primary rounded-lg shadow-md image-fit ring-1 ring-offset-4 ring-offset-background ring-foreground/15 transition-transform hover:scale-[110%] duration-100"></div>
                        </div>
                    </div>
                    <div class="">
                        <h2 class="text-lg font-medium">Appearance</h2>
                        <div class="opacity-70">Choose your appearance</div>
                        <div class="mt-5 grid grid-cols-3 gap-3">
                            <div class="flex cursor-pointer flex-col gap-3 transition-transform duration-100 hover:scale-[110%]" data-dark-mode="system">
                                <div class="bg-foreground/5 flex h-10 items-center justify-center rounded-xl">
                                    <i data-lucide="settings" class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25"></i>
                                </div>
                                <div class="text-center capitalize">System</div>
                            </div>
                            <div class="flex cursor-pointer flex-col gap-3 transition-transform duration-100 hover:scale-[110%]" data-dark-mode="inactive">
                                <div class="bg-foreground/5 flex h-10 items-center justify-center rounded-xl">
                                    <i data-lucide="sun-moon" class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25"></i>
                                </div>
                                <div class="text-center capitalize">Light</div>
                            </div>
                            <div class="flex cursor-pointer flex-col gap-3 transition-transform duration-100 hover:scale-[110%]" data-dark-mode="active">
                                <div class="bg-foreground/5 flex h-10 items-center justify-center rounded-xl">
                                    <i data-lucide="moon-star" class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25"></i>
                                </div>
                                <div class="text-center capitalize">Dark</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-loader bg-background fixed inset-0 z-[100] flex items-center justify-center transition-opacity">
        <div class="loader-spinner !w-14"></div>
    </div>
