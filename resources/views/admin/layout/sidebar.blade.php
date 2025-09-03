<div class="side-menu text-background dark:text-foreground xl:ml-0 transition-[margin] duration-200 fixed top-0 left-0 z-50 group before:content-[''] before:fixed before:inset-0 before:bg-black/80 dark:before:bg-foreground/5 before:backdrop-blur before:xl:hidden after:content-[''] after:absolute after:inset-0 after:bg-primary after:xl:hidden dark:after:bg-background after:bg-noise [&.side-menu--mobile-menu-open]:ml-0 [&.side-menu--mobile-menu-open]:before:block -ml-[275px] before:hidden">
    <div
        class="close-mobile-menu fixed ml-[275px] xl:hidden z-50 cursor-pointer [&.close-mobile-menu--mobile-menu-open]:block hidden">
        <div class="ml-5 mt-5 flex size-10 items-center justify-center">
            <i data-lucide="x" class="[--color:currentColor] stroke-(--color) fill-(--color)/25 size-7 stroke-1"></i>
        </div>
    </div>
    <div
        class="side-menu__content z-20 pt-5 pb-[7.5rem] relative w-[275px] duration-200 transition-[width] group-[.side-menu--collapsed]:xl:w-[110px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] h-screen flex flex-col">
        <div
            class="relative z-10 hidden h-[65px] w-[275px] flex-none items-center overflow-hidden px-6 duration-200 xl:flex group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] group-[.side-menu--collapsed]:xl:w-[110px]">
            <a class="flex items-center transition-[margin] duration-200 xl:ml-2 group-[.side-menu--collapsed.side-menu--on-hover]:xl:ml-2 group-[.side-menu--collapsed]:xl:ml-6"
                href="#">
                <img class="size-5" src="{{ url('e-sim/dist/images/logo.svg') }}">
                <div
                    class="ml-3.5 text-nowrap transition-opacity group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0">
                    <span class="text-base font-medium">Midone</span>
                    <span class="text-base font-light">Rubick</span>
                </div>
            </a>
            <a class="toggle-compact-menu border-background/20 bg-background/10 dark:bg-foreground/[.02] dark:border-foreground/[.09] ml-auto hidden items-center justify-center rounded-md border py-0.5 pl-0.5 pr-1 opacity-70 transition-[opacity,transform] hover:opacity-100 group-[.side-menu--collapsed]:xl:rotate-180 group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0 2xl:flex"
                href="#">
                <i data-lucide="chevron-left"
                    class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25"></i>
            </a>
        </div>
        <div
            class="w-full h-full z-20 px-4 overflow-y-auto overflow-x-hidden pb-3 [&:-webkit-scrollbar]:w-0 scroll-smooth [&_.simplebar-scrollbar]:before:!bg-background/70 [-webkit-mask-image:_linear-gradient(to_top,_rgba(0,_0,_0,_0),_black_30px),_linear-gradient(to_bottom,_rgba(0,_0,_0,_0),_black_30px)] [-webkit-mask-composite:_destination-in]">
            <ul class="scrollable">
                <!-- BEGIN: First Child -->
                <li class="side-menu__group-label">
                    GENERAL REPORTS
                </li>
                <!-- END: First Child -->
                <!-- BEGIN: First Child -->
                <li>
                    <a href="{{ route('admin.pages.dashboard') }}" class="side-menu__link ">
                        <i data-lucide="circle-gauge"
                            class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Dashboards</div>
                    </a>`

                </li>
                <!-- END: First Child -->
                <!-- BEGIN: First Child -->
                <li>
                    <a href="javascript:;" class="side-menu__link side-menu__link--active">
                        <i data-lucide="square-kanban"
                            class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Pages</div>
                        <i data-lucide="chevron-down"
                            class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 side-menu__link__chevron transition"></i>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <ul class="block">
                        <li>
                            <a href="{{ route('users.index') }}" class="side-menu__link ">
                                <i data-lucide="circle-gauge"
                                    class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Users
                                </div>
                            </a>
                            <!-- BEGIN: Third Child -->
                            <!-- END: Third Child -->
                        </li>
                        <li>
                            <a href="rubick-side-menu-add-product.html" class="side-menu__link ">
                                <i data-lucide="circle-gauge"
                                    class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Add Product
                                </div>
                            </a>
                            <!-- BEGIN: Third Child -->
                            <!-- END: Third Child -->
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu__link ">
                                <i data-lucide="circle-gauge"
                                    class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Products
                                </div>
                                <i data-lucide="chevron-down"
                                    class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 side-menu__link__chevron transition"></i>
                            </a>
                            <!-- BEGIN: Third Child -->
                            <ul class="hidden">
                                <li>
                                    <a href="rubick-side-menu-product-list.html" class="side-menu__link ">
                                        <i data-lucide="circle-gauge"
                                            class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">
                                            Product List
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="rubick-side-menu-product-grid.html" class="side-menu__link ">
                                        <i data-lucide="circle-gauge"
                                            class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">
                                            Product Grid
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <!-- END: Third Child -->
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu__link ">
                                <i data-lucide="circle-gauge"
                                    class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Transactions
                                </div>
                                <i data-lucide="chevron-down"
                                    class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 side-menu__link__chevron transition"></i>
                            </a>
                            <!-- BEGIN: Third Child -->
                            <ul class="hidden">
                                <li>
                                    <a href="rubick-side-menu-transaction-list.html" class="side-menu__link ">
                                        <i data-lucide="circle-gauge"
                                            class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">
                                            Transaction List
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="rubick-side-menu-transaction-detail.html" class="side-menu__link ">
                                        <i data-lucide="circle-gauge"
                                            class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">
                                            Transaction Detail
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <!-- END: Third Child -->
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu__link side-menu__link--active">
                                <i data-lucide="circle-gauge"
                                    class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Sellers
                                </div>
                                <i data-lucide="chevron-down"
                                    class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 side-menu__link__chevron transition"></i>
                            </a>
                            <!-- BEGIN: Third Child -->
                            <ul class="block">
                                <li>
                                    <a href="rubick-side-menu-seller-list.html"
                                        class="side-menu__link side-menu__link--active">
                                        <i data-lucide="circle-gauge"
                                            class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">
                                            Seller List
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="rubick-side-menu-seller-detail.html" class="side-menu__link ">
                                        <i data-lucide="circle-gauge"
                                            class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 side-menu__link__icon"></i>
                                        <div class="side-menu__link__title">
                                            Seller Detail
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <!-- END: Third Child -->
                        </li>
                        <li>
                            <a href="rubick-side-menu-reviews.html" class="side-menu__link ">
                                <i data-lucide="circle-gauge"
                                    class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 side-menu__link__icon"></i>
                                <div class="side-menu__link__title">
                                    Reviews
                                </div>
                            </a>
                            <!-- BEGIN: Third Child -->
                            <!-- END: Third Child -->
                        </li>
                    </ul>
                    <!-- END: Second Child -->
                </li>
            </ul>
        </div>
        <div
            class="side-menu__account group/profile absolute inset-x-0 bottom-0 mx-4 mb-8 transition-[width] group-[.side-menu--collapsed.side-menu--on-hover]:block group-[.side-menu--collapsed]:justify-center xl:group-[.side-menu--collapsed]:flex">
            <div
                class="bg-background/10 border-background/20 dark:bg-foreground/[.02] dark:border-foreground/[.09] flex cursor-pointer items-center rounded-full border p-2.5 opacity-80 backdrop-blur-2xl transition hover:opacity-100">
                <div
                    class="border-background/20 dark:border-foreground/20 relative h-10 w-10 flex-none overflow-hidden rounded-full border-4">
                    <img class="absolute top-0 h-full w-full object-cover" src="{{ url('e-sim/dist/images/fakers/profile-15.jpg') }}"
                        alt="Midone - Admin Dashboard Template">
                </div>
                <div
                    class="ms-3 flex w-full items-center overflow-hidden transition-opacity group-[.side-menu--collapsed.side-menu--on-hover]:ms-3 group-[.side-menu--collapsed.side-menu--on-hover]:w-full group-[.side-menu--collapsed.side-menu--on-hover]:opacity-100 xl:group-[.side-menu--collapsed]:ms-0 xl:group-[.side-menu--collapsed]:w-0 xl:group-[.side-menu--collapsed]:opacity-0">
                    <div class="w-28">
                        <div class="w-full truncate font-medium">Edward Norton</div>
                        <div class="w-full truncate text-xs opacity-60">Administrator</div>
                    </div>
                    <i data-lucide="move-right"
                        class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25 me-4 ms-auto opacity-50"></i>
                </div>
            </div>
            <div class="hidden group-hover/profile:block">
                <div
                    class="box p-5 before:absolute before:inset-0 before:mx-3 before:-mb-3 before:border before:border-foreground/10 before:bg-background/30 before:z-[-1] after:absolute after:inset-0 after:border after:border-foreground/10 after:bg-background after:shadow-[0px_3px_5px_#0000000b] after:z-[-1] after:backdrop-blur-md text-foreground before:shadow-foreground/5 absolute bottom-0 left-[100%] z-50 ml-2 flex w-64 flex-col gap-2.5 px-6 py-5 before:rounded-2xl before:shadow-xl before:backdrop-blur after:rounded-2xl">
                    <div class="flex flex-col gap-0.5">
                        <div class="font-medium">Edward Norton</div>
                        <div class="mt-0.5 text-xs opacity-70">Software Engineer</div>
                    </div>
                    <div class="bg-foreground/5 h-px"></div>
                    <div class="flex flex-col gap-0.5">
                        <a class="hover:bg-foreground/5 -mx-3 flex gap-2.5 rounded-lg px-4 py-1.5" href="#">
                            <i data-lucide="users"
                                class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25"></i>
                            Profile
                        </a>
                        <a class="hover:bg-foreground/5 -mx-3 flex gap-2.5 rounded-lg px-4 py-1.5" href="#">
                            <i data-lucide="shield-alert"
                                class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25"></i>
                            Add Account
                        </a>
                        <a class="hover:bg-foreground/5 -mx-3 flex gap-2.5 rounded-lg px-4 py-1.5" href="#">
                            <i data-lucide="file-lock"
                                class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25"></i>
                            Reset Password
                        </a>
                        <a class="hover:bg-foreground/5 -mx-3 flex gap-2.5 rounded-lg px-4 py-1.5" href="#">
                            <i data-lucide="file-question"
                                class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25"></i>
                            Help
                        </a>
                    </div>
                    <div class="bg-foreground/5 h-px"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div class="flex flex-col gap-0.5">
                            <button type="submit"
                                class="hover:bg-foreground/5 -mx-3 flex gap-2.5 rounded-lg px-4 py-1.5">
                                <i data-lucide="power"
                                    class="size-4 stroke-[1.5] [--color:currentColor] stroke-(--color) fill-(--color)/25"></i>
                                Logout
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
