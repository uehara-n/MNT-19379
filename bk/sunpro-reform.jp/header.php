<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MSL93PL');</script>
<!-- End Google Tag Manager -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiuhEyDNhfguJnZ8Vh0fOOPUfMGGCAqxY"></script>
<!-- ==========================CSS関連-->
<link rel="stylesheet" type="text/css" href="<?php sunpro_url(); ?>/wp-content/themes/reform/css/allpage.css" />
<link rel="stylesheet" type="text/css" href="<?php sunpro_url(); ?>/wp-content/themes/reform/common/css/lightbox.min.css" />
<link rel="stylesheet" type="text/css" href="<?php sunpro_url(); ?>/wp-content/themes/reform/css/thickbox.css"/>
<link rel="stylesheet" type="text/css" href="<?php sunpro_url(); ?>/wp-content/themes/reform/common/css/slick.css" />
<link rel="stylesheet" type="text/css" href="<?php sunpro_url(); ?>/wp-content/themes/reform/common/css/slick-theme.css" />
<?php if(is_page(array('20664','20711','21452') ) ): ?>
<link rel="stylesheet" type="text/css" href="<?php sunpro_url(); ?>/wp-content/themes/reform/css/lp.css" />
<?php endif; ?>

<?php if(is_page(array('21304') ) ): ?>
<link rel="stylesheet" type="text/css" href="<?php sunpro_url(); ?>/wp-content/themes/reform/css/lp_02.css" />
<?php endif; ?>


<?php if ( is_home() || is_front_page() ) : ?>
<link href="<?php sunpro_url(); ?>/wp-content/themes/reform/css/top.css" rel="stylesheet">
<?php else:?>
<link href="<?php sunpro_url(); ?>/wp-content/themes/reform/css/page.css" rel="stylesheet">
<?php if(is_page()&&!is_404()): ?>
<?php
$root_slug = ps_get_root_page( $post );
$root_slug = $root_slug->post_name;
?>
<link href="<?php sunpro_url(); ?>/wp-content/themes/reform/css/<?php echo $root_slug; ?>.css" rel="stylesheet" type="text/css"/>
<!-- /固定ページcss -->
<?php else: ?>
<link href="<?php sunpro_url(); ?>/wp-content/themes/reform/css/<?php echo esc_html(get_post_type_object(get_post_type())->name); ?>.css" rel="stylesheet" type="text/css"/>
<!-- 各ページcss -->
<?php endif; ?>
<?php endif; ?>
<?php if( is_404( )):?><!-- 404の時-->
<link href="<?php sunpro_url(); ?>/wp-content/themes/reform/css/common/notfound.css" rel="stylesheet">
<?php endif; ?>

<!-- ==========================/sCSS関連-->


<link rel="shortcut icon" href="/wp-content/themes/reform/images/favicon.ico">
<link rel="icon" href="/wp-content/themes/reform/images/favicon.ico">
<?php if(is_page(21452)): ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/contact_navibar.css" />
<?php endif; ?>
<script type="text/javascript" src="<?php sunpro_url(); ?>/wp-content/themes/reform/common/js/jquery.1.8.2.min.js"></script>
<script type="text/javascript" src="<?php sunpro_url(); ?>/wp-content/themes/reform/common/js/lightbox-plus-jquery.min.js"></script>
<script type="text/javascript" src="<?php sunpro_url(); ?>/wp-content/themes/reform/common/js/heightLine.js"></script>
<script type="text/javascript" src="<?php sunpro_url(); ?>/wp-content/themes/reform/common/js/rollover2.js"></script>
<script type="text/javascript" src="<?php sunpro_url(); ?>/wp-content/themes/reform/common/js/jquery-horizontalAccordion.js"></script>
<script type="text/javascript" src="<?php sunpro_url(); ?>/wp-content/themes/reform/common/js/smoothScroll.js"></script>
<script type="text/javascript" src="<?php sunpro_url(); ?>/wp-content/themes/reform/common/js/navi.js"></script>
<script type="text/javascript" src="<?php sunpro_url(); ?>/wp-content/themes/reform/common/js/thickbox.js"></script>
<?php if(is_page(array('2619') ) ): ?>
<link rel="stylesheet" type="text/css" href="<?php sunpro_url(); ?>/wp-content/themes/reform/css/request.css" />
<?php endif; ?>
<script language="JavaScript" type="text/javascript">
$(document).ready( function() {
    $("#panel").horizontalAccordion({slit:50, duration:0.3});
});
</script>

<!-- スライダー -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php sunpro_url(); ?>/wp-content/themes/reform/common/js/slick.min.js"></script>
<script type="text/javascript">
$(function() {
    $('#slider').slick({
          infinite: true,
					dots: true,
					appendDots: $('#apDots'),
          slidesToShow: 1,
          autoplay:true, //自動再生
     });
});
</script>
<!-- /スライダー -->

<!-- 郵便番号 -->
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script type="text/javascript">
$(function(){
  $('#zip').keyup(function(event){
    AjaxZip3.zip2addr(this,'','ken','address');
  })
})
</script>
<!-- /郵便番号 -->

<?php if(is_page(20007)): ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/contact.css" />
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/jquery.validate.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("form").validate({
    rules: {
        "place[]" :{ required: true },
		"m1kibou" : { required: true }, d1kibou : { required: true }, h1kibou : { required: true },
		"your-name" : { required: true },
		"your-email" : { required: true },
		"tel" : { required: true }
    },
    messages: {
        "place[]":{ required: "ご希望の店舗を選択してください" },
		"m1kibou" :{ required: "希望月をご記入ください" }, "d1kibou" :{ required: "希望日をご記入ください" }, "h1kibou" :{ required: "希望時間帯をご記入ください" },
		"your-name" :{ required: "お名前をご記入ください" },
		"your-email" :{ required: "メールアドレスをご記入ください" },
		"tel" :{ required: "電話番号をご記入ください" }
    }
	});
});
</script>
<?php endif; ?>
<?php
if ( is_page_template( 'page-company.php' )||is_page(array('30','20424','22428') )   ) : ?>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
$(function() {
 // 祝日を配列で確保
    var holidays = [ '2018-08-10','2018-08-11','2018-08-12','2018-08-13','2018-08-14','2018-08-15','2018-09-03','2018-12-29','2018-12-29','2018-12-30','2018-12-31','2019-01-01','2019-01-02','2019-01-03' ];

    $(".kiboday").datepicker({

	    	minDate: '+1d',
	    	dateFormat: 'yy年m月d日 (DD)',
			dayNames: ['日', '月', '火', '水', '木', '金', '土'],
			dayNamesMin: ['日', '月', '火', '水', '木', '金', '土'],
            beforeShowDay: function(date) {
            // 祝日の判定
            for (var i = 0; i < holidays.length; i++) {
                var htime = Date.parse(holidays[i]);    // 祝日を 'YYYY-MM-DD' から time へ変換
                var holiday = new Date();
                holiday.setTime(htime);                 // 上記 time を Date へ設定

                // 祝日
                if (holiday.getYear() == date.getYear() &&
                    holiday.getMonth() == date.getMonth() &&
                    holiday.getDate() == date.getDate()) {
                    return [false, 'holiday'];
                }
            }

            // 火曜日
            if (date.getDay() == 2) {
                return [false, ''];
            }
            // 水曜日
            if (date.getDay() == 3) {
                return [false, ''];
            }
            // 平日
            return [true, ''];
        },
        onSelect: function(dateText, inst) {
            $("#date_val").val(dateText);
        }
    });
});
</script>
<?php endif; ?>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-7409040-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-7409040-1');
</script>


<?php if(is_page(array('20664','20711') ) ): ?>
<style type="text/css">
div.wpcf7-mail-sent-ok {
	border: none !important;
}
</style>
<?php endif; ?>

<script type="text/javascript" src="<?php sunpro_url(); ?>/wp-content/themes/reform/common/js/jquery.wpcf7.confirm.js"></script>

<meta name="google-site-verification" content="IqPEIpFubZ5R_4ZiI2HqjwV-ogmmTn7im-CA29YJRsM" />
<title><?php wp_title('',true); ?><?php if(wp_title('',false)) { ?> | <?php } ?><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>

<!-- Global site tag (gtag.js) - AdWords: 955943880 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-955943880"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'AW-955943880');
</script>

</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MSL93PL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- ClickTale Top part -->
<script type="text/javascript">
var WRInitTime=(new Date()).getTime();
</script>
<!-- ClickTale end of Top part -->

<a name="top" id="top"></a>

<div class="fixed">
	<?php if(is_page('20664' ) )://住宅博 ?>
	<?php if(!wp_is_mobile()): ?>
<a title="お問い合わせ" href="#lp_form">
<img src="<?php sunpro_url(); ?>/wp-content/themes/reform/page_image/lp/s_contact.png" alt="来場予約はこちら" width="60" height="250" class="over" /></a>
<?php endif; ?>
<?php else :?>
<a title="相談はこちら" href="<?php sunpro_url(); ?>/contact">
	<img src="<?php sunpro_url(); ?>/wp-content/themes/reform/images/common/side_toi.png" alt="お問い合わせ" width="50" height="240" class="over" />
<?php endif; ?>
</div>

<!--=============================================== ヘッダー　ここから -->
<div id="header">
  <div class="inner">
    <h1 class="header_logo"><a href="<?php sunpro_url(); ?>"><img src="<?php sunpro_url(); ?>/wp-content/themes/reform/images/head/head_logo.png" width="402" height="99" alt="サンプロリフォーム" /></a></h1>
    <div class="info_tel">
      <div class="info_toi">
        <a href="<?php sunpro_url(); ?>/contact"><img src="<?php sunpro_url(); ?>/wp-content/themes/reform/images/head/head_toi.png" alt="お問い合わせ見積り依頼" width="162" height="30" class="over" /></a>
      </div>
      <div class="info_shiryo">
        <a href="<?php sunpro_url(); ?>/book"><img src="<?php sunpro_url(); ?>/wp-content/themes/reform/images/head/head_shiryo.png" alt="資料請求" width="162" height="30" class="over" /></a>
      </div>
    </div>
  </div>
</div>
<!--=============================================== ヘッダー　ここまで -->
<?php if(!is_page(array('20664','20711') ) )://住宅博を除く ?>
<!--
================================================ グローバルナビ　ここから -->
<ul class="globalnavi">
  <li><a href="<?php sunpro_url(); ?>"><img src="<?php sunpro_url(); ?>/wp-content/themes/reform/images/head/gnav_home_rollout.png" width="160" height="49" alt="ホーム" /></a></li>
  <li><a href="<?php sunpro_url(); ?>/reformnagare"><img src="<?php sunpro_url(); ?>/wp-content/themes/reform/images/head/gnav_reform_rollout.png" alt="リフォームについて" width="160" height="49" /></a>
    <ul>
      <li><a href="<?php sunpro_url(); ?>/reformnagare">リフォームの流れ</a></li>
      <li><a href="<?php sunpro_url(); ?>/kitchen">キッチン</a></li>
      <li><a href="<?php sunpro_url(); ?>/ohuro">お風呂</a></li>
      <li><a href="<?php sunpro_url(); ?>/toilet">トイレ</a></li>
      <li><a href="<?php sunpro_url(); ?>/kyuto">給湯器</a></li>
      <li><a href="<?php sunpro_url(); ?>/senmen">洗面</a></li>
      <li><a href="<?php sunpro_url(); ?>/gaiheki">外壁塗装</a></li>
      <li><a href="<?php sunpro_url(); ?>/mizumawari">水廻り3点セット</a></li>
      <li><a href="<?php sunpro_url(); ?>/jyusetsu">住宅設備が安く提供できる理由</a></li>
    </ul>
  </li>
  <li><a href="<?php sunpro_url(); ?>/company"><img src="<?php sunpro_url(); ?>/wp-content/themes/reform/images/head/gnav_company_rollout.png" width="160" height="49" alt="サンプロについて" /></a>
    <ul>
      <li><a href="<?php sunpro_url(); ?>/company/message">代表あいさつ</a></li>
      <li><a href="<?php sunpro_url(); ?>/company">会社案内</a></li>
      <li><a href="<?php sunpro_url(); ?>/company/service">サンプロ20大サービス</a></li>
      <li><a href="<?php sunpro_url(); ?>/company/hon">塩尻ショールーム</a></li>
      <li><a href="<?php sunpro_url(); ?>/company/matsumoto">松本ショールーム</a></li>
      <li><a href="<?php sunpro_url(); ?>/company/nagano">長野ショールーム</a></li>
      <li><a href="<?php sunpro_url(); ?>/staff">スタッフ紹介</a></li>
      <li><a href="<?php sunpro_url(); ?>/award">表彰実績</a></li>
      <li><a href="<?php sunpro_url(); ?>/craftman">職人紹介</a></li>
      <li><a href="<?php sunpro_url(); ?>/event">イベント・キャンペーン情報</a></li>
      <li><a href="<?php sunpro_url(); ?>/voice">お客様の声</a></li>
      <li><a href="<?php sunpro_url(); ?>/company/specialist">建築・リフォームのスペシャリスト集団</a></li>
    </ul>
  </li>
  <li><a href="<?php sunpro_url(); ?>/staff"><img src="<?php sunpro_url(); ?>/wp-content/themes/reform/images/head/gnav_staff_rollout.png" width="160" height="49" alt="スタッフ紹介" /></a></li>
  <li><a href="<?php sunpro_url(); ?>/seko"><img src="<?php sunpro_url(); ?>/wp-content/themes/reform/images/head/gnav_seko_rollout.png" width="160" height="49" alt="施工事例" /></a>
    <ul>
      <li><a href="<?php sunpro_url(); ?>/seko_cat/kitchen">キッチン</a></li>
      <li><a href="<?php sunpro_url(); ?>/seko_cat/ohuro">お風呂</a></li>
      <li><a href="<?php sunpro_url(); ?>/seko_cat/toilet">トイレ</a></li>
      <li><a href="<?php sunpro_url(); ?>/seko_cat/senmen">洗面所・脱衣所</a></li>
      <li><a href="<?php sunpro_url(); ?>/seko_cat/kyuto">給湯器・ボイラー</a></li>
      <li><a href="<?php sunpro_url(); ?>/seko_cat/yanegaiheki">屋根・外壁</a></li>
      <li><a href="<?php sunpro_url(); ?>/seko_cat/naiso">内装・インテリア</a></li>
      <li><a href="<?php sunpro_url(); ?>/seko_cat/design">増改築・デザインリフォーム</a></li>
      <li><a href="<?php sunpro_url(); ?>/seko_cat/shizen">自然素材リフォーム</a></li>
      <li><a href="<?php sunpro_url(); ?>/seko_cat/kaigo">バリアフリー・介護リフォーム</a></li>
      <li><a href="<?php sunpro_url(); ?>/seko_cat/tenpo">店舗リフォーム</a></li>
      <li><a href="<?php sunpro_url(); ?>/seko_cat/exterior">外構・エクステリア・庭</a></li>
      <li><a href="<?php sunpro_url(); ?>/seko_cat/dannetsu">断熱リフォーム</a></li>
      <li><a href="<?php sunpro_url(); ?>/seko_cat/other">その他のリフォーム</a></li>
    </ul>
  </li>
  <li><a href="<?php sunpro_url(); ?>/faq"><img src="<?php sunpro_url(); ?>/wp-content/themes/reform/images/head/gnav_faq_rollout.png" width="161" height="49" alt="よくある質問" /></a></li>
</ul>
<br clear="all" />
<!--
================================================= グローバルナビ　ここまで -->
<?php endif; ?>
