<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html lang="en"><head><meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi"/><meta charset="UTF-8"><script type="text/javascript" src="__PUBLIC__/js/swiper-3.4.2.jquery.min.js"></script><script type="text/javascript" src="__PUBLIC__/js/jquery-3.2.1.min.js"></script><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/swiper-4.1.6.min.css"><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/about/guide.css"><title>养宠指南</title></head><body><div class="top_title"><div class="top_symbol" ></div><div class="top_text">养宠指南</div></div><div style="height: 48px;"></div><div class="shouye" id="shouye"><div class="swiper-container"><div class="swiper-wrapper"><div class="swiper-slide" ><img src="__PUBLIC__/img/about/question.jpg" width="100%"  border="0" ></div><div class="swiper-slide" ><img src="__PUBLIC__/img/about/question.jpg" width="100%"  border="0" ></div></div></div></div><div class="category" id="tips"><div class="ca_top"><div class="ca_color"></div><div class="ca_ts">小贴士</div><div class="more"></div></div><div class="line"></div><div class="ca_title">狗狗常见中毒——巧克力中毒</div><div class="ca_detail">柯克建是巧克力的主要成分之一，而狗体内并没有相应的分解酶导致中毒，黑巧克力可可碱含量...</div></div><div class="category" id="research"><div class="ca_top"><div class="ca_color"></div><div class="ca_ts">每日攻略</div><div class="more"></div></div><div class="line"></div><div class="ca_title">指导手的六种肢体语言</div><div class="ca_detail">不着型、不着相，换句话说：做个隐形人才是一个好指导手的追求。</div></div></body></html><script>    $(function () {
        $("#tips").click(function () {
            location.href="<?php echo U('about/tips');?>";
        });
        $("#research").click(function () {
            location.href="<?php echo U('about/research');?>";
        });
        $(".top_symbol").click(function () {
            window.history.back(-1);

        });
    });
</script>