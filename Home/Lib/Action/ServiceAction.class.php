<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-01-14
 * Time: 14:00
 */

class ServiceAction extends Action
{
   public function index(){
      $goods_id=$_GET["goods_id"];
      if($goods_id==null||$goods_id==""){
          $goods_id=1;
      }
      $this->assign("goods_id",$goods_id);
      $this->display();
   }
}