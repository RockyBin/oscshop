<?php if (!defined('THINK_PATH')) exit();?><div class="left col-md-6 col-sm-6 col-xs-12">
  <h2>新顾客</h2>
  <p>结算选项</p>
  <label for="register">

    <input type="radio" name="account" value="register" id="register" checked="checked" />
   
    <b>注册购买</b></label>
  <br />

  <p>注册一个账户以便您更快捷地购物， 查看订单状态， 查看采购的历史记录，和更多的管理项目。</p>
  <input type="button" value="继续" id="button-account" class="btn btn-primary btn-continue" />
  <br />
  <br />
</div>
<div id="login" class="right col-md-6 col-sm-6 col-xs-12">
  <h2>注册用户</h2>
  <p>我已注册账户</p>
  <b>用户名/邮箱：</b><br />
  <input class="text" type="text" name="uname" value="" />
  <br />
  <b>密码：</b><br />
  <input class="text" type="password" name="password" value="" />
  <br />
  <input type="button" value="登录" id="button-login" class="btn btn-primary btn-upload" />
  <a class="forgotten" href="">忘记密码</a>
</div>