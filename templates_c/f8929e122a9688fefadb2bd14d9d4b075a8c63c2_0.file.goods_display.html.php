<?php
/* Smarty version 3.1.29, created on 2020-11-10 08:00:34
  from "C:\UniServerZ\www\mini_shop\templates\goods_display.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5faa48a26aafb9_41811433',
  'file_dependency' => 
  array (
    'f8929e122a9688fefadb2bd14d9d4b075a8c63c2' => 
    array (
      0 => 'C:\\UniServerZ\\www\\mini_shop\\templates\\goods_display.html',
      1 => 1604995221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5faa48a26aafb9_41811433 ($_smarty_tpl) {
?>
<div class="row">
  <div class="col-md-6">
    <img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
" class="img-thumbnail">
  </div>
  <div class="col-md-6">
    <h2><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
</h2>
    <p>售價：<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_price'];?>
元整</p>
    <p>人氣：<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_counter'];?>
</p>
    <div>
      <a href="index.php?op=add_to_cart&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
&goods_title=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
&goods_amount=1" class="btn btn-primary" role="button">加入購物車</a>
      <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
        <a href="tool.php?op=goods_form&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
" class="btn btn-warning">編輯商品</a>
        <a href="tool.php?op=delete_goods&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
" class="btn btn-danger">刪除商品</a>
      <?php }?>
    </div>
  </div>
</div>


<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#goods" aria-controls="goods" role="tab" data-toggle="tab">商品介紹</a></li>
  <li role="presentation"><a href="#note" aria-controls="note" role="tab" data-toggle="tab">退換或須知</a></li>
  <li role="presentation"><a href="#service" aria-controls="service" role="tab" data-toggle="tab">售後服務</a></li>
  <li role="presentation"><a href="#other" aria-controls="other" role="tab" data-toggle="tab">特別說明</a></li>
</ul>

<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="goods">
    <h3>商品介紹</h3>
    <p><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_content'];?>
</p>
  </div>
  <div role="tabpanel" class="tab-pane" id="note">
    <h3>退換貨須知</h3>
    <ul>
      <li>你以為能退款嗎?<span class="text-danger">抱歉!</span>，你沒有機會。</li>
    </ul>
  </div>
  <div role="tabpanel" class="tab-pane" id="service">
    <h3>售後服務</h3>
    <ul>
      <li>如您收到商品，請依正常程序儘速檢查商品，若商品發生新品瑕疵之情形，您可申請更換新品或退貨，請直接點選<a href="#" target="_blank">聯絡我們</a>。</li>
      <li>若您對於購買流程、付款方式、退貨及商品運送方式有疑問，你可直接點選<a href="#" target="_blank">會員中心</a>。</li>
    </ul>
  </div>
  <div role="tabpanel" class="tab-pane" id="other">
    <h3>評論區</h3>
    <div class="demo">
        <div id="comments">
            <h3 style="color:black">評論區</h3>
            <p id="demo" style="color:black"></p>
            <p id="demo1" style="color:black"></p>

        </div>
        <div id="post">
            <h3 style="color:black">發表評論</h3>
            <p style="color:black">暱稱:</p>
            <p><input type="text" class="input" id="txt1" ></p>
            <p style="color:black">評論:</p>
            <p><textarea class="input" id="txt2" style="width:100%; height:80px"></textarea></p>
            <p><input type="submit" value="發布" id="add" ></p>
            <div id="message"></div>
        </div>
    </div>
    </body>
    <?php echo '<script'; ?>
>
    $(document).ready(function (){
      $("#add").click(function(){
        var txt1 = $("#txt1").html(<?php echo $_smarty_tpl->tpl_vars['login_user']->value['user_name'];?>
); 
        var txt2 = $("#txt2").val();
        $("#demo").append(txt1);
        $("#demo").append(":");
        $("#demo").append(txt2);
        $("#demo").append("<br>");

      });
    });
    <?php echo '</script'; ?>
>
  </div>
</div>

<?php }
}
