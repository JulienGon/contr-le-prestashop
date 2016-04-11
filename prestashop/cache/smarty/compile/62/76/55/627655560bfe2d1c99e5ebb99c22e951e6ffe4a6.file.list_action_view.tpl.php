<?php /* Smarty version Smarty-3.1.19, created on 2016-03-31 14:43:21
         compiled from "/Applications/MAMP/htdocs/prestashop_1.6.1.4_fr/prestashop/admin281z9vbni/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36310456156fd1b69ad4c69-69608946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '627655560bfe2d1c99e5ebb99c22e951e6ffe4a6' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.6.1.4_fr/prestashop/admin281z9vbni/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36310456156fd1b69ad4c69-69608946',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56fd1b69adfa45_76244650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fd1b69adfa45_76244650')) {function content_56fd1b69adfa45_76244650($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
