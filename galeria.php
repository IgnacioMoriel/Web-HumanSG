<div class="galeria">
    <h2 style="text-align: center; font-size: 50px; font-family: Arial, Helvetica, sans-serif;  margin:15px 0;  font-weight: 500; ">Galería</h2>
    <script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [{
                    $Duration: 800,
                    x: -0.3,
                    $During: {
                        $Left: [0.3, 0.7]
                    },
                    $Easing: {
                        $Left: $Jease$.$InCubic,
                        $Opacity: $Jease$.$Linear
                    },
                    $Opacity: 2
                },
                {
                    $Duration: 800,
                    x: 0.3,
                    $SlideOut: true,
                    $Easing: {
                        $Left: $Jease$.$InCubic,
                        $Opacity: $Jease$.$Linear
                    },
                    $Opacity: 2
                }
            ];

            var jssor_1_options = {
                $AutoPlay: 1,
                $SlideshowOptions: {
                    $Class: $JssorSlideshowRunner$,
                    $Transitions: jssor_1_SlideshowTransitions,
                    $TransitionsOrder: 1
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,
                    $Orientation: 2,
                    $NoDrag: true
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                } else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        /*jssor slider arrow skin 081 css*/
        .jssora081 {
            display: block;
            position: absolute;
            cursor: pointer;
        }

        .jssora081 .c {
            fill: #000;
            fill-opacity: .5;
            stroke: #fff;
            stroke-width: 120;
            stroke-miterlimit: 10;
            stroke-opacity: 0.5;
        }

        .jssora081 .a {
            fill: #fff;
            opacity: .8;
        }

        .jssora081:hover .c {
            fill-opacity: .3;
        }

        .jssora081:hover .a {
            opacity: 1;
        }

        .jssora081.jssora081dn {
            opacity: .5;
        }

        .jssora081.jssora081ds {
            opacity: .3;
            pointer-events: none;
        }
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div data-fillmode="5">
                <img data-u="image" src="images/casaMelissa.png" />
                <div u="thumb">$29.100,29 con losa | $23.231,04 sin losa</div>
            </div>
            <div data-fillmode="5">
                <img data-u="image" src="images/casaEstefania.png" />
                <div u="thumb">$41,193,60</div>
            </div>
            <div data-fillmode="5">
                <img data-u="image" src="images/casaCaterine.png" />
                <div u="thumb">$35.202,05 con losa | $26.686,46 sin losa</div>
            </div>
            <div data-fillmode="5">
                <img data-u="image" src="images/casablanca.png" />
                <div u="thumb">$35.202,05 con losa | $26.686,46 sin losa</div>
            </div>
            <div data-fillmode="5">
                <img data-u="image" src="images/casaArea.png" />
                <div u="thumb">$25.468,80 sin losa</div>
            </div>
            <div data-fillmode="5">
                <img data-u="image" src="images/vLeticia.png" />
                <div u="thumb">Villa Leticia modelo $16.719,36 sin losa</div>
            </div>
            <div data-fillmode="5">
                <img data-u="image" src="images/vLeticia2.png" />
                <div u="thumb">Villa Leticia Parte Interna $16.719,36 sin losa</div>
            </div>
            <div data-fillmode="5">
                <img data-u="image" src="images/villaSpondilus.jpg" />
                <div u="thumb">Villa Spondilus $28.222,66</div>
            </div>
            <div data-fillmode="5">
                <img data-u="image" src="images/terrenoCVE.jpg" />
                <div u="thumb">Terreno CVE</div>
            </div>
            <div data-fillmode="5">
                <img data-u="image" src="images/terrenoCVE2.jpg" />
                <div u="thumb">Terrenos con Alumbrado y bordillo CVE</div>
            </div>
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">html slider</a>
        <!-- Thumbnail Navigator -->
        <div u="thumbnavigator" style="position:absolute;bottom:0px;left:0px;width:980px;height:50px;color:#FFF;overflow:hidden;cursor:default;background-color:rgba(0,0,0,.5);">
            <div u="slides">
                <div u="prototype" style="position:absolute;top:0;left:0;width:980px;height:50px;">
                    <div u="thumbnailtemplate" style="position:absolute;top:0;left:0;width:100%;height:100%;font-family:arial,helvetica,verdana;font-weight:normal;line-height:50px;font-size:16px;padding-left:10px;box-sizing:border-box;"></div>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora081" style="width:30px;height:40px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="2000 0 12000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="c" d="M4800,14080h6400c528,0,960-432,960-960V2880c0-528-432-960-960-960H4800c-528,0-960,432-960,960 v10240C3840,13648,4272,14080,4800,14080z"></path>
                <path class="a" d="M6860.8,8102.7l1693.9,1693.9c28.9,28.9,63.2,43.4,102.7,43.4s73.8-14.5,102.7-43.4l379-379 c28.9-28.9,43.4-63.2,43.4-102.7c0-39.6-14.5-73.8-43.4-102.7L7926.9,8000l1212.2-1212.2c28.9-28.9,43.4-63.2,43.4-102.7 c0-39.6-14.5-73.8-43.4-102.7l-379-379c-28.9-28.9-63.2-43.4-102.7-43.4s-73.8,14.5-102.7,43.4L6860.8,7897.3 c-28.9,28.9-43.4,63.2-43.4,102.7S6831.9,8073.8,6860.8,8102.7L6860.8,8102.7z"></path>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora081" style="width:30px;height:40px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="2000 0 12000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="c" d="M11200,14080H4800c-528,0-960-432-960-960V2880c0-528,432-960,960-960h6400 c528,0,960,432,960,960v10240C12160,13648,11728,14080,11200,14080z"></path>
                <path class="a" d="M9139.2,8102.7L7445.3,9796.6c-28.9,28.9-63.2,43.4-102.7,43.4c-39.6,0-73.8-14.5-102.7-43.4 l-379-379c-28.9-28.9-43.4-63.2-43.4-102.7c0-39.6,14.5-73.8,43.4-102.7L8073.1,8000L6860.8,6787.8 c-28.9-28.9-43.4-63.2-43.4-102.7c0-39.6,14.5-73.8,43.4-102.7l379-379c28.9-28.9,63.2-43.4,102.7-43.4 c39.6,0,73.8,14.5,102.7,43.4l1693.9,1693.9c28.9,28.9,43.4,63.2,43.4,102.7S9168.1,8073.8,9139.2,8102.7L9139.2,8102.7z"></path>
            </svg>
        </div>
    </div>
    <script type="text/javascript">
        jssor_1_slider_init();
    </script>
    <!-- #endregion Jssor Slider End -->
</div>