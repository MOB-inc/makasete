<?php get_header(); ?>
<?php get_template_part('navi-header'); ?>
<!-- TOPページ -->
<main id="front">
	<section class="main-visual">
		<div class="container-s">
			<div class="flex">
				<picture class="flex-item1">
					<source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/img/new.webp" type="image/webp">
					<img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/new.png" alt="" width="88" height="88">
				</picture>
				<div class="flex-item2">
					<p>定額デザインサービス</p>
					<h1>MAKASETE</h1>
				</div>
			</div>
			<p>デザインのことなら<br>すべておまかせください</p>
			<a>資料請求・お問合わせはこちらから</a>
		</div>
	</section>
	<section class="about-makasete">
		<div class="container-s">
			<h2><span>MAKASETE</span>ってなに？</h2>
			<p>スタート時に必要なものを<br>定額でプロにおまかせしてみませんか？</p>
			<p>名刺、ロゴ、HPなど、とりあえず作ったものでそろそろ変えたい・・・<br>自社にデザイナー、コーダーがいない・・・<br>そんなときに、MAKASETEに丸投げしてみませんか？
			</p>
		</div>
	</section>
</main>
<?php get_template_part('navi-footer'); ?>
<?php get_footer(); ?>
