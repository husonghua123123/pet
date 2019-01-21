<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi"/><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/service/index.css"><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/swiper-4.1.6.min.css"><script type="text/javascript" src="__PUBLIC__/js/swiper-3.4.2.jquery.min.js"></script><script type="text/javascript" src="__PUBLIC__/js/jquery-3.2.1.min.js"></script><title>服务内容</title></head><body><div class="tab_cont"><div class="gap"></div><div class="tab mcurrent" id="fuwu"><a href="#1">服务内容</a></div><div class="gap"></div><div class="tab" id="xiangqing"><a href="#2">服务详情</a></div><div class="gap"></div><div class="tab" id="pingjia">服务评价</div><div class="gap"></div></div><div style="height: 35px"></div><a name="1" id="1"><div class="shouye" id="shouye"><div class="swiper-container"><div class="swiper-wrapper"><div class="swiper-slide" ><img src="__PUBLIC__/img/index/index/top1.jpg" width="100%"  border="0" ></div><div class="swiper-slide" ><img src="__PUBLIC__/img/index/index/top1.jpg" width="100%"  border="0" ></div></div></div></div></a><div class="service"><div class="service_name">小型宠物</div><div class="service_detail">帮您解决亡故的宠物，进行无害化处理，上门收取亡故爱宠+紫外线消毒+专业环保焚化+树葬等整套服务</div></div><div class="price">￥1600</div><a name="#2" id="2"><div><img src="__PUBLIC__/img/service/index/3.jpg" width="100%"  border="0" ></div><div><img src="__PUBLIC__/img/service/index/4.jpg" width="100%"  border="0" ></div><div><img src="__PUBLIC__/img/service/index/5.jpg" width="100%"  border="0" ></div><div><img src="__PUBLIC__/img/service/index/6.jpg" width="100%"  border="0" ></div><div><img src="__PUBLIC__/img/service/index/7.jpg" width="100%"  border="0" ></div><div><img src="__PUBLIC__/img/service/index/8.jpg" width="100%"  border="0" ></div></a><div style="height:45px"></div><div class="submit_btm">立即下单</div><div class="zhezhao"></div><div class="other"><div class="item"><div class="item_img"></div><div class="item_detail"><div class="item_name">小型宠物</div><div class="item_namedetail">帮您解决亡故的宠物，进行无害化处理，上门收取亡故爱宠+紫外线消毒+专业环保焚化+树葬等整套服务</div><div class="item_price">￥1600</div></div></div><div class="category"><div class="category_name">重量分类</div><div class="category_text"><div class="category1 current" id="small">20斤以下</div><div class="category1" id="big">20斤以上</div></div></div><div class="line"></div><div class="buy"><div class="buy_text">购买数量</div><div class="jian">-</div><div class="buy_amount">1</div><div class="jia">+</div></div><a href="tel:4009260253"><div class="sure">确定</div></a></div></body></html><script>    $(function () {
        var goods_id=<?php echo ($goods_id); ?>;

        if(goods_id==1){
            $(".item_name").text("小型宠物");
            $(".item_price").text("￥1600");
            $(".service_name").text("小型宠物");
            $(".price").text("￥1600");
            $(".category1").removeClass('current');
            $("#small").addClass('current');
            $(".item_img").css('background-image','url(__PUBLIC__/img/service/index/animal.jpg)');
        }
        else {
            $(".item_name").text("大型宠物");
            $(".item_price").text("￥2000");
            $(".service_name").text("大型宠物");
            $(".price").text("￥2000");
            $(".category1").removeClass('current');
            $("#big").addClass('current');
            $(".item_img").css('background-image','url(__PUBLIC__/img/service/index/animalb.jpg)');
        }
        $(".tab").click(function () {
            $(this).addClass("mcurrent").siblings().removeClass("mcurrent");
        });
        $(".submit_btm").click(function () {
            $(".zhezhao").show();
            $(".other").show();
        });
        $(".zhezhao").click(function () {
            $(".zhezhao").hide();
            $(".other").hide();
        });
        $(".jian").click(function () {
            var amount=$(".buy_amount").text();
            if(amount>1){
                amount=parseInt(amount)-1;
                $(".buy_amount").html(amount);
            }
            else {
                alert("至少购买一个")
            }
        });
        $(".jia").click(function () {
            var amount=$(".buy_amount").text();
            if(amount>=1){
                amount=parseInt(amount)+1;
                $(".buy_amount").html(amount);
            }

        });
        $(".category1").click(function () {
            $(this).addClass("current").siblings().removeClass("current");
            if($(this).attr('id')=='big'){
                //console.log("ok");
                $(".item_name").text("大型宠物");
                $(".item_price").text("￥2000");
                $(".service_name").text("大型宠物");
                $(".price").text("￥2000");
                $(".item_img").css('background-image','url(__PUBLIC__/img/service/index/animalb.jpg)');
            }
            else {
                $(".item_name").text("小型宠物");
                $(".item_price").text("￥1600");
                $(".service_name").text("小型宠物");
                $(".price").text("￥1600");
                $(".item_img").css('background-image','url(__PUBLIC__/img/service/index/animal.jpg)');
            }
        });
    });

</script>