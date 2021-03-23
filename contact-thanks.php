<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<!--[if lt IE 7]>
     <script type="text/javascript" src="js/ie_png.js"></script>
     <script type="text/javascript">
     ie_png.fix('.png, #main-tail-top, #main-tail-bot, nav ul li a, #search-form label, #faded strong, #faded a.next, #faded a.prev, #faded div, #faded div span a, .box, .privacy');
     </script>
     <link href="css/ie/ie6.css" rel="stylesheet" type="text/css" />
   <![endif]-->
<!--[if IE]>
      <script type="text/javascript" src="js/html5.js"></script>
   <![endif]-->
	<!-- Add jQuery library -->
	<script type="text/javascript" src="lib/jquery-1.7.1.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="source/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=2.0.3" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=2.0.3"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=2.0.3" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=2.0.3"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
				Simple image gallery. Use default settings
			*/

			$('.fancybox').fancybox();

			/*
				Different effects
			*/

			// Change title type, overlay opening speed and opacity
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedIn : 500,
						opacity : 0.95
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background-color' : '#000'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
				Button helper. Disable animations, hide close button, change title type and content
			*/

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
				Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			*/

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

		});

	$(document).ready(function() {
		$(".various").fancybox({
			maxWidth	: 961,
			maxHeight	: 600,
			fitToView	: false,
			width		: '100%',
			height		: '100%',
			autoSize	: true,
			closeClick	: false,
			openEffect	: 'none',
			closeEffect	: 'none'

		});
});

</script>
	<style type="text/css">
		.fancybox-custom .fancybox-outer {
			box-shadow: 0 0 50px #222;
		}
	</style>
</head>
<body id="page6">
<div>
  <div id="main-tail-bot">
      <div id="main">
        <!-- header -->
        <header>
          <div class="logo"><a href="index.html"><div class="logo1">Heroes Del Escambray</div><div class="logo3">Lucha campesina contra el comunismo (1960-1966)</div></a></div>
          <nav>
            <ul>
              <li><a href="index.html">Inicio</a></li>
              <li><a href="index-1.html">Lucha</a></li>
              <li><a href="index-2.html">Proclama</a></li>
              <li><a href="index-4.html">Multimedia</a></li>
              <li><a href="index-5.html">Libros</a></li>
              <li><a href="index-3.html">M&#225;rtires</a></li>
              <li class="p_cautivos-btn"><a href="index-6.html">Pueblos Cautivos</a></a></li>
            </ul>
          </nav>
        </header>
        <!-- content -->
        <section id="content">
          <div class="box-1">
            <div class="row-1">
              <div class="inner-1">
                <article class="wrapper">
                  <div class="col-1">
                    <h2><strong>Gracias<span>por contactarnos</span></strong></h2>
                          <div class="contact-thanks">
                                <p>Name, Tus sugerencias y comentarios, son muy importantes para nosotros.</p>

                          </div>
                  </div>
                  <div class="col-2">
                    <div class="wrapper">
                      <div class="block-1">
                        <img src="images/ContactImage.png" alt="" />
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </section>
        <aside>
        </aside>
        <!-- footer -->
        <footer>
          <div class="inner">
            <div class="wrapper"> <strong>
              <!-- {%FOOTER_LINK} -->
              </strong>
              <p>alexcreative &copy; 2012</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
</body>
</html>