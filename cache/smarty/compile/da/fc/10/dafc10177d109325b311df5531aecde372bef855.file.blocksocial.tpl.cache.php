<?php /* Smarty version Smarty-3.1.14, created on 2014-07-29 07:32:35
         compiled from "C:\wamp\www\blackhawk\themes\default-bootstrap\modules\blocksocial\blocksocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:712653d7946323a0b3-81473977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dafc10177d109325b311df5531aecde372bef855' => 
    array (
      0 => 'C:\\wamp\\www\\blackhawk\\themes\\default-bootstrap\\modules\\blocksocial\\blocksocial.tpl',
      1 => 1406028836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '712653d7946323a0b3-81473977',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
    'youtube_url' => 0,
    'google_plus_url' => 0,
    'pinterest_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d7946339d8c9_18804402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d7946339d8c9_18804402')) {function content_53d7946339d8c9_18804402($_smarty_tpl) {?>

<section id="social_block">
	<ul>
		<?php if ($_smarty_tpl->tpl_vars['facebook_url']->value!=''){?>
			<li class="facebook">
				<a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebook_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
					<span><?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
				</a>
			</li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['twitter_url']->value!=''){?>
			<li class="twitter">
				<a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['twitter_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
					<span><?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
				</a>
			</li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['rss_url']->value!=''){?>
			<li class="rss">
				<a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rss_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
					<span><?php echo smartyTranslate(array('s'=>'RSS','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
				</a>
			</li>
		<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['youtube_url']->value!=''){?>
        	<li class="youtube">
        		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['youtube_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        			<span><?php echo smartyTranslate(array('s'=>'Youtube','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
        		</a>
        	</li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['google_plus_url']->value!=''){?>
        	<li class="google-plus">
        		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['google_plus_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        			<span><?php echo smartyTranslate(array('s'=>'Google Plus','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
        		</a>
        	</li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['pinterest_url']->value!=''){?>
        	<li class="pinterest">
        		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pinterest_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
        			<span><?php echo smartyTranslate(array('s'=>'Pinterest','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
        		</a>
        	</li>
        <?php }?>
	</ul>
    <h4><?php echo smartyTranslate(array('s'=>'Follow us','mod'=>'blocksocial'),$_smarty_tpl);?>
</h4>
</section>
<div class="clearfix"></div>
<?php }} ?>