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
</head>
<body>
<header>
<div class="wrapper">
<div class="logo">
<img src="images/logo.jpg" alt="logo">
</div>
</div>
</header>
<div class="sec_create">
<h2 class="sec_head_ques"> Create a Questinnaire</h2>
</div>
<section>
<div class="wrapper">
<div class="container ww">
<h2 class="sec_head_ques1">Questinnaire Header</h2>
<div class="sec_ques_div">
<label class="sec_head_ques1 fleft">Header image/video </label>
<label class="sec_head_ques1 fright">(crop to fit 0*0 area)</label>
</div>
<div class="sec_ques_div">
<input type="text" class="fleft" >
<button class="bb_ques fleft">Browse..</button>
<input type="file" class="browewin" style="display:none;"/>
</div>
<div class="outer_title1">
<div class="inner_title1 fleft">
<label>Title</label><br>
<input type="text" class="title_text">
</div>
<div class="inner_title1 fleft ">
<label>Title Size</label><br>
<input type="number" class="title_size">
</div>
<div class="inner_title1 fleft">
<label>Title Font</label><br>
<input type="number" class="title_size title_size_font">
</div>
<div class="inner_title1 fleft">
<label>Title Color</label><br>
<input type="color" value="#efefef">
</div>
</div>
<div class="clear">
</div>
<div class="outer_title1">
<div class="inner_title1 fleft">
<label>Text</label><br>
<textarea rows="5" cols="25"></textarea>
</div>
<div class="inner_title1 fleft ">
<label>Title Size</label><br>
<input type="number" class="title_size">
</div>
<div class="inner_title1 fleft">
<label>Title Font</label><br>
<input type="number" class="title_size title_size_font">
</div>
<div class="inner_title1 fleft">
<label>Title Color</label><br>
<input type="color" value="#efefef">
</div>
</div>
<div class="clear">
</div>
<div class="blank_div">
</div>
</div><!--container closed-->
</div><!--wrapper closed-->
</section>
<section>
<div class="wrapper">
<div class="container ww">
<h2 class="sec_head_ques1">Questinnaire Appearance</h2>
<div class="outer_title1">
<div class="inner_title2 inner_title_ttl hh fleft">
<label class="sec_head_ques1 "> Background-image </label>
<div class="sec_ques_div">
<input type="text" class="fleft" >
<button class="bb_ques fleft">Browse..</button>
</div>
</div>
<div class="inner_title2 inner_title_ttl hh fleft ">
<label>Background-image overlay</label><br>
<input type="color" value="#efefef">
</div>
<div class="inner_title2 inner_title_ttl hh fleft">
<label>Opacity</label><br>
<input type="range" class="range">
</div>
</div><!--outer_title1 closed-->
<div class="inner_title2 inner_title_ttl  fleft">
<label>Background-image</label><br>
<input type="color" value="#efefef">
</div>
<div class="clear">
</div>
</div><!--container closed-->
</div><!--wrapper closed-->
</section>
<section>
<div class="wrapper">
<div class="container ww">
<h3>Question-Text</h3>
<div class="outer_sec3">
<div class="inner_title1 inner_title_ttl hh fleft ">
<label>Size</label><br>
<input type="number" class="title_size">
</div>
<div class="inner_title1 inner_title_ttl hh fleft">
<label>Title Font</label><br>
<input type="number" class="title_size_font">
</div>
<div class="inner_title1 inner_title_ttl fleft">
<label>Title Color</label><br>
<input type="color" value="#efefef">
</div>
</div>
<div class="clear">
</div>
</div><!--container closed-->
</div><!--wrapper closed-->
</section>
<section>
<div class="wrapper">
<div class="container ww">
<div class="outer_sec4">
<h3>Answer-Text</h3>
<div class="inn_sec4 fleft inner_title_ttl">
<label>Box Backgroundcolor</label><br>
<input type="color" value="#efefef">
</div>
<div class="inn_sec4 fleft inner_title_ttl">
<label>Size</label><br>
<input type="number" class="title_size">
</div>
<div class="inn_sec4 fleft inner_title_ttl">
<label>Font</label><br>
<input type="number" class="title_size_font">
</div>
<div class="inn_sec4 fleft inner_title_ttl">
<label>Color</label><br>
<input type="color" value="#efefef">
</div>
</div>
<div class="clear">
</div><!--container closed-->
</div><!--wrapper closed-->
</section>
<section>
<div class="wrapper">
<div class="container ww">
<div class="outer_sec5">
<h3>Elements</h3>
<div class="inn_sec4 fleft inner_title_ttl">
<label>Button Color</label><br>
<input type="color" value="#efefef">
</div>
<div class="inn_sec4 hh fleft inner_title_ttl">
<label>Button Size</label><br>
<input type="number" class="title_size">
</div>
<div class="inn_sec4 fleft inner_title_ttl">
<label>Button TextColor</label><br>
<input type="color" value="#efefef">
</div>
</div>
<div class="clear">
</div>
</div><!--container closed-->
</div><!--wrapper closed-->
</section>
<section>
<div class="wrapper">
<div class="container ww">
<div class="outer_sec6">
<div class="inn_sec6 fleft inner_title_ttl">
<label>Button TextColor</label><br>
<input type="color" value="#efefef">
</div>
<div class="inn_sec6 fleft inner_title_ttl">
<label>Button TextColor</label><br>
<input type="color" value="#efefef">
</div>
</div>
<div class="clear">
</div>
<div class="blank_div">
</div>
</div><!--container closed-->
</div><!--wrapper closed-->
</section>
<section>
<div class="wrapper">
<div class="container ww">
<h2 class="sec_head_ques1">Questinnaire Header</h2>
<div class="sec_ques_div">
<label class="sec_head_ques1 fleft">Header image/video </label>
<label class="sec_head_ques1 fright">(crop to fit 0*0 area)</label>
</div>
<div class="sec_ques_div">
<input type="text" class="fleft" >
<button class="bb_ques fleft">Browse..</button>
</div>
<div class="outer_title1">
<div class="inner_title1 fleft">
<label>Text</label><br>
<textarea rows="5" cols="25"></textarea>
</div>
<div class="inner_title1 fleft ">
<label>Title Size</label><br>
<input type="number" class="title_size">
</div>
<div class="inner_title1 fleft">
<label>Title Font</label><br>
<input type="number" class="title_size title_size_font">
</div>
<div class="inner_title1 fleft">
<label>Title Color</label><br>
<input type="color" value="#efefef">
</div>
</div>
<div class="clear">
</div>
</div><!--container closed-->
</div><!--wrapper closed-->
</section>
<section>
<div class="wrapper">
<div class="container ww">
<div class="lastouter_sec">
<button class="butt_view bb_sec6"> Save&Next </button>
<button class="butt_view bb_sec6"> Save&Exit </button>
<button class="butt_view bb_sec6 bb_bg"> Cancel </button>
</div>
</div><!--container closed-->
</div><!--wrapper closed-->
</body>
</html>