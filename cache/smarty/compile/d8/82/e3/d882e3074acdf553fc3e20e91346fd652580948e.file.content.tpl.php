<?php /* Smarty version Smarty-3.1.14, created on 2014-07-29 07:33:44
         compiled from "C:\wamp\www\blackhawk\admin6383\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3233753d794a8ca5e37-96326455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd882e3074acdf553fc3e20e91346fd652580948e' => 
    array (
      0 => 'C:\\wamp\\www\\blackhawk\\admin6383\\themes\\default\\template\\content.tpl',
      1 => 1406028791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3233753d794a8ca5e37-96326455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d794a8cd0dc4_84419366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d794a8cd0dc4_84419366')) {function content_53d794a8cd0dc4_84419366($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>