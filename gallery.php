<?php include 'php/header.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">
    <script src="js/jssor.slider-25.2.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
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
                $Cols: 5,
                $Align: 400
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/
            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;
                if (containerWidth) {
                    var MAX_WIDTH = 980;

                    var expectedWidth = containerWidth;

                    if (MAX_WIDTH) {
                        expectedWidth = Math.min(MAX_WIDTH, expectedWidth);
                    }

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
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
        .jssora106 {display:block;position:absolute;cursor:pointer;}
        .jssora106 .c {fill:#fff;opacity:.3;}
        .jssora106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
        .jssora106:hover .c {opacity:.5;}
        .jssora106:hover .a {opacity:.8;}
        .jssora106.jssora106dn .c {opacity:.2;}
        .jssora106.jssora106dn .a {opacity:1;}
        .jssora106.jssora106ds {opacity:.3;pointer-events:none;}

        .jssort051 .p {position:absolute;top:0;left:0;background-color:#000;}
        .jssort051 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.45;}
        .jssort051 .p:hover .t{opacity:.8;}
        .jssort051 .pav .t, .jssort051 .pdn .t, .jssort051 .p:hover.pdn .t{opacity:1;}
    </style>
    <div id="content" class="col-md-9">
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:520px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('img/loading.gif') no-repeat 50% 50%;background-color:rgba(0, 0, 0, 0.7);"></div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:520px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/slide/001.jpg" />
                <img data-u="thumb" src="img/slide/001.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/slide/002.jpg" />
                <img data-u="thumb" src="img/slide/002.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/slide/003.jpg" />
                <img data-u="thumb" src="img/slide/003.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/slide/004.jpg" />
                <img data-u="thumb" src="img/slide/004.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/slide/005.jpg" />
                <img data-u="thumb" src="img/slide/005.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/slide/006.jpg" />
                <img data-u="thumb" src="img/slide/006.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/slide/007.jpg" />
                <img data-u="thumb" src="img/slide/007.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/slide/008.jpg" />
                <img data-u="thumb" src="img/slide/008.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/slide/009.jpg" />
                <img data-u="thumb" src="img/slide/009.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/slide/010.jpg" />
                <img data-u="thumb" src="img/slide/010.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/slide/011.jpg" />
                <img data-u="thumb" src="img/slide/011.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/slide/012.jpg" />
                <img data-u="thumb" src="img/slide/012.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/slide/013.jpg" />
                <img data-u="thumb" src="img/slide/013.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/slide/014.jpg" />
                <img data-u="thumb" src="img/slide/014.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/slide/015.jpg" />
                <img data-u="thumb" src="img/slide/015.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/slide/016.jpg" />
                <img data-u="thumb" src="img/slide/016.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/slide/017.jpg" />
                <img data-u="thumb" src="img/slide/017.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/slide/018.jpg" />
                <img data-u="thumb" src="img/slide/018.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/slide/019.jpg" />
                <img data-u="thumb" src="img/slide/019.jpg" />
            </div>
           <div>
                <img data-u="image" src="img/slide/020.jpg" />
                <img data-u="thumb" src="img/slide/020.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/slide/021.jpg" />
                <img data-u="thumb" src="img/slide/021.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/slide/022.jpg" />
                <img data-u="thumb" src="img/slide/022.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/slide/023.jpg" />
                <img data-u="thumb" src="img/slide/023.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/slide/024.jpg" />
                <img data-u="thumb" src="img/slide/024.jpg" />
            </div>
        </div>
        <!-- Thumbnail Navigator 
        <div data-u="thumbnavigator" class="jssort051" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:200px;height:100px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                </div>
            </div>
        </div>-->
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora106" style="width:40px;height:40px;top:202px;left:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora106" style="width:40px;height:40px;top:202px;right:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
    </div> <div class="help-block"> 
  &nbsp;&nbsp;Send us more images related to Department of Computer Science at <a href="mailto:notbabru@gmail">notbabru@gmail.com</a>
 </div></div>
    
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
</body>
</html>

<?php include 'php/footer.php'; ?>