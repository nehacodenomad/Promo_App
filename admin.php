<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/applogo1.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
</head>
<body>
<header>
<div class="wrapper">
<div class="logo head">
<img src="images/logo.jpg" alt="logo">
</div>
<div class="ryt_admin">
<div class="inner_admin">

<div class="inner_inn_arr">


<form>
 <ul id="selectUl" class="test">
    <li class="form_li"><a href="">admin <img src="images/arrow.jpg" alt="arrow" id="show"></a></li>
    <li class="form_li"><a href="">Change Password</a></li>
    <li class="form_li"><a href="">Logout</a></li>
</ul>
</form>
</div>
</div>
</div>
<div class="clear">
</div>
<div class="outer_div">
<div class="inn_div_img">
<div class="inn_div1 marg1">
<img src="images/img1.jpg" alt="img">
<p> Create New</p>
<p> Questionnaris</p>
<button class="butt_view"> Start New </button>
</div>
<div class="inn_div1 marg1">
<img src="images/img2.jpg" alt="img">
<p> Save </p>
<p>Questionnaris</p>
<button class="butt_view"> View </button>
</div>
<div class="inn_div1 marg1">
<img src="images/img2.jpg" alt="img">
<p> Ended </p>
<p>Questionnaris</p>
<button class="butt_view"> View </button>
</div>
<div class="clear">
</div>
</div>
</div>
</div>
</header>
<script>

$('#selectUl li:not(":first")').addClass('unselected');
$('#selectUl').hover(
    function(){
        $(this).find('.form_li').click(
            function(){
                $('.unselected').removeClass('unselected');
                $(this).siblings('.form_li').addClass('unselected');
                var index = $(this).index();
                $('select option:selected').removeAttr('selected');
                $('select[name=size]')
                    .find('option:eq(' + index + ')')
                    .attr('selected',true);
                <!--alert($('select[name]').val());-->
            });
    },
    function(){
    });
	</script>
</body>
</html>