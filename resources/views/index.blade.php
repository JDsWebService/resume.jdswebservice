<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.head')
    </head>
    <body id="page-top">
        {{-- Navigation Bar (Left) --}}
        @include('partials.navbar')

        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            @include('sections.about')
            <hr class="m-0" />

            <!-- Experience-->
            @include('sections.experience')
            <hr class="m-0" />

            <!-- Education-->
            @include('sections.education')
            <hr class="m-0" />

            <!-- Skills-->
            @include('sections.skills')
            <hr class="m-0" />

            <!-- Interests-->
            @include('sections.interests')
            <hr class="m-0" />

            <!-- Awards-->
            @include('sections.awards')
        </div>
        
        {{-- Scripts --}}
        @include('partials.scripts')
    </body>
</html>
