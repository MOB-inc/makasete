<header id="header">
  <div class="top-bar"></div>
  <div class="wrapper site-header__wrapper flex">
    <a href="<?php echo esc_url(home_url()); ?>" class="brand">
      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/common/logo__font--black.svg" width="335" height="52" alt="zenzai">
    </a>
    <nav class="nav">
      <ul class="nav__wrapper flex">
        <li class="nav__item"><a href="http://kamouzenzai.com/" class="bold" target="_blank" rel="noopener noreferrer">蒲生本店</a></li>
        <li class="nav__item maruya"><a href="<?php echo esc_url(home_url()); ?>/cafe" class="bold">マルヤガーデンズ店</a></li>
        <li class="nav__item gallery"><a href="<?php echo esc_url(home_url()); ?>/marginal-gallery" class="bold">zenzaiマージナルギャラリー</a></li>
      </ul>
    </nav>
    <!-- ハンバーガーメニュー -->
    <div class="hamburger" id="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <nav class="globalMenuSp">
      <div class="wrap">
        <a href="<?php echo esc_url(home_url()); ?>" class="brand--2">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/common/logo__font--white.svg" alt="zenzai" width="190" height="30">
        </a>
        <ul>
          <li><a href="http://kamouzenzai.com/" class="bold" target="_blank" rel="noopener noreferrer">蒲生本店</a></li>
          <li><a href="<?php echo esc_url(home_url()); ?>/cafe" class="bold">マルヤガーデンズ店</a></li>

          <?php
            $terms = get_terms( 'volume');
            $now_url = "";
            $next_url = "";
            foreach ( $terms as $term ){
              // タームごとに全作者を取得し、一人でも期日内のデータがあればそのタームurlを取得する
              $args = array(
                'post_type' => array('exhibitor'),
                'tax_query' => array(
                    //'relation' => 'OR',
                    array(
                      'taxonomy' => 'volume',
                        'field' => 'slug',
                        'terms' => $term,
                      ),
                    ),
                    'posts_per_page' => '-1',
              );
              $my_query = new WP_Query($args);
              if( $my_query -> have_posts() ) :
                while($my_query -> have_posts()) : $my_query -> the_post();
                // strtotimeで日付の文字列を時間の数値に変更（比較用）
                $start = strtotime(substr(esc_html(get_field('exhibit_start')),0,10));
                $end = strtotime(substr(esc_html(get_field('exhibit_end')),0,10));
                $today = strtotime('now');
                if(($today >= $start) && ($today <= $end)){
                  $now_url = esc_url(home_url()).'/volume/'.$term->slug;
                  $now = $term->slug;
                }
                if($today < $start){
                  $next_url = esc_url(home_url()).'/volume/'.$term->slug;
                  $next = $term->slug;
                }
              endwhile;
              wp_reset_postdata();
              endif;
            }
            $page1 = "";
            $page2 = "";
            $page3 = "";
            $page4 = "";
            $now =  '/volume/'.$now."/";
            $next = '/volume/'.$next."/";
            $current = '';
            if(isset($_SERVER['HTTPS'])){
              $current .= 'https://';
            }else{
              $current .= 'http://';
            }
            $current .= $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            $del_home = esc_url(home_url());
            $current_page = str_replace($del_home,'',$current);
            switch($current_page){
              case '/marginal-gallery/':
                $page1 = "current";
                break;
              case $now:
                $page2 = "current";
                break;
              case $next:
                $page3 = "current";
                break;
              case '/backnumber/':
                $page4 = "current";
                break;
            }
          ?>
          <li class="<?php echo $page1;?>"><a href="<?php echo esc_url(home_url()); ?>/marginal-gallery/" class="bold">zenzaiマージナルギャラリー</a></li>
          <?php if(empty($now_url)):else:?>
            <li class="<?php echo $page2;?>"><a href="<?php echo $now_url;?>" class="bold">-　NOW</a></li>
          <?php endif;?>
          <?php if(empty($next_url)):else:?>
            <li class="<?php echo $page3;?>"><a href="<?php echo $next_url;?>" class="bold">-　NEXT</a></li>
          <?php endif;?>
          <li class="<?php echo $page4;?>"><a href="<?php echo esc_url(home_url()); ?>/backnumber" class="bold">-　BackNumber</a></li>
          </ul>
        </ul>
        <div class="sns-wrap flex">
          <a href="https://www.facebook.com/%E8%92%B2%E7%94%9F%E8%8C%B6%E5%BB%8Azenzai-345886578767545/" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/common/facebook.svg" alt="facebook" width="50" height="50">
          </a>
          <a href="https://www.instagram.com/kamouzenzai/" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/common/instagram.svg" alt="instagram" width="50" height="50">
          </a>
        </div>
      </div>
    </nav>
  </div>
</header>
