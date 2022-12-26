<?php get_header(); ?>
<?php get_template_part('navi-header'); ?>
<!-- TOPページ -->
<main id="front">
	<section class="main-visual">
		<div class="container-s">
			<div class="flex">
				<div class="flex-item1">
					<img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/new.png" alt="" width="88" height="88">
				</div>
				<div class="flex-item2">
					<p>定額デザインサービス</p>
					<h1>MAKASETE</h1>
				</div>
			</div>
			<p>デザインのことなら<br>すべておまかせください</p>
			<a>資料請求・お問合わせはこちらから</a>
		</div>
	</section>
</main>
<?php get_template_part('navi-footer'); ?>
<?php get_footer(); ?>
