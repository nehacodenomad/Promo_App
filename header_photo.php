 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/applogo.css">



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
		<noscript><link rel="stylesheet" type="text/css" href="css/noJS.css" /></noscript> 

</head>
<body>
<header>
<div class="wrapper">
<div class="logo">
<img src="images/logo.jpg" alt="logo">
</div>
</div>
<div class="sec"> 
  <h1> Create New Questionnaire </h1>
</div>
</header>
<div class="wrapper">
   <div class="center">
<div class="content">
      <div class="heading">
  <h2> Would you like a Welcome Page?  </h2>
  <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>
</div>

<div class="header_browse">
  <div class="browse">
       <div class="photo_head">
      <h3> Header Photo </h3>
	  </div>
	  <div class="button_browse">
<button type="button" class="btn_br">Browse</button>
</div>
  </div>
  
  <div class="title">
    <div class="sm_title">
	  <label>Title</label>
	  <div class="title_input">
		<input type="text" class="sm_input">
	      </div>
	</div>
	
	<div class="sm_title">
	  <label>Title Size</label>
	  
	  <section class="main">
				<div class="wrapper-demo">
					<div id="dd" class="wrapper-dropdown-3" tabindex="1">
						<span>Dropdown </span>
						<ul class="dropdown">
							<li><a href="#">Element 1</a></li>
							<li><a href="#">Element 2</a></li>
							<li><a href="#">Element 3</a></li>
						</ul>
					</div>
				​</div>
			</section>
		
	     
	</div>
	
	<div class="sm_title">
	  <label>Title</label>
	  <div class="title_drop">
		
	      </div>
	</div>
	
	<div class="sm_title">
	  <label>Title</label>
	  <div class="title_input">
		
	      </div>
	</div>
  </div>
</div>

<div class="button">
<button type="button" class="btn">Save & Next</button>
<button type="button" class="btn">Save & Exit</button>
<button type="button" class="btn_cancel">Cancel</button>
</div>

</div>
</div>
</div>


<!-- jQuery if needed -->
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