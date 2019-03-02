<?php get_header();
$title = apply_filters( 'the_title', get_queried_object()->post_title );

function get_attachment_id($url){
  global $wpdb;
  $sql = "SELECT ID FROM {$wpdb->posts} WHERE post_name = %s";
  preg_match('/([^\/]+?)(-e\d+)?(-\d+x\d+)?(\.\w+)?$/', $url, $matches);
  $post_name = $matches[1];
  return (int)$wpdb->get_var($wpdb->prepare($sql, $post_name));
}
?>



<div id="keyvj">
<div class="inner">
<div class="sliderArea">
  <ul id="slider" class="slider">
    <li>
      <img src="<?php bloginfo('template_directory'); ?>/page_image/top/keyvj.jpg" width="950" height="350" alt="可児・多治見 およびその周辺のリフォーム・増改築は大和建設にお任せください!!" />
    </li>
    <li><a href="/plan_cat/kitchen">
        <img src="<?php bloginfo('template_directory'); ?>/page_image/plan/slide/slide01.jpg" alt="" />
      </a>
    </li>
    <li><a href="/plan_cat/ohuro">
        <img src="<?php bloginfo('template_directory'); ?>/page_image/plan/slide/slide02.jpg" alt="" />
      </a>
    </li>
    <li><a href="/plan_cat/senmen">
        <img src="<?php bloginfo('template_directory'); ?>/page_image/plan/slide/slide03.jpg" alt="" />
      </a>
    </li>
    <li><a href="/plan_cat/toilet">
        <img src="<?php bloginfo('template_directory'); ?>/page_image/plan/slide/slide04.jpg" alt="" />
      </a>
    </li>
  </ul>
</div>
</div>
<div id="apDots"></div>
</div>

<div id="contents_wrap">

<div class="clearfix">


<!-- メイン -->
<div id="main">

<!--<div id="oshirase">
◆◇◆◇　夏季休暇のご案内　◆◇◆◇<br />
誠に勝手ながら、2018年8月10日（金）～ 2018年8月15日（水）は休業させていただきます。<br />
通常営業は、8月16日（木）からとなります。<br />
休暇中にいただいたお問い合わせについては、通常営業日より順次対応させていただきますので、ご了承ください。<br />
今後も変わらぬご愛顧をどうぞよろしくお願いいたします。
</div>-->

<!-- 施工事例 -->
<div id="top_seko">
<h2 class="image_title"><img src="<?php bloginfo('template_directory'); ?>/page_image/top/works_tit_gaiheki.png" alt="外壁リフォーム施工事例" width="718" height="58" /></h2>
<div class="radius_normal_open">

<script type="text/javascript">
<!--
$(document).ready(function() {
	var linkboxes = $(".box_seko");
		for (var i=0; i<linkboxes.length; i++){
		var readmores = $("img");
		for (var j=0; j<readmores.length; j++){
			$(".box_seko").click(function() {
				var anchorTags = this.getElementsByTagName("a");
				window.location = anchorTags[0].href;
			});
		}
	}
	$("img").addClass("none");
	$(".box_seko").hover(function(){
		$(this).addClass("box_hover");
		},
		function(){
		$(this).removeClass("box_hover");
		});
});
-->
</script>

<?php
    $args=array(
        'tax_query' => array(
            array(
                'taxonomy' => 'seko_cat', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
                'terms' => array( 'gaiheki' ) //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'seko', //カスタム投稿名
        'posts_per_page'=> 3 //表示件数（-1で全ての記事を表示）
    );
 ?>

<?php query_posts( $args ); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>

<a href="<?php the_permalink() ?>">
<div class="one_box">
<p class="img_box">
<?php
								printf(
									'%s</a></p>',
									gr_get_image(
										'seko_after_image',
										array( 'width' => 160, 'alt' => esc_attr( post_custom( '施行事例' ) ) )
									)
								);
								?>
										<?php if(get_post_meta($post->ID,'seko_csv2',true)): ?>
<?php endif; ?>

<?
	$SekoIcon	= post_custom('seko_infoicon');
	if($SekoIcon){
	echo '<div class="top_seko_icon">';
	if(strstr($SekoIcon,"ご紹介")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_shokai.gif" width="43" height="15" alt="ご紹介" />';
	}
	if(strstr($SekoIcon,"HPからのお問い合わせ")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_hp.gif" width="115" height="15" alt="HPからのお問い合わせ" />';
	}
	if(strstr($SekoIcon,"セミナーより")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_seminar.gif" width="92" height="15" alt="外壁セミナーより" />';
	}
	if(strstr($SekoIcon,"補助金活用")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_hojokin.gif" width="65" height="15" alt="補助金活用" />';
	}
	if(strstr($SekoIcon,"チラシより")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_chirashi.gif" width="62" height="15" alt="チラシより" />';
	}
	if(strstr($SekoIcon,"相談会より")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_soudan.gif" width="62" height="15" alt="相談会より" />';
	}
	if(strstr($SekoIcon,"リピーター様")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_repeater.gif" width="75" height="15" alt="リピーター様" />';
	}
	echo '</div>';
	}
?>
<br clear="all">
<p class="title"><?php the_title(); ?></p>
<p class="city"><?php echo post_custom( 'seko_city' ); ?>　<?php echo post_custom( 'seko_name' ); ?></p>
<p class="price">費用：<span class="red"><?php echo post_custom( 'seko_price' ); ?></span></p>

<!--new icon-->
	<?php
	$days=14; //NEWをつける日数
	$today=date_i18n('U');
	$entry=get_the_time('U');
	$sa=date('U',($today - $entry))/86400;
		if( $days > $sa ){
	 	echo "\n" . '<img src="../../wp-content/themes/reform/page_image/new.gif" />' . "\n";
		}
?>
<!--new icon-->

</div>
</a>
<?php endwhile; ?>
<?php else : ?>
<p>表示する記事はありませんでした</p>
<?php endif; ?>



<br clear="all" />

<a href="<?php echo home_url(); ?>/seko_cat/gaiheki" class="more_btn_seko radius5">もっと見る<span class="fa-play-circle"></span></a>
<br clear="all" />
</div>
</div>
<!-- //end 施工事例 -->

<!-- 施工事例 -->
<div id="top_seko">
<h2 class="image_title"><img src="<?php bloginfo('template_directory'); ?>/page_image/top/works_tit_kitchen.png" alt="キッチンリフォーム施工事例" width="718" height="58" /></h2>
<div class="radius_normal_open">

<script type="text/javascript">
<!--
$(document).ready(function() {
	var linkboxes = $(".box_seko");
		for (var i=0; i<linkboxes.length; i++){
		var readmores = $("img");
		for (var j=0; j<readmores.length; j++){
			$(".box_seko").click(function() {
				var anchorTags = this.getElementsByTagName("a");
				window.location = anchorTags[0].href;
			});
		}
	}
	$("img").addClass("none");
	$(".box_seko").hover(function(){
		$(this).addClass("box_hover");
		},
		function(){
		$(this).removeClass("box_hover");
		});
});
-->
</script>

<?php
    $args=array(
        'tax_query' => array(
            array(
                'taxonomy' => 'seko_cat', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
                'terms' => array( 'kitchen' ) //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'seko', //カスタム投稿名
        'posts_per_page'=> 3 //表示件数（-1で全ての記事を表示）
    );
 ?>

<?php query_posts( $args ); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>

<a href="<?php the_permalink() ?>">
<div class="one_box">
<p class="img_box">
<?php
								printf(
									'%s</a></p>',
									gr_get_image(
										'seko_after_image',
										array( 'width' => 160, 'alt' => esc_attr( post_custom( '施行事例' ) ) )
									)
								);
								?>
										<?php if(get_post_meta($post->ID,'seko_csv2',true)): ?>
<?php endif; ?>

<?
	$SekoIcon	= post_custom('seko_infoicon');
	if($SekoIcon){
	echo '<div class="top_seko_icon">';
	if(strstr($SekoIcon,"ご紹介")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_shokai.gif" width="43" height="15" alt="ご紹介" />';
	}
	if(strstr($SekoIcon,"HPからのお問い合わせ")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_hp.gif" width="115" height="15" alt="HPからのお問い合わせ" />';
	}
	if(strstr($SekoIcon,"セミナーより")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_seminar.gif" width="92" height="15" alt="外壁セミナーより" />';
	}
	if(strstr($SekoIcon,"補助金活用")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_hojokin.gif" width="65" height="15" alt="補助金活用" />';
	}
	if(strstr($SekoIcon,"チラシより")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_chirashi.gif" width="62" height="15" alt="チラシより" />';
	}
	if(strstr($SekoIcon,"相談会より")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_soudan.gif" width="62" height="15" alt="相談会より" />';
	}
	if(strstr($SekoIcon,"リピーター様")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_repeater.gif" width="75" height="15" alt="リピーター様" />';
	}
	echo '</div>';
	}
?>
<br clear="all">
<p class="title"><?php the_title(); ?></p>
<p class="city"><?php echo post_custom( 'seko_city' ); ?>　<?php echo post_custom( 'seko_name' ); ?></p>
<p class="price">費用：<span class="red"><?php echo post_custom( 'seko_price' ); ?></span></p>

<!--new icon-->
	<?php
	$days=14; //NEWをつける日数
	$today=date_i18n('U');
	$entry=get_the_time('U');
	$sa=date('U',($today - $entry))/86400;
		if( $days > $sa ){
	 	echo "\n" . '<img src="../../wp-content/themes/reform/page_image/new.gif" />' . "\n";
		}
?>
<!--new icon-->

</div>
</a>
<?php endwhile; ?>
<?php else : ?>
<p>表示する記事はありませんでした</p>
<?php endif; ?>



<br clear="all" />

<a href="<?php echo home_url(); ?>/seko_cat/kitchen" class="more_btn_seko radius5">もっと見る<span class="fa-play-circle"></span></a>
<br clear="all" />
</div>
</div>
<!-- //end 施工事例 -->

<!-- 施工事例 -->
<div id="top_seko">
<h2 class="image_title"><img src="<?php bloginfo('template_directory'); ?>/page_image/top/works_tit_ohuro.png" alt="お風呂リフォーム施工事例" width="718" height="58" /></h2>
<div class="radius_normal_open">

<script type="text/javascript">
<!--
$(document).ready(function() {
	var linkboxes = $(".box_seko");
		for (var i=0; i<linkboxes.length; i++){
		var readmores = $("img");
		for (var j=0; j<readmores.length; j++){
			$(".box_seko").click(function() {
				var anchorTags = this.getElementsByTagName("a");
				window.location = anchorTags[0].href;
			});
		}
	}
	$("img").addClass("none");
	$(".box_seko").hover(function(){
		$(this).addClass("box_hover");
		},
		function(){
		$(this).removeClass("box_hover");
		});
});
-->
</script>

<?php
    $args=array(
        'tax_query' => array(
            array(
                'taxonomy' => 'seko_cat', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
                'terms' => array( 'ohuro' ) //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'seko', //カスタム投稿名
        'posts_per_page'=> 3 //表示件数（-1で全ての記事を表示）
    );
 ?>

<?php query_posts( $args ); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>

<a href="<?php the_permalink() ?>">
<div class="one_box">
<p class="img_box">
<?php
								printf(
									'%s</a></p>',
									gr_get_image(
										'seko_after_image',
										array( 'width' => 160, 'alt' => esc_attr( post_custom( '施行事例' ) ) )
									)
								);
								?>
										<?php if(get_post_meta($post->ID,'seko_csv2',true)): ?>
<?php endif; ?>

<?
	$SekoIcon	= post_custom('seko_infoicon');
	if($SekoIcon){
	echo '<div class="top_seko_icon">';
	if(strstr($SekoIcon,"ご紹介")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_shokai.gif" width="43" height="15" alt="ご紹介" />';
	}
	if(strstr($SekoIcon,"HPからのお問い合わせ")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_hp.gif" width="115" height="15" alt="HPからのお問い合わせ" />';
	}
	if(strstr($SekoIcon,"セミナーより")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_seminar.gif" width="92" height="15" alt="外壁セミナーより" />';
	}
	if(strstr($SekoIcon,"補助金活用")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_hojokin.gif" width="65" height="15" alt="補助金活用" />';
	}
	if(strstr($SekoIcon,"チラシより")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_chirashi.gif" width="62" height="15" alt="チラシより" />';
	}
	if(strstr($SekoIcon,"相談会より")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_soudan.gif" width="62" height="15" alt="相談会より" />';
	}
	if(strstr($SekoIcon,"リピーター様")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_repeater.gif" width="75" height="15" alt="リピーター様" />';
	}
	echo '</div>';
	}
?>
<br clear="all">
<p class="title"><?php the_title(); ?></p>
<p class="city"><?php echo post_custom( 'seko_city' ); ?>　<?php echo post_custom( 'seko_name' ); ?></p>
<p class="price">費用：<span class="red"><?php echo post_custom( 'seko_price' ); ?></span></p>

<!--new icon-->
	<?php
	$days=14; //NEWをつける日数
	$today=date_i18n('U');
	$entry=get_the_time('U');
	$sa=date('U',($today - $entry))/86400;
		if( $days > $sa ){
	 	echo "\n" . '<img src="../../wp-content/themes/reform/page_image/new.gif" />' . "\n";
		}
?>
<!--new icon-->

</div>
</a>
<?php endwhile; ?>
<?php else : ?>
<p>表示する記事はありませんでした</p>
<?php endif; ?>



<br clear="all" />

<a href="<?php echo home_url(); ?>/seko_cat/ohuro" class="more_btn_seko radius5">もっと見る<span class="fa-play-circle"></span></a>
<br clear="all" />
</div>
</div>
<!-- //end 施工事例 -->

<!-- 施工事例 -->
<div id="top_seko">
<h2 class="image_title"><img src="<?php bloginfo('template_directory'); ?>/page_image/top/works_tit_toilet.png" alt="トイレリフォーム施工事例" width="718" height="58" /></h2>
<div class="radius_normal_open">

<script type="text/javascript">
<!--
$(document).ready(function() {
	var linkboxes = $(".box_seko");
		for (var i=0; i<linkboxes.length; i++){
		var readmores = $("img");
		for (var j=0; j<readmores.length; j++){
			$(".box_seko").click(function() {
				var anchorTags = this.getElementsByTagName("a");
				window.location = anchorTags[0].href;
			});
		}
	}
	$("img").addClass("none");
	$(".box_seko").hover(function(){
		$(this).addClass("box_hover");
		},
		function(){
		$(this).removeClass("box_hover");
		});
});
-->
</script>

<?php
    $args=array(
        'tax_query' => array(
            array(
                'taxonomy' => 'seko_cat', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
                'terms' => array( 'toilet' ) //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'seko', //カスタム投稿名
        'posts_per_page'=> 3 //表示件数（-1で全ての記事を表示）
    );
 ?>

<?php query_posts( $args ); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>

<a href="<?php the_permalink() ?>">
<div class="one_box">
<p class="img_box">
<?php
								printf(
									'%s</a></p>',
									gr_get_image(
										'seko_after_image',
										array( 'width' => 160, 'alt' => esc_attr( post_custom( '施行事例' ) ) )
									)
								);
								?>
										<?php if(get_post_meta($post->ID,'seko_csv2',true)): ?>
<?php endif; ?>

<?
	$SekoIcon	= post_custom('seko_infoicon');
	if($SekoIcon){
	echo '<div class="top_seko_icon">';
	if(strstr($SekoIcon,"ご紹介")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_shokai.gif" width="43" height="15" alt="ご紹介" />';
	}
	if(strstr($SekoIcon,"HPからのお問い合わせ")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_hp.gif" width="115" height="15" alt="HPからのお問い合わせ" />';
	}
	if(strstr($SekoIcon,"セミナーより")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_seminar.gif" width="92" height="15" alt="外壁セミナーより" />';
	}
	if(strstr($SekoIcon,"補助金活用")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_hojokin.gif" width="65" height="15" alt="補助金活用" />';
	}
	if(strstr($SekoIcon,"チラシより")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_chirashi.gif" width="62" height="15" alt="チラシより" />';
	}
	if(strstr($SekoIcon,"相談会より")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_soudan.gif" width="62" height="15" alt="相談会より" />';
	}
	if(strstr($SekoIcon,"リピーター様")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_repeater.gif" width="75" height="15" alt="リピーター様" />';
	}
	echo '</div>';
	}
?>
<br clear="all">
<p class="title"><?php the_title(); ?></p>
<p class="city"><?php echo post_custom( 'seko_city' ); ?>　<?php echo post_custom( 'seko_name' ); ?></p>
<p class="price">費用：<span class="red"><?php echo post_custom( 'seko_price' ); ?></span></p>

<!--new icon-->
	<?php
	$days=14; //NEWをつける日数
	$today=date_i18n('U');
	$entry=get_the_time('U');
	$sa=date('U',($today - $entry))/86400;
		if( $days > $sa ){
	 	echo "\n" . '<img src="../../wp-content/themes/reform/page_image/new.gif" />' . "\n";
		}
?>
<!--new icon-->

</div>
</a>
<?php endwhile; ?>
<?php else : ?>
<p>表示する記事はありませんでした</p>
<?php endif; ?>



<br clear="all" />

<a href="<?php echo home_url(); ?>/seko_cat/toilet" class="more_btn_seko radius5">もっと見る<span class="fa-play-circle"></span></a>
<br clear="all" />
</div>
</div>
<!-- //end 施工事例 -->

<!-- 施工事例 -->
<div id="top_seko">
<h2 class="image_title"><img src="<?php bloginfo('template_directory'); ?>/page_image/top/works_tit_senmen.png" alt="洗面リフォーム施工事例" width="718" height="58" /></h2>
<div class="radius_normal_open">

<script type="text/javascript">
<!--
$(document).ready(function() {
	var linkboxes = $(".box_seko");
		for (var i=0; i<linkboxes.length; i++){
		var readmores = $("img");
		for (var j=0; j<readmores.length; j++){
			$(".box_seko").click(function() {
				var anchorTags = this.getElementsByTagName("a");
				window.location = anchorTags[0].href;
			});
		}
	}
	$("img").addClass("none");
	$(".box_seko").hover(function(){
		$(this).addClass("box_hover");
		},
		function(){
		$(this).removeClass("box_hover");
		});
});
-->
</script>

<?php
    $args=array(
        'tax_query' => array(
            array(
                'taxonomy' => 'seko_cat', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
                'terms' => array( 'senmen' ) //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'seko', //カスタム投稿名
        'posts_per_page'=> 3 //表示件数（-1で全ての記事を表示）
    );
 ?>

<?php query_posts( $args ); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>

<a href="<?php the_permalink() ?>">
<div class="one_box">
<p class="img_box">
<?php
								printf(
									'%s</a></p>',
									gr_get_image(
										'seko_after_image',
										array( 'width' => 160, 'alt' => esc_attr( post_custom( '施行事例' ) ) )
									)
								);
								?>
										<?php if(get_post_meta($post->ID,'seko_csv2',true)): ?>
<?php endif; ?>

<?
	$SekoIcon	= post_custom('seko_infoicon');
	if($SekoIcon){
	echo '<div class="top_seko_icon">';
	if(strstr($SekoIcon,"ご紹介")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_shokai.gif" width="43" height="15" alt="ご紹介" />';
	}
	if(strstr($SekoIcon,"HPからのお問い合わせ")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_hp.gif" width="115" height="15" alt="HPからのお問い合わせ" />';
	}
	if(strstr($SekoIcon,"セミナーより")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_seminar.gif" width="92" height="15" alt="外壁セミナーより" />';
	}
	if(strstr($SekoIcon,"補助金活用")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_hojokin.gif" width="65" height="15" alt="補助金活用" />';
	}
	if(strstr($SekoIcon,"チラシより")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_chirashi.gif" width="62" height="15" alt="チラシより" />';
	}
	if(strstr($SekoIcon,"相談会より")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_soudan.gif" width="62" height="15" alt="相談会より" />';
	}
	if(strstr($SekoIcon,"リピーター様")){
		echo '<img src="/wp-content/themes/reform/images/top/icon_repeater.gif" width="75" height="15" alt="リピーター様" />';
	}
	echo '</div>';
	}
?>
<br clear="all">
<p class="title"><?php the_title(); ?></p>
<p class="city"><?php echo post_custom( 'seko_city' ); ?>　<?php echo post_custom( 'seko_name' ); ?></p>
<p class="price">費用：<span class="red"><?php echo post_custom( 'seko_price' ); ?></span></p>

<!--new icon-->
	<?php
	$days=14; //NEWをつける日数
	$today=date_i18n('U');
	$entry=get_the_time('U');
	$sa=date('U',($today - $entry))/86400;
		if( $days > $sa ){
	 	echo "\n" . '<img src="../../wp-content/themes/reform/page_image/new.gif" />' . "\n";
		}
?>
<!--new icon-->

</div>
</a>
<?php endwhile; ?>
<?php else : ?>
<p>表示する記事はありませんでした</p>
<?php endif; ?>



<br clear="all" />

<a href="<?php echo home_url(); ?>/seko_cat/senmen" class="more_btn_seko radius5">もっと見る<span class="fa-play-circle"></span></a>
<br clear="all" />
</div>
</div>
<!-- //end 施工事例 -->


<a href="/contact"><img src="<?php bloginfo('template_directory'); ?>/common_image/bnr/contact_big_bnr.gif" alt="リフォーム・増改築のお問い合わせはこちら！" width="718" height="215" class="mb2" /></a>


<!-- 現場日記 -->
<div id="top_genbanikki">
<h2 class="image_title"><img src="<?php bloginfo('template_directory'); ?>/page_image/top/genbanikki_tit.gif" alt="リフォーム現場日記" width="718" height="58" /></h2>
<div class="radius_normal_open">

<?php $args = array(
'post_type' => 'genbanikki', /* 投稿タイプ */
'paged' => $paged,
'posts_per_page' => 6 /* 件数表示 */
); ?>
<?php query_posts( $args ); ?>
<?php if (have_posts()) : ?>
<?php $i = 0; ?>
<?php while (have_posts()) : the_post();
/* ループ開始 */ ?>

<div class="one_box">

<?php
$content = get_the_content();
preg_match_all('/src=[\'"]*([^ >]+?)[\'"]/i',$content,$match);
if (count($match[1]) > 0) {
$x = 0;
foreach($match as $match){
$url =  preg_replace( '/src=/', '', $match[$x] );
$url =  preg_replace( '/[\'"]/', '', $url );
$imgL = wp_get_attachment_image_src( get_attachment_id($url), 'large' );
if($imgL[0]){
echo '<p class="img_box"><a href="' . $imgL[0] . '" rel="lightbox[genba]" title="' . get_the_title() . '">' . wp_get_attachment_image( get_attachment_id($url), 'medium' ) . '</a></p>';
}else if($url){
echo '<p class="img_box"><a href="' . $url . '" rel="lightbox[genba]" title="' . get_the_title() . '"><img src="' . $url . '" width="210" /></a></p>';
}
$x++;
}
} ?>

<p class="text"><a href="<?php the_permalink(); ?>"><span><?php the_time('Y年n月j日');?></span><font color="#000"><?php the_excerpt(); ?></font></a></p>
</div>

<?php
				$i++;
				endwhile;
				else: ?>
				<p>現在準備中です</p>
				<?php endif; ?>




<br clear="all" />

<a href="<?php echo home_url(); ?>/genbanikki" class="more_btn_genbanikki radius5">もっと見る<span class="fa-play-circle"></span></a>
<br clear="all" />
</div>
</div>
<!-- //end 現場日記 -->


<!-- お客様の声 -->
<div id="top_voice">
<h2 class="image_title"><img src="<?php bloginfo('template_directory'); ?>/page_image/top/voice_tit.gif" alt="お客様の声" width="718" height="58" /></h2>
<div class="radius_normal_open_underwide">

<a href="<?php echo home_url(); ?>/interview_10">
<div class="one_box">
<img src="<?php bloginfo('template_directory'); ?>/page_image/interview/i10.jpg" width="210" height="158" alt="お客様インタビュー" />
<p class="text">満足いく施工になったのも、代表である大山さんの「お人柄」を信じたからです。</p>
<p class="city">可児市内　H様邸</p>
</div>
</a>

<a href="<?php echo home_url(); ?>/interview_9">
<div class="one_box">
<img src="<?php bloginfo('template_directory'); ?>/page_image/interview/i09.jpg" width="210" height="158" alt="お客様インタビュー" />
<p class="text">「外壁診断の実施」と「真摯な答え」。そこに他の塗装会社にはない確かさを感じました。</p>
<p class="city">可児市内　M様邸</p>
</div>
</a>

<a href="<?php echo home_url(); ?>/interview_8">
<div class="one_box">
<img style="max-width: 100%; height: 158px;" src="http://www.life-tellus.co.jp/wp-content/uploads/2017/05/IMG_5342.jpg" width="210" height="158" alt="お客様インタビュー" />
<p class="text">代表の大山さんによる一括管理だったので、話が早く、施工も安心してお願いできました。
</p>
<p class="city">可児市内　K様邸 (工期　3週間) </p>
</div>
</a>

<a href="<?php echo home_url(); ?>/interview_7">
<div class="one_box">
<img src="<?php bloginfo('template_directory'); ?>/page_image/interview/i07.jpg" width="210" height="158" alt="お客様インタビュー" />
<p class="text">とことん付き合っていただいたおかげで、心から納得できる塗装になりました。</p>
<p class="city">可児市内　O様邸</p>
</div>
</a>

<a href="<?php echo home_url(); ?>/interview_6">
<div class="one_box">
<img src="<?php bloginfo('template_directory'); ?>/page_image/interview/i06.jpg" width="210" height="158" alt="お客様インタビュー" />
<p class="text">確かな施工品質と、施工への強い想い。おかげで、建てたときよりもキレイになりました!</p>
<p class="city">可児市内　H様邸</p>
</div>
</a>

<a href="<?php echo home_url(); ?>/interview_5">
<div class="one_box">
<img src="<?php bloginfo('template_directory'); ?>/page_image/interview/i05.jpg" width="210" height="158" alt="お客様インタビュー" />
<p class="text">確かな施工品質と高いプロ意識がある。だから、安心してお願いできました。</p>
<p class="city">可児市内　O様邸</p>
</div>
</a>

<!--<a href="<?php echo home_url(); ?>/interview_4">
<div class="one_box">
<img src="<?php bloginfo('template_directory'); ?>/page_image/interview/i04.jpg" width="210" height="158" alt="お客様インタビュー" />
<p class="text">訪問販売と比べても、格段に施工内容やサービスの良さを感じました。</p>
<p class="city">可児市内　M様邸</p>
</div>
</a>

<a href="<?php echo home_url(); ?>/interview_3">
<div class="one_box">
<img src="<?php bloginfo('template_directory'); ?>/page_image/interview/i03.jpg" width="210" height="158" alt="お客様インタビュー" />
<p class="text">地元業者＆専門家として、最適な提案をしてくれたこと。それが信頼感につながりました。</p>
<p class="city">土岐市内　T様邸</p>
</div>
</a>

<a href="<?php echo home_url(); ?>/interview_2">
<div class="one_box">
<img src="<?php bloginfo('template_directory'); ?>/page_image/interview/i02.jpg" width="210" height="158" alt="お客様インタビュー" />
<p class="text">若くて熱意がある。説明も親切で丁寧。そんな人柄を信頼してお願いしました。</p>
<p class="city">可児市内　K様邸</p>
</div>
</a>-->






<br clear="all" />

<a href="<?php echo home_url(); ?>/voice" class="more_btn_voice radius5">もっと見る<span class="fa-play-circle"></span></a>
<br clear="all" />
</div>
</div>
<!-- //end お客様の声 -->


<a href="<?php echo home_url(); ?>/exterior"><img src="<?php bloginfo('template_directory'); ?>/page_image/top/exterior_big_bnr.jpg" alt="エクステリアリフォームお任せ下さい！" width="718" height="184" class="mb2" /></a>
<a href="<?php echo home_url(); ?>/shokoji"><img src="<?php bloginfo('template_directory'); ?>/page_image/top/mini_big_bnr.jpg" alt="小工事メニュー表" width="718" height="150" class="mb2" /></a>

<a href="<?php echo home_url(); ?>/contact"><img src="<?php bloginfo('template_directory'); ?>/common_image/bnr/contact_big_bnr.gif" alt="リフォーム・増改築のお問い合わせはこちら！" width="718" height="215" class="mb2" /></a>

</div>
<!-- //end メイン -->

<?php get_sidebar(); ?>

</div><!-- //end .clearfix -->
</div><!-- //end #contents_wrap -->

<?php get_footer(); ?>
