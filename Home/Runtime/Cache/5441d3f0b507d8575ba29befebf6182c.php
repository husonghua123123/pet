<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html lang="en"><head><meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi"/><meta charset="UTF-8"><title>设备介绍</title><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/about/device.css"><script type="text/javascript" src="__PUBLIC__/js/jquery-3.2.1.min.js"></script></head><body><div class="top_title"><div class="top_symbol" ></div><div class="top_text">设备介绍</div></div><div class="device"><img src="__PUBLIC__/img/about/device.jpg" style="width:100%"></div><div class="base"><img src="__PUBLIC__/img/about/base.jpg" style="width:100%"></div></body></html><script>    $(function () {
        $(".top_symbol").click(function () {
            window.history.back(-1);

        });
    });
</script>