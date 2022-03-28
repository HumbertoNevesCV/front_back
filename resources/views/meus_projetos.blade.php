@include('layouts.authenticated.header')

<body>
    <main>
        <div class="container"> 
            @include('layouts.authenticated.menu')           
            <div class="row filho-criarCard">
            </div><!--Fecha Container Filho-->
        </div><!--Fecha Container Pai-->
        @include('layouts.authenticated.footer')
    </main>
    <!--End of Body-->
</body>

</html>