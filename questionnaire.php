<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/applogo1.css">
<script type="text/javascript" src="jquery/jscolor.js"></script>
<script src="jquery/jquery-1.11.3.min.js"></script>
<script>
$(document).ready(function(){
	$(".bb_ques").click(function(){
		$(".browewin").click();	
	});
    
});
</script>

<script>
$(document).ready(function(){
	$("#tab1").click(function(){
		$(".hide_toggle").click();	
	});
    
});
</script>
  <script>
  $(function() {
    // run the currently selected effect
    function runEffect() {
      // get effect type from
      var selectedEffect = $( "#effectTypes" ).val();
 
      // most effect types need no options passed by default
      var options = {};
      // some effects have required parameters
      if ( selectedEffect === "scale" ) {
        options = { percent: 0 };
      } else if ( selectedEffect === "size" ) {
        options = { to: { width: 200, height: 60 } };
      }
 
      // run the effect
      $( ".hide_toggle" ).toggle( selectedEffect, options, 500 );
    };
 
    // set effect from select menu value
    $( "#tab1" ).click(function() {
      runEffect();
    });
  });
  </script>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Custom Drop-Down List Styling</title>
<meta name="description" content="Custom Drop-Down List Styling with CSS3" />
<meta name="author" content="Codrops" />
<link rel="shortcut icon" href="../favicon.ico">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css' />
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
<noscript>
<link rel="stylesheet" type="text/css" href="css/noJS.css" />
</noscript>
</head><body>
<header>
  <div class="wrapper">
    <div class="logo"> <img src="images/logo.jpg" alt="logo"> </div>
  </div>
</header>
<div class="sec_create">
  <h2 class="sec_head_ques"> Create a Questinnaire</h2>
</div>
<section>
  <div class="wrapper">
  <div class="container ww">
    <h2 class="wel_head"> Would you like a Welcome page</h2>
    <div class="onoffswitch">
      <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="tab1" checked>
      <label class="onoffswitch-label" for="tab1"> <span class="onoffswitch-inner"></span> <span class="onoffswitch-switch"></span> </label>
    </div>
    <div class="show_toggle">
    <div class="hide_toggle">
      <div class="header_browse">
        <div class="browse">
          <div class="photo_head">
            <h3> Header Photo </h3>
          </div>
          <div class="button_browse">
            <button class="bb_ques" type="button">Browse</button>
            <input type="file" class="browewin" style="display:none;"/>
          </div>
        </div>
        <div class="outer_title1">
          <div class="inner_title1 fleft">
            <label>Title</label>
            <br>
            <input type="text" class="title_text title_text1">
          </div>
          <div class="inner_title1 fleft ">
            <label>Title Size</label>
            <br>
            <div class="wrapper-demo">
              <div id="dd" class="wrapper-dropdown-3" tabindex="1"> <span>Dropdown </span>
                <ul class="dropdown">
                  <li><a href="#">Element 1</a></li>
                  <li><a href="#">Element 2</a></li>
                  <li><a href="#">Element 3</a></li>
                </ul>
              </div>
              ​</div>
          </div>
          <div class="inner_title1 fleft">
            <label>Title Font</label>
            <br>
            <div class="wrapper-demo">
              <div id="dd" class="wrapper-dropdown-3" tabindex="1"> <span>Dropdown </span>
                <ul class="dropdown">
                  <li><a href="#">Element 1</a></li>
                  <li><a href="#">Element 2</a></li>
                  <li><a href="#">Element 3</a></li>
                </ul>
              </div>
              ​</div>
          </div>
          <div class="inner_title1 fleft">
            <label>Title Color</label>
            <br>
            <input type="color" value="#efefef">
          </div>
          
        </div>
        
        <div class="clear"> </div>
      </div>
      </div>
    </div>
    <div class="lastouter_sec">
        <button class="butt_view bb_sec6"> Save&Next </button>
        <button class="butt_view bb_sec6"> Save&Exit </button>
        <button class="butt_view bb_sec6 bb_bg"> Cancel </button>
      </div>
   <!--hide toggle closed--> 
    </div>
    <!-- container closed--> 
  </div>
  <!--wrapper closed--> 
</section>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> 
<script type="text/javascript">
			
			function DropDown(el) {
				this.dd = el;
				this.placeholder = this.dd.children('span');
				this.opts = this.dd.find('ul.dropdown > li');
				this.val = '';
				this.index = -1;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						return false;
					});

					obj.opts.on('click',function(){
						var opt = $(this);
						obj.val = opt.text();
						obj.index = opt.index();
						obj.placeholder.text(obj.val);
					});
				},
				getValue : function() {
					return this.val;
				},
				getIndex : function() {
					return this.index;
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-3').removeClass('active');
				});

			});

		</script>
</body>
</html>