<?php get_header(); ?>
<?php get_template_part('navi-header'); ?>
<!-- TOPページ -->
<main id="front">
	<section class="main-visual">
		<div class="container-s">
			<p><span>デザイン</span>のことなら<br>すべておまかせください</p>
			<picture class="img-box">
				<source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/img/makasete.webp" type="image/webp">
				<img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/makasete.png" alt="" width="317" height="330">
			</picture>
			<a>資料請求・お問合わせはこちらから</a>
		</div>
	</section>
	<section class="about-makasete">
		<div class="container-s">
			<h2>MAKASETEってなに？</h2>
			<p><span>＼</span>スタート時に必要なものを定額でプロにおまかせしてみませんか？<span>／</span>
			</p>
			<p>
				名刺、ロゴ、HPなど、とりあえず作ったものでそろそろ変えたい・・・<br>
				自社にデザイナー、コーダーがいない・・・
			</p>
			<picture>
				<source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/img/about-makasete.webp" type="image/webp">
				<img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/about-makasete.png" alt="" width="106" height="158">
			</picture>
		</div>
	</section>
	<section class="marunage">
		<div class="container-s">
			<div class="flex">
				<picture>
					<source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/img/kaiketsu.webp" type="image/webp">
					<img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/kaiketsu.png" alt="" width="108" height="123">
				</picture>
				<p>そんなときに、<span>MAKASETE</span>に丸投げしてみてみませんか？</p>
			</div>
		</div>
	</section>
	<section class="point">
		<div class="container-s">
			<ul>
				<li>
					<p>point.1</p>
					<h2>自社の制作チーム感覚で<br>気軽に何度も利用出来ます。</h2>
					<p>
						月額定額サービスなので、修正するたびに都度お見積りが必要なく、スムーズに制作を進める事が可能です。
						また、予算を気にせずに何度もでも、ご気軽にご依頼いただけます。
					</p>
					<picture>
						<source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/img/point1.webp" type="image/webp">
						<img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/point1.png" alt="" width="307" height="215">
					</picture>
				</li>
				<li>
					<p>point.2</p>
					<h2>経験豊富なプロが作るから安心。<br>事業に集中出来ます。</h2>
					<p>
						戦略を踏まえたデザイン、内部の最適化等、お客様にあった最適解をご提案いたします。<br>
						提案ベースで進んでいくので、余計なことは考えず、事業に集中して取り組む事が可能です。
					</p>
					<picture>
						<source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/img/point2.webp" type="image/webp">
						<img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/point2.png" alt="" width="307" height="215">
					</picture>
				</li>
				<li>
					<p>point.3</p>
					<h2>ブランドイメージの統一。</h2>
					<p>
						ロゴ制作からHP製作、名刺などもワンストップで制作するため、ブランドイメージを統一して作成が可能です。<br>
						フォントやあしらいなど、細かいイメージを統一をして、ブランドイメージの確立をお手伝いいたします。
					</p>
					<picture>
						<source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/img/point3.webp" type="image/webp">
						<img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/point3.png" alt="" width="307" height="215">
					</picture>
				</li>
			</ul>
			<a class="cta">お申込みはこちらから</a>
		</div>
	</section>
	<section class="service">
		<div class="container-s">
			<h2>月額<span>69,800</span>円でここまで対応！</h2>
		</div>
	</section>
</main>
<?php get_template_part('navi-footer'); ?>
<?php get_footer(); ?>
