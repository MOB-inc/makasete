<?php
	$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
	$url = $_SERVER['REQUEST_URI'];
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- IE11をobjectfitに対応 -->
<?php if (strstr($ua, 'trident') || strstr($ua, 'msie')): ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.1.1/ofi.min.js" integrity="sha512-JgRVw2e/U8o/rGCtrBVX5Eq/woCDoEWBACByptHZeqDueBpSk8Nat7SOf4yimk94Stpx4EIZTbJtJMUv68l7kQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>objectFitImages('img');</script>
<!-- IE11をカラー変数に対応 -->
<script>window.MSInputMethodContext && document.documentMode && document.write('<script src="https://cdn.jsdelivr.net/gh/nuxodin/ie11CustomProperties@4.1.0/ie11CustomProperties.min.js"><\/script>');</script>
<?php endif; ?>
<!-- スリックｊｓ -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous"></script>

<script>

  // スマホアドレスバー対策
  if(navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)){
    var spvh = spvh || {};
    var header_height = $('header').outerHeight();
    spvh.view_height = {
      init : function(){
        this.setParameters();
        this.setHeight();
        this.bind();
      },
      setParameters : function(){
        this.$window = $(window);
        this.$target = $('#front .main-visual, #about .c-main-visual');
      },
      bind : function(){
        var _self = this;
        this.$window.on('resize',function(){_self.setHeight();});
      },
      setHeight : function(){
        this.$target.css('height',this.$window.height() - header_height);
      }
    };
    $(function(){spvh.view_height.init();});
  }

  // TOPに戻る
  $(function() {
    var pagetop = $("#page_top");
    //ボタン非表示
    //pagetop.hide();
    pagetop.css("display", "none");
    //100px スクロールしたらボタン表示
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        pagetop.fadeIn();
      } else {
        pagetop.fadeOut();
      }
    });
    pagetop.click(function () {
      $("body, html").animate({ scrollTop: 0 }, 500);
      return false;
    });
  });

  //スムーススクロール
  $(function(){
    // #で始まるa要素をクリックした場合に処理（"#"←ダブルクォーテンションで囲むのを忘れずに。忘れるとjQueryのバージョンによっては動かない。。）
    $('a[href^="#"]').click(function(){
      // 移動先を0px調整する。0を30にすると30px下にずらすことができる。
      var adjust = 0;
      // スクロールの速度（ミリ秒）
      var speed = 400;
      // アンカーの値取得 リンク先（href）を取得して、hrefという変数に代入
      var href= $(this).attr("href");
      // 移動先を取得 リンク先(href）のidがある要素を探して、targetに代入
      var target = $(href == "#" || href == "" ? 'html' : href);
      // 移動先を調整 idの要素の位置をoffset()で取得して、positionに代入
      var position = target.offset().top + adjust;
      // スムーススクロール linear（等速） or swing（変速）
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
    });
  });


  $(function() {
  // ヘッダー出し入れ
  var posBf = $(window).scrollTop();
    $(window).scroll(function(){
      var topWindow = $(window).scrollTop();
      if(topWindow > 100){
      // ----------------------------------------
      //ヘッダー消すアニメーション
      // ----------------------------------------
      var posAf = $(this).scrollTop();
      //元々の位置とスクロール後の位置を比較
      if( posAf < posBf){
        $('#header').removeClass('scroll_out');
      }else{
        $('#header').addClass('scroll_out');
      }
      //元々の位置をスクロール後の位置に書き換える
      posBf = posAf;
      }
    });
  });
</script>


<script>

  // アコーディオンーーーーーー
  $(function(){
    $("#term-archive .accordion").each(function (index) {
      $(this).nextAll(".open").click(function () {
          $(this).prevAll(".accordion").toggleClass("accordion-active");
          $(this).nextAll(".close").css("display", "block");
          $(this).css("display", "none");
      });
      $(this).nextAll(".close").click(function () {
          $(this).prevAll(".accordion").toggleClass("accordion-active");
          $(this).prevAll(".open").css("display", "block");
          $(this).css("display", "none");
      });
    });
  })
</script>


<?php wp_footer(); ?>
</body>
</html>
