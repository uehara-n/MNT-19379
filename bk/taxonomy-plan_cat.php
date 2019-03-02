<?php get_header(); 

$term = get_term_by( 'slug', get_query_var( 'term' ), 'plan_cat' );
if ( is_wp_error( $term ) ) {
	$h3 = 'キッチン';
	$term_slug = 'soudan_kitchen';
} else {
	$h3 = esc_html( $term->name );
	$term_slug = $term->slug;

	//親ターム名取得
	$term_p = $term->parent;
	if($term_p){
		$term_p = get_term( $term_p,'plan_cat');
		$term_pname = $term_p->name;
	}

}
$args = array(
	'plan_cat' => $term->slug, 	/* カスタムタクソノミーを指定　*/
	'paged' => $paged,			/* ページ番号を指定 */
	'posts_per_page' => -1,		/* 最大表示数 */
);
query_posts( $args );
?>

<?php
$term = get_term_by( /* タームごとの表示用　*/
    'slug',
    get_query_var('term'),
    get_query_var('taxonomy')
);
?> 

<div id="contents_wrap">

<div class="clearfix">

<!-- メイン -->
<div id="main">

<ul id="pankuzu" class="clearfix"><?php the_pankuzu_keni( ' &gt; ' ); ?><?php single_tag_title(); ?>リフォーム</ul>

<div id="plan">

<h3><img src="/wp-content/themes/reform_ver02/page_image/plan/main_<?php echo esc_html($term_slug); ?>.jpg" width="730" height="231" alt="<?php single_tag_title(); ?>リフォーム" /></h3>

<?php while( have_posts() ) : the_post(); ?>

<div class="box">
<div class="pict">
<?php if(post_custom('plan_mainimg')){
	printf( '%s',
	gr_get_image( 'plan_mainimg', 
	array( 'width' => 200, 'alt' => esc_attr( get_the_title() ), 'title' => esc_attr( get_the_title() ) )
							)
						);
					}else{
						echo '<img src="/wp-content/themes/relite/page_image/plan/noimage.gif" width="200" height="150" alt="画像なし" />';
					}
					
?>
</div><!-- //.pict -->

<div class="text">
<p class="bun_box">

<div class="maker">
<?php echo '' . post_custom('plan_maker'); ?>
</div>

<? if(post_custom('seko_newicon')||post_custom('seko_infoicon')){
	if( post_custom('seko_newicon') ){
	echo '<img src="/wp-content/themes/relite/page_image/new.gif" width="30" height="20" alt="NEW" />';
					};
					
					echo '<br />';
					} ?>

<p class="data">
<?php echo '' . post_custom('plan_name'); ?><br />
<?php echo '' . post_custom('plan_spec'); ?>
</p>

<p class="teika">
定価価格<br />
<span><?php echo number_format(post_custom('plan_teika')); ?></span>円
</p>

<div class="itemmoney">
<p>
<span><?php echo number_format(post_custom('plan_itemmoney')); ?></span>円（税抜）
</p>
</div>


<div id="burst-12">
<p><?php echo '' . post_custom('plan_value'); ?><span>%<br />OFF</span></p>
</div>


</div><!-- //.text -->
</div><!-- //.box -->
<?php $i++;
endwhile; ?>

</div><!-- //#plan -->

<p class="movetop"><a href="#top"><img src="/wp-content/themes/reform/page_image/ohuro/btn_movetop.gif" alt="このページのトップへ" width="119" height="12" /></a></p>
		
<!-- ======================お問い合せ　ここから======================= -->
<?php gr_contact_banner(); ?>
<!-- ======================お問い合せ　ここまで======================= -->

</div>
<!-- //end メイン -->

<?php get_sidebar(); ?>

</div><!-- //end .clearfix -->
</div><!-- //end #contents_wrap -->

<?php get_footer(); ?>