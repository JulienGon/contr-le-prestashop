<?php /*%%SmartyHeaderCode:203063634556fd15fc0fdeb6-59362066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e67739640a73d04d336d0efd4b788ad181e9b58' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.6.1.4_fr/prestashop/themes/default-bootstrap/modules/blockcms/blockcms.tpl',
      1 => 1452091828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203063634556fd15fc0fdeb6-59362066',
  'variables' => 
  array (
    'block' => 0,
    'cms_titles' => 0,
    'cms_key' => 0,
    'cms_title' => 0,
    'cms_page' => 0,
    'link' => 0,
    'show_price_drop' => 0,
    'PS_CATALOG_MODE' => 0,
    'show_new_products' => 0,
    'show_best_sales' => 0,
    'display_stores_footer' => 0,
    'show_contact' => 0,
    'contact_url' => 0,
    'cmslinks' => 0,
    'cmslink' => 0,
    'show_sitemap' => 0,
    'footer_text' => 0,
    'display_poweredby' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56fd15fc1af5a0_25201347',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fd15fc1af5a0_25201347')) {function content_56fd15fc1af5a0_25201347($_smarty_tpl) {?>
	<!-- Block CMS module footer -->
	<section class="footer-block col-xs-12 col-sm-2" id="block_various_links_footer">
		<h4>Informations</h4>
		<ul class="toggle-footer">
							<li class="item">
					<a href="http://localhost:8888/prestashop_1.6.1.4_fr/prestashop/promotions" title="Promotions">
						Promotions
					</a>
				</li>
									<li class="item">
				<a href="http://localhost:8888/prestashop_1.6.1.4_fr/prestashop/nouveaux-produits" title="Nouveaux produits">
					Nouveaux produits
				</a>
			</li>
										<li class="item">
					<a href="http://localhost:8888/prestashop_1.6.1.4_fr/prestashop/meilleures-ventes" title="Meilleures ventes">
						Meilleures ventes
					</a>
				</li>
										<li class="item">
					<a href="http://localhost:8888/prestashop_1.6.1.4_fr/prestashop/magasins" title="Nos magasins">
						Nos magasins
					</a>
				</li>
									<li class="item">
				<a href="http://localhost:8888/prestashop_1.6.1.4_fr/prestashop/nous-contacter" title="Contactez-nous">
					Contactez-nous
				</a>
			</li>
															<li class="item">
						<a href="http://localhost:8888/prestashop_1.6.1.4_fr/prestashop/content/3-conditions-utilisation" title="Conditions d&#039;utilisation">
							Conditions d&#039;utilisation
						</a>
					</li>
																<li class="item">
						<a href="http://localhost:8888/prestashop_1.6.1.4_fr/prestashop/content/4-a-propos" title="A propos">
							A propos
						</a>
					</li>
													<li>
				<a href="http://localhost:8888/prestashop_1.6.1.4_fr/prestashop/plan-site" title="sitemap">
					sitemap
				</a>
			</li>
					</ul>
		
	</section>
		<section class="bottom-footer col-xs-12">
		<div>
			<?php echo smartyTranslate(array('s'=>'[1] %3$s %2$s - Ecommerce software by %1$s [/1]','mod'=>'blockcms','sprintf'=>array('PrestaShop™',date('Y'),'©'),'tags'=>array('<a class="_blank" href="http://www.prestashop.com">')),$_smarty_tpl);?>

		</div>
	</section>
		<!-- /Block CMS module footer -->
<?php }} ?>
