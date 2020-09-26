@extends('layouts.public')

@section('contecn')


<div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>                                       
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/banner-slide-1.jpg');"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading"><span>ParDDO </span>Comunicaciones</h1>
                    <p class="banner_txt">En ParDDo comunicaciones ofrezemos una gran variedad de accesorios para toda clase de celulares, repuestos, servicio técnico, recargas y pago de servicios. </p>
                    <div class="slider_btn">
                        <a href="https://www.google.com/maps/place/4.139031,+-73.624109/@4.1390579,-73.6241507,20z?hl=es"><button type="button" class="btn btn-default slide"><i class="fa fa-map-marker" aria-hidden="true"></i> Google Maps </button></a>
                        <a href="https://wa.me/573003865594"><button type="button" class="btn btn-primary slide"><i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsAPP <i class="fa fa-caret-right"></i></button></a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="fill" style="background-image:url('img/banner-slide-2.jpg');"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">Servicio técnico para <span>Celulares </span></h1>
                    <p class="banner_txt">En ParDDo comunicaciones ofrezemos servicio técnico para toda clase de celulares, gran variedad de repuestos y con precios espectaculares</p>
                    <div class="slider_btn">
                        <a href="https://www.google.com/maps/place/4.139031,+-73.624109/@4.1390579,-73.6241507,20z?hl=es"><button type="button" class="btn btn-default slide"><i class="fa fa-map-marker" aria-hidden="true"></i> Google Maps </button></a>
                        <a href="https://wa.me/573003865594"><button type="button" class="btn btn-primary slide"><i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsAPP <i class="fa fa-caret-right"></i></button></a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="fill" style="background-image:url('img/banner-slide-3.jpg');"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">Accesorios para  <span>Celularess </span></h1>
                    <p class="banner_txt">Lorem ipsum dolor sit amet sit legimus copiosae instructior eiut vix denique fierentis ea saperet inimicu utqui dolor oratio mnesarchum.</p>
                    <div class="slider_btn">
                        <a href="https://www.google.com/maps/place/4.139031,+-73.624109/@4.1390579,-73.6241507,20z?hl=es"><button type="button" class="btn btn-default slide"><i class="fa fa-map-marker" aria-hidden="true"></i> Google Maps </button></a>
                        <a href="https://wa.me/573003865594"><button type="button" class="btn btn-primary slide"><i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsAPP <i class="fa fa-caret-right"></i></button></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>

    </div>

    <section id="features-page">
        <div class="subsection1">
            <div class="container">
                <div class="section-heading text-center">
                    <h1><span>Nuestros Servicios</span></h1>
                    <p class="subheading">Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut.</p>
                </div>
                <div class="col sm_12">
                    <div class="col-sm-4 wpb_column block">
                        <div class="wpb_wrapper">
                            <div class="flip">
                                <div class="iconbox iconbox-style icon-color card clearfix">
                                    <div class="face front">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <i class="fab fa-bluetooth boxicon"></i>
                                                        <h3>Accsesorios</h3>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="iconbox-box2 face back">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h3>Accesorios</h3>
                                                        <p>En ParDDo comunicaciones ofrecemos una gran variedad de accesorios para toda clase de celulares.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 wpb_column block">
                        <div class="wpb_wrapper">
                            <div class="flip">
                                <div class="iconbox  iconbox-style icon-color card clearfix">
                                    <div class="iconbox-box1 face front">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <i class="fas fa-battery-quarter boxicon"></i>
                                                        <h3>Repuestos</h3>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="iconbox-box2 face back">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h3>Repuestos</h3>
                                                        <p>Ofrecemos repuestos para smartphones de marcas como: IPhone, Samsung, Huawei, Xiaomi, Motorola, Nokia, Lenovo, Asus y muchas más. </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 wpb_colum block">
                        <div class="wpb_wrapper">
                            <div class="flip">
                                <div class="iconbox  iconbox-style icon-color card clearfix">
                                    <div class="iconbox-box1 face front">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <i class="fas fa-tools boxicon"></i>
                                                        <h3>Servicio técnico</h3>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="iconbox-box2 face back">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h3>Customer Support</h3>
                                                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="about">
        <div class="image-holder col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left">
            <div class="background-imgholder">
                <img src="img/1.jpg" alt="about" class="img-responsive" style="display:none;" />
            </div>
        </div>

        <div class="container-fluid">

            <div class="col-md-7 col-md-offset-5 col-sm-8 col-sm-offset-2 col-xs-12 text-inner ">
                <div class="text-block">
                    <div class="section-heading">
                        <h1>ParDDo <span>Comunicaciones</span></h1>
                        <p class="subheading">Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut.</p>
                    </div>

                    <ul class="aboutul">
                        <li> <i class="fa fa-check"></i>Vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum.</li>
                        <li> <i class="fa fa-check"></i>legimus copiosae instructior ei ut vix denique fierentis atqui mucius consequat ad pro.</li>
                        <li> <i class="fa fa-check"></i>Ea saperet inimicu ut qui dolor oratio maiestatis ubique mnesarchum.</li>
                        <li> <i class="fa fa-check"></i>Sanctus voluptatibus et per illum noluisse facilisis quo atqui mucius ad pro.</li>
                        <li> <i class="fa fa-check"></i>At illum noluisse facilisis quo te dictas epicurei suavitate qui his ad.</li>
                        <li> <i class="fa fa-check"></i>Tantas propriae mediocritatem id vix qui everti efficiantur an ocurreret consetetur.</li>
                    </ul>

                    <button type="button" class="btn btn-primary slide">Learn More  <i class="fa fa-caret-right"></i> </button>


                </div>
            </div>
        </div>
    </section>


    <section id="process">
        <div class="container">
            <div class="section-heading text-center">
                <div class="col-md-12 col-xs-12">
                    <h1>What <span>We Do</span></h1>
                    <p class="subheading">Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum ea utamur impetus fuisset nam nostrud euismod volumus ne mei.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6 block process-block">
                    <div class="process-icon-holder">
                        <div class="process-border">
                            <span class="process-icon"><a href="#"><i class="fa fa-lightbulb-o feature_icon"></i></a></span></div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="process-text-block">
                        <h4><a href="#">Idea</a></h4>
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 block process-block">
                    <div class="process-icon-holder">
                        <div class="process-border">
                            <span class="process-icon"><a href="#"><i class="fa fa-cloud-download feature_icon"></i></a></span></div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="process-text-block">
                        <h4><a href="#">Concept</a></h4>
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 block process-block">
                    <div class="process-icon-holder">
                        <div class="process-border">
                            <span class="process-icon"><a href="#"><i class="fa fa-magic feature_icon"></i></a></span></div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="process-text-block">
                        <h4><a href="#">Design</a></h4>
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 block process-block lastchild">
                    <div class="process-icon-holder">
                        <div class="process-border">
                            <span class="process-icon"><a href="#"><i class="fa fa-cog feature_icon"></i></a></span></div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="process-text-block">
                        <h4><a href="#">Develop</a></h4>
                        <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum</p>
                    </div>
                </div>
            </div>

        </div>
    </section>



@endsection



