@include('layouts.authenticated.header')

<body>
    <main>
        <div class="container pai-criarCard"> 
            @include('layouts.authenticated.menu')           
            <div class="row filho-criarCard">

                <div class="panel-body body-criarCard">
                    @include('layouts.authenticated.navs')

                    <div class="row">
                        <div class="tab-content col=9" id="nav-tabContent">                            
                            @include('tabs_content.models')
                            @include('tabs_content.backgrounds')
                            @include('tabs_content.logos')
                        </div>
                        <div class="col-3">

                        </div>
                    </div>
                </div>
            </div><!--Fecha Container Filho-->
        </div><!--Fecha Container Pai-->
        @include('layouts.authenticated.footer')
    </main>
    <!--End of Body-->
</body>

</html>