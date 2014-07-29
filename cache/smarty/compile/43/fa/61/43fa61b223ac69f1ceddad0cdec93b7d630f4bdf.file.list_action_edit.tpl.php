<?php /* Smarty version Smarty-3.1.14, created on 2014-07-29 07:32:23
         compiled from "C:\wamp\www\blackhawk\admin6383\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1558253d79457327914-95675616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43fa61b223ac69f1ceddad0cdec93b7d630f4bdf' => 
    array (
      0 => 'C:\\wamp\\www\\blackhawk\\admin6383\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1406028793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1558253d79457327914-95675616',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d7945734aba0_29777977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d7945734aba0_29777977')) {function content_53d7945734aba0_29777977($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>