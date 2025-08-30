<!DOCTYPE html><!--
Template Name: Midone - Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: leftforcode@gmail.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"><!-- BEGIN: Head -->

<!-- Mirrored from midone-html.vercel.app/rubick-side-menu-seller-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Aug 2025 07:34:02 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
@include('admin.layout.head')
<!-- END: Head -->

<body>
    @include('admin.layout.switcher')
    <div class="rubick min-h-screen dark:bg-background before:bg-primary dark:before:bg-foreground/[.01] before:fixed before:inset-0 before:bg-noise after:bg-accent after:bg-contain after:fixed after:inset-0 after:blur-xl dark:after:opacity-20">
        @include('admin.layout.sidebar')
        <div
            class="content h-screen transition-[margin,width] duration-200 pt-8 pb-12 px-7 z-10 relative before:absolute before:inset-y-4 before:-ml-px before:right-4 before:opacity-[.07] before:left-4 xl:before:left-0 before:bg-foreground before:rounded-4xl after:absolute after:inset-y-4 after:-ml-px after:right-4 after:left-4 xl:after:left-0 after:bg-[color-mix(in_oklch,_var(--color-background),_var(--color-foreground)_2%)] after:rounded-4xl after:border after:border-foreground/[.15] dark:after:opacity-[.59] xl:ml-[275px] [&.content--compact]:xl:ml-[110px]">
            <div class="h-full overflow-x-hidden">
                <div
                    class="content__scroll-area relative z-20 -mr-7 h-full overflow-y-auto pl-4 pr-11 transition-[margin] duration-200 xl:pl-0">
                    @include('admin.layout.nav')
                    <div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN: Vendor JS Assets-->
    @include('admin.layout.script')
    <!-- END: Vendor JS Assets-->
</body>

</html>
