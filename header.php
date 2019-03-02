<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="リフォームを岐阜県可児市でするなら大和建設（ライフテラス）へ。可児で評判の人気リフォーム専門店。 口コミ多数。キッチン、お風呂、トイレ、洗面リフォーム、外壁塗装なんでも相談可能！お気軽に相談ください！TEL【050-75764203】水曜定休" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory'); ?>/css/sanitize.css" rel="stylesheet" type="text/css" /><!-- リセットcss -->
<link href="<?php bloginfo('template_directory'); ?>/css/common.css" rel="stylesheet" type="text/css" /><!-- サイト全共通css -->
<!--<link href="<?php bloginfo('template_directory'); ?>/css/<?php echo get_post($wp_query->post->ID)->post_name; ?>.css" rel="stylesheet" type="text/css" /><!-- 固定ページcss -->
<!--<link href="<?php bloginfo('template_directory'); ?>/css/<?php echo esc_html(get_post_type_object(get_post_type())->name); ?>.css" rel="stylesheet" type="text/css" /><!-- 各ページcss -->
<link href="<?php bloginfo('template_directory'); ?>/css/top.css" rel="stylesheet" type="text/css" /><!-- トップページcss -->

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/allpage.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/top_old.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/page.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/orbit.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/skin.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/common/css/jquery.lightbox-0.5.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/thickbox.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font_m.css" id="fontcs" />
<? if(is_post_type_archive('news-letter')): ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/news-letter.css" />
<?php endif; ?>
<link rel="shortcut icon" href="/wp-content/themes/reform/images/favicon.ico">
<link rel="icon" href="/wp-content/themes/reform/images/favicon.ico">
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/smoothScroll.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/rollover2.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/thickbox.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/heightLine.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/navi.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/top.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/jquery.orbit-1.2.3.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/jquery.wpcf7.confirm.js"></script>

<!-- スライダー -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/common/css/slick.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/common/css/slick-theme.css" />
<script type="text/javascript"src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/common/js/slick.min.js"></script>

<script>
jQuery(function($){
$('.slider').slick({
		infinite: true,
		dots: true,
		appendDots: $('#apDots'),
		slidesToShow: 1,
		autoplay:true
 });
});
</script>

<!-- /スライダー -->

<!-- グローバルナビ -->
<link href="https://fonts.googleapis.com/css?family=Exo+2:300,400" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<link href="<?php bloginfo('template_directory'); ?>/css/stellarnav.css" rel="stylesheet" type="text/css" />-->
<link href="<?php bloginfo('template_directory'); ?>/css/dropdown.css" rel="stylesheet" type="text/css" />
<!-- //グローバルナビ -->

<?php if(is_page(2423)||is_page(360)): ?>
<!-- ========================お問い合わせ -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/contact_n.css" />

<!-- 郵便番号 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
	<script type="text/javascript">
$(function(){
  $('#zip').keyup(function(event){
    AjaxZip3.zip2addr(this,'','ken','address');
  })
})
</script><!-- /郵便番号 -->
<script>
jQuery(document).ready(function(){
    jQuery("#formID").validationEngine();
});
</script>
<script type="text/javascript">
jQuery(document).ready(function(){
 jQuery("#name").addClass("validate[required]");
 jQuery("#huri").addClass("validate[required]");
 jQuery("#add").addClass("validate[required]");
 jQuery("#email").addClass("validate[required,custom[email]]");
 jQuery("#url").addClass("validate[required,custom[url]]");
 jQuery("#tel").addClass("validate[custom[phone]]");
 jQuery("#radio01 input").addClass("validate[required]");
 jQuery("#radio02 input").addClass("validate[required]");
 jQuery("#message").addClass("validate[required]");
 jQuery("#ken").addClass("validate[required]");
 jQuery("#subject").addClass("validate[required]");
});
</script>
<style type="text/css">
.wpcf7-not-valid-tip {
    display: none !important;
}
span.wpcf7-form-control-wrap {
        position: static !important;
}
.formError .formErrorContent {
    border: none !important;
    box-shadow: none !important;
}
.formError .formErrorArrow div {
    border-left: none !important;
    border-right: none !important;
    box-shadow: none !important;
}
#request_area table tr:hover {
background-color: #FEFBF3;
}
</style>
<!-- ========================/お問い合わせ -->
<?php endif; ?>

<!--▼　ク：11ライフテラス（大和建設）　アナリティクス-->

<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-34884363-1']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>

<!--▲　ク：11ライフテラス（大和建設）　アナリティクス-->

<?php wp_head(); ?>

<meta name="google-site-verification" content="ArskSHcOVd36wXcpSVaOogVaGYB2zE8u8SYXsZjRto4" />

</head>

<body <?php body_class();?>>

<a name="top" id="top"></a>


<!-- ヘッダー -->
<div id="head">
<div class="inner">
<h1 class="header_message"> 岐阜県可児市でリフォーム・外壁塗装なら大和建設（ライフテラス）へお任せ下さい！</h1>
<a href="<?php echo home_url(); ?>" class="no_fade"><img src="<?php bloginfo('template_directory'); ?>/common_image/header/rogo.gif" alt="岐阜県可児市のリフォーム会社ライフテラス" width="572" height="200" class="header_rogo" /></a>
<img src="<?php bloginfo('template_directory'); ?>/common_image/header/tel.gif" alt="岐阜県可児市のリフォーム会社ライフテラス" width="580" height="122" class="header_tel" />
<a href="<?php echo home_url(); ?>/contact"><img src="<?php bloginfo('template_directory'); ?>/common_image/header/btn_contact.gif" alt="お問い合わせ･無料お見積もり" width="354" height="98" class="header_contact" /></a>
<a href="<?php echo home_url(); ?>/saiyo"><img src="<?php bloginfo('template_directory'); ?>/common_image/header/btn_staff.gif" alt="スタッフ募集" width="288" height="98" class="header_staff" /></a>
</div>
</div>
<!-- //ヘッダー -->


<div id="groval_navi">
<ul id="dropmenu">
  <li><a href="<?php echo home_url(); ?>"><span class="line"></span>ＨＯМＥ</a></a></li>
  <li><a href=""><span class="line"></span>施工事例</a>
    <ul>
	<li><a href="<?php echo home_url(); ?>/seko_cat/kitchen/">キッチン</a></li>
        <li><a href="<?php echo home_url(); ?>/seko_cat/ohuro/">お風呂</a></li>
        <li><a href="<?php echo home_url(); ?>/seko_cat/toilet/">トイレ</a></li>
        <li><a href="<?php echo home_url(); ?>/seko_cat/senmen/">洗面</a></li>
        <li><a href="<?php echo home_url(); ?>/seko_cat/kyuto/">給湯器</a></li>
        <li><a href="<?php echo home_url(); ?>/seko_cat/naiso/">内装</a></li>
        <li><a href="<?php echo home_url(); ?>/seko_cat/gaiheki/">外壁</a></li>
        <li><a href="<?php echo home_url(); ?>/seko_cat/yane/">屋根</a></li>
        <li><a href="<?php echo home_url(); ?>/seko_cat/bousui/">防水工事</a></li>
        <li><a href="<?php echo home_url(); ?>/seko_cat/siroari/">シロアリ</a></li>
        <li><a href="<?php echo home_url(); ?>/seko_cat/exterior/"><p class="nigyo">外構・<br />エクステリア</p></a></li>
        <li><a href="<?php echo home_url(); ?>/seko_cat/sizen/">自然素材</a></li>
        <li><a href="<?php echo home_url(); ?>/seko_cat/ogata/"><p class="nigyo">増改築・<br />大型リフォーム</p></a></li>
        <li><a href="<?php echo home_url(); ?>/seko_cat/small/">小工事</a></li>
	</ul>
  </li>
<li><a href=""><span class="line"></span>屋根・外壁</a>

<ul>
	<li><a href="<?php echo home_url(); ?>/roof_reform">屋根&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
	<li><a href="<?php echo home_url(); ?>/roof_reform/nurikae_plan">外壁&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
</ul>

</li>
<li><a href="<?php echo home_url(); ?>/plan"><span class="line"></span>水まわり</a>

<ul>
	<li><a href="<?php echo home_url(); ?>/plan_cat/kitchen/">キッチン</a></li>
        <li><a href="<?php echo home_url(); ?>/plan_cat/ohuro/">お風呂</a></li>
        <li><a href="<?php echo home_url(); ?>/plan_cat/senmen/">洗面</a></li>
        <li><a href="<?php echo home_url(); ?>/plan_cat/toilet/">トイレ</a></li>
</ul>

</li>
<li><a href="<?php echo home_url(); ?>/exterior"><span class="line"></span>エクステリア</a></li>
<li><a href="<?php echo home_url(); ?>/genbanikki"><span class="line"></span>現場日記</a></li>
<li><a href="<?php echo home_url(); ?>/voice"><span class="line"></span>お客様の声</a></li>
<li><a href=""><span class="line"></span>会社案内<span class="line_right"></span></a>
	<ul>
        <li><a href="<?php echo home_url(); ?>/company">会社案内</a></li>
        <li><a href="<?php echo home_url(); ?>/staff"><p class="nigyo">スタッフ・<br />職人さん紹介</p></a></li>
        <li><a href="<?php echo home_url(); ?>/event/">イベント情報</a></li>
	</ul>
</li>
</ul>
</div>
