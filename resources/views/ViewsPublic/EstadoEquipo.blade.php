@extends('layouts.public')

@section('contecn')

<section id="process">
        <div class="container">
            <div class="section-heading text-center">
                <div class="col-md-12 col-xs-12">
                    <h1>Estado de mi <span>equipo</span></h1>
                    <p class="subheading">Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum ea utamur impetus fuisset nam nostrud euismod volumus ne mei.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6 block process-block ">
                    <div class="process-icon-holder">
                        <div class="process-border ">
                            <span class="process-icon "><a href="#"><i class="fas fa-clipboard-check feature_icon "></i></a></span></div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="process-text-block">
                        <h4><a href="#">Equipo recibido</a></h4>
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 block process-block "> 
                    <div class="process-icon-holder border-activo">
                        <div class="process-border">
                            <span class="process-icon fondo-activo"><a href="#"><i class="fas fa-tools feature_icon"></i></a></span></div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="process-text-block">
                        <h4><a href="#">En reparación</a></h4>
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 block process-block">
                    <div class="process-icon-holder">
                        <div class="process-border">
                            <span class="process-icon"><a href="#"><i class="far fa-calendar-check feature_icon"></i></a></span></div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="process-text-block">
                        <h4><a href="#">Listo para entrgar</a></h4>
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 block process-block lastchild">
                    <div class="process-icon-holder">
                        <div class="process-border">
                            <span class="process-icon"><a href="#"><i class="fas fa-mobile feature_icon"></i></a></span></div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="process-text-block">
                        <h4><a href="#">Equipo entrgado</a></h4>
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    @endsection