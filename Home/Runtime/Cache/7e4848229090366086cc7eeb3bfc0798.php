<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi"/><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><script type="text/javascript" src="__PUBLIC__/js/jquery-3.2.1.min.js"></script><script type="text/javascript" src="__PUBLIC__/js/swiper-3.4.2.jquery.min.js"></script><script type="text/javascript" src="__PUBLIC__/js/template.js"></script><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/swiper-4.1.6.min.css"><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/index/index.css"><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/footer.css"><title>首页</title><style>        html body{
            margin:0px;
        }


    </style></head><div><div class="shouye" id="shouye"><div class="swiper-container"><div class="swiper-wrapper"><div class="swiper-slide" ><img src="__PUBLIC__/img/index/index/top1.jpg" width="100%"  border="0" ></div><div class="swiper-slide" ><img src="__PUBLIC__/img/index/index/top1.jpg" width="100%"  border="0" ></div></div></div></div><div style="height:20px"></div><div class="module"><div class="module_one"><div class="module_one_left"><div class="module_one_left_top">关于我们</div><div class="module_one_left_bottom" >铭沃业动物无害化处理中心</div></div><div class="module_one_right" style="background: url(__PUBLIC__/img/index/index/icon.png) 0px -128px;"></div></div><div class="module_empty"></div><div class="module_one" style="background-color: #E1B7A1"><div class="module_one_left"><div class="module_one_left_top">服务流程</div><div class="module_one_left_bottom">收到您的订单后</div></div><div class="module_one_right" style="background: url(__PUBLIC__/img/index/index/icon.png)  -256px -128px;"></div></div></div><div style="height:10px"></div><div class="module"><div class="module_one" style="background-color: #8FB548"><div class="module_one_left"><div class="module_one_left_top">设备介绍</div><div class="module_one_left_bottom" >采用环保无害化处理设备</div></div><div class="module_one_right" style="background: url(__PUBLIC__/img/index/index/icon.png) -64px -128px;;"></div></div><div class="module_empty"></div><div class="module_one" style="background-color: #FF5F5F"><div class="module_one_left"><div class="module_one_left_top">公益服务</div><div class="module_one_left_bottom">遗弃在路边的宠尸...</div></div><div class="module_one_right" style="background: url(__PUBLIC__/img/index/index/icon.png) -320px -128px;"></div></div></div><div style="height:10px"></div><div class="module"><div class="module_one" style="background-color: #1DCEEB"><div class="module_one_left"><div class="module_one_left_top">你问我答</div><div class="module_one_left_bottom" >你所关心的问答</div></div><div class="module_one_right" style="background: url(__PUBLIC__/img/index/index/icon.png) -128px -128px;"></div></div><div class="module_empty"></div><div class="module_one" style="background-color: #C282F4"><div class="module_one_left"><div class="module_one_left_top">养宠指南</div><div class="module_one_left_bottom">品种、习性、性别、疫苗</div></div><div class="module_one_right" style="background: url(__PUBLIC__/img/index/index/icon.png) -384px -128px;"></div></div></div><div style="height:5px"></div><div class="fee"><div class="fee_color"></div><div class="fee_text">收费标准</div></div><div style="height:5px"></div><div class="smallpet"><div class="fee_one"><div class="one_pic"></div><div class="one_detail"><div class="name_price"><div class="name">小型宠物</div><div class="price"><div class="price_name">￥1600</div><div class="price_text">元起/只</div></div></div><div class="detail_text">            活在喧闹繁华的世界<br/>            像童话里的精灵一样<br/>            单纯的玩耍<br/>            应该是每位萌宠主人的愿望吧
        </div></div></div></div><div class="bigpet"><div class="fee_one"><div class="one_pic"></div><div class="one_detail"><div class="name_price"><div class="name">大型宠物</div><div class="price"><div class="price_name">￥2000</div><div class="price_text">元起/只</div></div></div><div class="detail_text">            活在喧闹繁华的世界<br/>            像童话里的精灵一样<br/>            单纯的玩耍<br/>            应该是每位萌宠主人的愿望吧
        </div></div></div></div><div style="height:40px"></div><div class="footer" id="footer"><div class="menu index current"></div><div class="menu book"></div><div class="menu find"></div><div class="menu usercenter"></div></div></body></html><script>    $(function () {
        var mySwiper = new Swiper('.swiper-container', {
            autoplay: 3000,//可选选项，自动滑动
            initialSlide :0,
            //direction:'vertical',
           // speed:10,
            effect:'coverflow',
            //autoplaystopOnLast:false,
            // effect : 'coverflow',

        })



        $(".menu").click(function(){
            var that=$(this);
            if(!that.hasClass("current")){
                if(that.hasClass("index")){
                    location.href="<<?php echo U('index/index');?>>";
                }else if(that.hasClass("book")){
                    location.href="<?php echo U('service/index');?>";
                }
                else if(that.hasClass("find")){
                    location.href="<<?php echo U('find/index');?>>";
                }
                else if(that.hasClass("usercenter")){
                    location.href="<<?php echo U('usercenter/index');?>>";
                }
            }
            that.siblings().removeClass("current");
            that.addClass("current");
        });
        // alert("ok");
        $(".jiaru").click(function(){
            var that=$(this);
            var _goodsid=that.attr("goods_id");
            //alert(_goodsid);
            $.ajax({
                url:"<<?php echo U('service/index');?>>",
                data:{
                    goods_id:_goodsid,
                },
                type:'post',
                cache:false,
                success:function(data){

                }
            })
        });

        $(".detail").click(function(){
            var that=$(this);
            var _goodsid=that.attr("good_id");
            location.href = '<<?php echo U("service/detail");?>>&goods_id='+_goodsid;
        });
    });
</script>