<?php get_header(); ?>
<?php get_template_part('navi-header'); ?>

<main id="notfound">
  <section class="c-main-visual">
    <div class="wrap">
      <h1>404 Not Found<span>ページが見つかりません。</span></h1>
      <a href="<?php echo esc_url(home_url()); ?>" class="to-front-btn yugo bold">トップページへ　&gt;</a>
    </div>

  </section>
</main>

<?php get_footer(); ?>
