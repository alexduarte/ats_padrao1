<?php /* Smarty version Smarty-3.1.14, created on 2014-07-29 07:31:41
         compiled from "C:\wamp\www\blackhawk\modules\themeconfigurator\views\templates\admin\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1730853d7942d048576-17237282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7e837f79a0b23106078943cdbd8d59f9154b4cd' => 
    array (
      0 => 'C:\\wamp\\www\\blackhawk\\modules\\themeconfigurator\\views\\templates\\admin\\admin.tpl',
      1 => 1406028834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1730853d7942d048576-17237282',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'htmlcontent' => 0,
    'error' => 0,
    'confirmation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d7942d1696e8_67225794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d7942d1696e8_67225794')) {function content_53d7942d1696e8_67225794($_smarty_tpl) {?>

<div id="htmlcontent" class="panel">
    <div class="panel-heading"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlcontent']->value['info']['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 (v.<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlcontent']->value['info']['version'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
)</div>
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)&&$_smarty_tpl->tpl_vars['error']->value){?>
        <?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlcontent']->value['admin_tpl_path'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp1."messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>"main",'text'=>$_smarty_tpl->tpl_vars['error']->value,'class'=>'error'), 0);?>

    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)&&$_smarty_tpl->tpl_vars['confirmation']->value){?>
        <?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlcontent']->value['admin_tpl_path'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp2."messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>"main",'text'=>$_smarty_tpl->tpl_vars['confirmation']->value,'class'=>'conf'), 0);?>

    <?php }?>
    <!-- New -->
    <?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlcontent']->value['admin_tpl_path'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp3."new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <!-- Slides -->
    <?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlcontent']->value['admin_tpl_path'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp4."items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php }} ?>