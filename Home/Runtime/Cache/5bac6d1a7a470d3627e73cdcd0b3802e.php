<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html lang="en"><head><meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi"/><meta charset="UTF-8"><script type="text/javascript" src="__PUBLIC__/js/swiper-3.4.2.jquery.min.js"></script><script type="text/javascript" src="__PUBLIC__/js/jquery-3.2.1.min.js"></script><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/swiper-4.1.6.min.css"><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/usercenter/index.css"><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/footer.css"><title>个人中心</title></head><body><div class="top"></div><div class="line"></div><div class="order"><div class="order_img"></div><div class="order_text">我的订单</div><div class="order_arrow"></div></div><div class="line"></div><div class="address"><div class="address_img"></div><div class="address_text">默认地址</div><div class="address_arrow"></div></div><div class="line"></div><div class="callus"><div class="callus_img"></div><div class="callus_text">联系我们</div></div><div style="height:1px;background-color: #E7E7E7;"></div><div class="calldetail"><div class="phone"><a href="tel:4009260-253>"><div class="tele_num">4009-260-253</div></a><div class="tele_text">南京市六合区马鞍街道</div></div><div class="ma"><img src="__PUBLIC__/img/usercenter/index/ma.png" width="100%"  border="0"></div></div><div style="height:40px"></div><div class="footer" id="footer"><div class="menu index "></div><div class="menu book"></div><div class="menu find"></div><div class="menu usercenter current"></div></div></body></html><script>    $(function () {
        $(".menu").click(function(){
            var that=$(this);
            if(!that.hasClass("current")){
                if(that.hasClass("index")){
                    location.href="<?php echo U('index/index');?>";
                }else if(that.hasClass("book")){
                    location.href="<?php echo U('service/index');?>";
                }
                else if(that.hasClass("find")){
                    location.href="<?php echo U('find/index');?>";
                }
                else if(that.hasClass("usercenter")){
                    location.href="<?php echo U('usercenter/index');?>";
                }
            }
            that.siblings().removeClass("current");
            that.addClass("current");
        });
    });
</script>