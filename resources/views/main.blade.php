<!DOCTYPE html>
<html lang="zh-TW">
    @include('partials._head')

    <body> 

    @include('partials._nav ')

        <div class="container">
            @include('partials._messages')
            @yield('content')

            @include('partials._footer')

        </div>

    @include('partials._js')
    @yield('scripts')
    
    </body>
</html>