<?php
/* Smarty version 3.1.29, created on 2020-11-09 16:18:19
  from "D:\UniServerZ\www\mini_shop\templates\index_side.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fa96bcb1d4a00_14266067',
  'file_dependency' => 
  array (
    '834f3df76bbb2b42ed056fd012c69a8ac360f3bf' => 
    array (
      0 => 'D:\\UniServerZ\\www\\mini_shop\\templates\\index_side.html',
      1 => 1461652626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:side_tools.html' => 1,
    'file:side_login.html' => 1,
    'file:side_cart.html' => 1,
  ),
),false)) {
function content_5fa96bcb1d4a00_14266067 ($_smarty_tpl) {
?>
<div class="panel panel-primary">
  <div class="panel-heading">功能表</div>
  <div class="panel-body">
    <?php if ($_smarty_tpl->tpl_vars['isUser']->value) {?>
      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:side_tools.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } else { ?>
      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:side_login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }?>
   </div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['cart']->value) && $_smarty_tpl->tpl_vars['cart']->value != '' && $_smarty_tpl->tpl_vars['op']->value != 'check_out') {?>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:side_cart.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
}
