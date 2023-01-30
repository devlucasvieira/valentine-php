<meta name="theme-color" content="#91d8f7">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php if (basename($_SERVER['SCRIPT_NAME']) == 'index.php') { ?>
	<title>
		<?php if (isset($metastags->meta_title_principal) && !empty($metastags->meta_title_principal)) {
			echo $metastags->meta_title_principal;
		} ?>
	</title>
	<meta name="description"
		content="<?php if (isset($metastags->meta_description_principal) && !empty($metastags->meta_description_principal)) {
			echo $metastags->meta_description_principal;
		} ?>" />
	<meta name="keywords"
		content="<?php if (isset($metastags->meta_keywords_principal) && !empty($metastags->meta_keywords_principal)) {
			echo $metastags->meta_keywords_principal;
		} ?>">

	<meta name="twitter:card"
		content="<?php if (isset($metastags->meta_title_principal) && !empty($metastags->meta_title_principal)) {
			echo $metastags->meta_title_principal;
		} ?>" />
	<meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
	<meta name="twitter:creator" content="ayzen" />
	<meta property="og:title"
		content="<?php if (isset($metastags->meta_title_principal) && !empty($metastags->meta_title_principal)) {
			echo $metastags->meta_title_principal;
		} ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo SITE_URL; ?>" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>" />
	<meta property="og:image:width" content="400" />
	<meta property="og:image:height" content="300" />
	<link rel="canonical" href="<?php echo SITE_URL; ?>" />
<?php } ?>

<?php if (basename($_SERVER['SCRIPT_NAME']) == 'contato.php') { ?>
	<title>
		<?php if (isset($metastags->meta_title_contato) && !empty($metastags->meta_title_contato)) {
			echo $metastags->meta_title_contato;
		} ?>
	</title>
	<meta name="description"
		content="<?php if (isset($metastags->meta_description_contato) && !empty($metastags->meta_description_contato)) {
			echo $metastags->meta_description_principal;
		} ?>" />
	<meta name="keywords"
		content="<?php if (isset($metastags->meta_keywords_contato) && !empty($metastags->meta_keywords_contato)) {
			echo $metastags->meta_keywords_contato;
		} ?>">
	<meta name="twitter:card"
		content="<?php if (isset($metastags->meta_title_contato) && !empty($metastags->meta_title_contato)) {
			echo $metastags->meta_title_contato;
		} ?>" />
	<meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
	<meta name="twitter:creator" content="ayzen" />
	<meta property="og:title"
		content="<?php if (isset($metastags->meta_title_contato) && !empty($metastags->meta_title_contato)) {
			echo $metastags->meta_title_contato;
		} ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo SITE_URL; ?>" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>" />
	<meta property="og:image:width" content="400" />
	<meta property="og:image:height" content="300" />
	<link rel="canonical" href="<?php echo SITE_URL; ?>/contato" />
<?php } ?>
<?php if (basename($_SERVER['SCRIPT_NAME']) == 'sobre.php') { ?>
	<title>
		<?php if (isset($metastags->meta_title_sobre) && !empty($metastags->meta_title_sobre)) {
			echo $metastags->meta_title_sobre;
		} ?>
	</title>
	<meta name="description"
		content="<?php if (isset($metastags->meta_description_sobre) && !empty($metastags->meta_description_sobre)) {
			echo $metastags->meta_description_sobre;
		} ?>" />
	<meta name="keywords"
		content="<?php if (isset($metastags->meta_keywords_sobre) && !empty($metastags->meta_keywords_sobre)) {
			echo $metastags->meta_keywords_sobre;
		} ?>">
	<meta name="twitter:card"
		content="<?php if (isset($metastags->meta_title_sobre) && !empty($metastags->meta_title_sobre)) {
			echo $metastags->meta_title_sobre;
		} ?>" />
	<meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
	<meta name="twitter:creator" content="ayzen" />
	<meta property="og:title"
		content="<?php if (isset($metastags->meta_title_sobre) && !empty($metastags->meta_title_sobre)) {
			echo $metastags->meta_title_sobre;
		} ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo SITE_URL; ?>" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>" />
	<meta property="og:image:width" content="400" />
	<meta property="og:image:height" content="300" />
	<link rel="canonical" href="<?php echo SITE_URL; ?>/sobre" />
<?php } ?>
<?php if (basename($_SERVER['SCRIPT_NAME']) == 'produtos.php') { ?>
	<title>
		<?php if (isset($metastags->meta_title_produtos) && !empty($metastags->meta_title_produtos)) {
			echo $metastags->meta_title_produtos;
		} ?>
	</title>
	<meta name="description"
		content="<?php if (isset($metastags->meta_description_produtos) && !empty($metastags->meta_description_produtos)) {
			echo $metastags->meta_description_produtos;
		} ?>" />
	<meta name="keywords"
		content="<?php if (isset($metastags->meta_keywords_produtos) && !empty($metastags->meta_keywords_produtos)) {
			echo $metastags->meta_keywords_produtos;
		} ?>">
	<meta name="twitter:card"
		content="<?php if (isset($metastags->meta_title_produtos) && !empty($metastags->meta_title_produtos)) {
			echo $metastags->meta_title_produtos;
		} ?>" />
	<meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
	<meta name="twitter:creator" content="ayzen" />
	<meta property="og:title"
		content="<?php if (isset($metastags->meta_title_produtos) && !empty($metastags->meta_title_produtos)) {
			echo $metastags->meta_title_produtos;
		} ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo SITE_URL; ?>" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>" />
	<meta property="og:image:width" content="400" />
	<meta property="og:image:height" content="300" />
	<link rel="canonical" href="<?php echo SITE_URL; ?>" />
<?php } ?>
<?php if (basename($_SERVER['SCRIPT_NAME']) == 'blog.php') { ?>
	<title>
		<?php if (isset($metastags->meta_title_blog) && !empty($metastags->meta_title_blog)) {
			echo $metastags->meta_title_blog;
		} ?>
	</title>
	<meta name="description"
		content="<?php if (isset($metastags->meta_description_blog) && !empty($metastags->meta_description_blog)) {
			echo $metastags->meta_description_blog;
		} ?>" />
	<meta name="keywords"
		content="<?php if (isset($metastags->meta_keywords_blog) && !empty($metastags->meta_keywords_blog)) {
			echo $metastags->meta_keywords_blog;
		} ?>">
	<meta name="twitter:card"
		content="<?php if (isset($metastags->meta_title_blog) && !empty($metastags->meta_title_blog)) {
			echo $metastags->meta_title_blog;
		} ?>" />
	<meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
	<meta name="twitter:creator" content="ayzen" />
	<meta property="og:title"
		content="<?php if (isset($metastags->meta_title_blog) && !empty($metastags->meta_title_blog)) {
			echo $metastags->meta_title_blog;
		} ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo SITE_URL; ?>" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>" />
	<meta property="og:image:width" content="400" />
	<meta property="og:image:height" content="300" />
	<link rel="canonical" href="<?php echo SITE_URL; ?>/blog" />
<?php } ?>
<?php if (basename($_SERVER['SCRIPT_NAME']) == 'servicos.php') { ?>
	<title>
		<?php if (isset($metastags->meta_title_servico) && !empty($metastags->meta_title_servico)) {
			echo $metastags->meta_title_servico;
		} ?>
	</title>
	<meta name="description"
		content="<?php if (isset($metastags->meta_description_servico) && !empty($metastags->meta_description_servico)) {
			echo $metastags->meta_description_servico;
		} ?>" />
	<meta name="keywords"
		content="<?php if (isset($metastags->meta_keywords_servico) && !empty($metastags->meta_keywords_servico)) {
			echo $metastags->meta_keywords_servico;
		} ?>">
	<meta name="twitter:card"
		content="<?php if (isset($metastags->meta_title_servico) && !empty($metastags->meta_title_servico)) {
			echo $metastags->meta_title_servico;
		} ?>" />
	<meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
	<meta name="twitter:creator" content="ayzen" />
	<meta property="og:title"
		content="<?php if (isset($metastags->meta_title_servico) && !empty($metastags->meta_title_servico)) {
			echo $metastags->meta_title_servico;
		} ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo SITE_URL; ?>" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>" />
	<meta property="og:image:width" content="400" />
	<meta property="og:image:height" content="300" />
	<link rel="canonical" href="<?php echo SITE_URL; ?>/blog" />
<?php } ?>
<?php if (basename($_SERVER['SCRIPT_NAME']) == 'nosso-espaco.php') { ?>
	<title>
		<?php if (isset($metastags->meta_title_espaco) && !empty($metastags->meta_title_espaco)) {
			echo $metastags->meta_title_espaco;
		} ?>
	</title>
	<meta name="description"
		content="<?php if (isset($metastags->meta_description_espaco) && !empty($metastags->meta_description_espaco)) {
			echo $metastags->meta_description_espaco;
		} ?>" />
	<meta name="keywords"
		content="<?php if (isset($metastags->meta_keywords_espaco) && !empty($metastags->meta_keywords_espaco)) {
			echo $metastags->meta_keywords_espaco;
		} ?>">
	<meta name="twitter:card"
		content="<?php if (isset($metastags->meta_title_espaco) && !empty($metastags->meta_title_espaco)) {
			echo $metastags->meta_title_espaco;
		} ?>" />
	<meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
	<meta name="twitter:creator" content="ayzen" />
	<meta property="og:title"
		content="<?php if (isset($metastags->meta_title_espaco) && !empty($metastags->meta_title_espaco)) {
			echo $metastags->meta_title_espaco;
		} ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo SITE_URL; ?>" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>" />
	<meta property="og:image:width" content="400" />
	<meta property="og:image:height" content="300" />
	<link rel="canonical" href="<?php echo SITE_URL; ?>/blog" />
<?php } ?>
<?php if (basename($_SERVER['SCRIPT_NAME']) == 'especialistas.php') { ?>
	<title>
		<?php if (isset($metastags->meta_title_equipe) && !empty($metastags->meta_title_equipe)) {
			echo $metastags->meta_title_equipe;
		} ?>
	</title>
	<meta name="description"
		content="<?php if (isset($metastags->meta_description_equipe) && !empty($metastags->meta_description_equipe)) {
			echo $metastags->meta_description_equipe;
		} ?>" />
	<meta name="keywords"
		content="<?php if (isset($metastags->meta_keywords_equipe) && !empty($metastags->meta_keywords_equipe)) {
			echo $metastags->meta_keywords_equipe;
		} ?>">
	<meta name="twitter:card"
		content="<?php if (isset($metastags->meta_title_equipe) && !empty($metastags->meta_title_equipe)) {
			echo $metastags->meta_title_equipe;
		} ?>" />
	<meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
	<meta name="twitter:creator" content="ayzen" />
	<meta property="og:title"
		content="<?php if (isset($metastags->meta_title_equipe) && !empty($metastags->meta_title_equipe)) {
			echo $metastags->meta_title_equipe;
		} ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo SITE_URL; ?>" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>" />
	<meta property="og:image:width" content="400" />
	<meta property="og:image:height" content="300" />
	<link rel="canonical" href="<?php echo SITE_URL; ?>/blog" />
<?php } ?>
<?php if (basename($_SERVER['SCRIPT_NAME']) == 'convenios.php') { ?>
	<title>
		<?php if (isset($metastags->meta_title_convenio) && !empty($metastags->meta_title_convenio)) {
			echo $metastags->meta_title_convenio;
		} ?>
	</title>
	<meta name="description"
		content="<?php if (isset($metastags->meta_description_convenio) && !empty($metastags->meta_description_convenio)) {
			echo $metastags->meta_description_convenio;
		} ?>" />
	<meta name="keywords"
		content="<?php if (isset($metastags->meta_keywords_convenio) && !empty($metastags->meta_keywords_convenio)) {
			echo $metastags->meta_keywords_convenio;
		} ?>">
	<meta name="twitter:card"
		content="<?php if (isset($metastags->meta_title_convenio) && !empty($metastags->meta_title_convenio)) {
			echo $metastags->meta_title_convenio;
		} ?>" />
	<meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
	<meta name="twitter:creator" content="ayzen" />
	<meta property="og:title"
		content="<?php if (isset($metastags->meta_title_convenio) && !empty($metastags->meta_title_convenio)) {
			echo $metastags->meta_title_convenio;
		} ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo SITE_URL; ?>" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->logo_principal; ?>" />
	<meta property="og:image:width" content="400" />
	<meta property="og:image:height" content="300" />
	<link rel="canonical" href="<?php echo SITE_URL; ?>/blog" />
<?php } ?>
<?php if (basename($_SERVER['SCRIPT_NAME']) == 'desc-blog.php') { ?>
	<title>
		<?php if (isset($descBlog->meta_title) && !empty($descBlog->meta_title)) {
			echo $descBlog->meta_title;
		} ?>
	</title>
	<meta name="description"
		content="<?php if (isset($descBlog->meta_description) && !empty($descBlog->meta_description)) {
			echo $descBlog->meta_description;
		} ?>" />
	<meta name="keywords"
		content="<?php if (isset($descBlog->meta_keywords) && !empty($descBlog->meta_keywords)) {
			echo $descBlog->meta_keywords;
		} ?>">
	<meta name="twitter:card"
		content="<?php if (isset($descBlog->meta_title) && !empty($descBlog->meta_title)) {
			echo $descBlog->meta_title;
		} ?>" />
	<meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
	<meta name="twitter:creator" content="ayzen" />
	<meta property="og:title"
		content="<?php if (isset($descBlog->meta_title) && !empty($descBlog->meta_title)) {
			echo $descBlog->meta_title;
		} ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo SITE_URL; ?>" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $descBlog->foto ?>" />
	<meta property="og:image:width" content="400" />
	<meta property="og:image:height" content="300" />
	<link rel="canonical" href="<?php echo SITE_URL; ?>/blog/<?php echo $descBlog->url_amigavel ?>" />
<?php } ?>
<?php if (basename($_SERVER['SCRIPT_NAME']) == 'desc-servico.php') { ?>
	<title>
		<?php if (isset($descServico->meta_title) && !empty($descServico->meta_title)) {
			echo $descServico->meta_title;
		} ?>
	</title>
	<meta name="description"
		content="<?php if (isset($descServico->meta_description) && !empty($descServico->meta_description)) {
			echo $descServico->meta_description;
		} ?>" />
	<meta name="keywords"
		content="<?php if (isset($descServico->meta_keywords) && !empty($descServico->meta_keywords)) {
			echo $descServico->meta_keywords;
		} ?>">
	<meta name="twitter:card"
		content="<?php if (isset($descServico->meta_title) && !empty($descServico->meta_title)) {
			echo $descServico->meta_title;
		} ?>" />
	<meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
	<meta name="twitter:creator" content="ayzen" />
	<meta property="og:title"
		content="<?php if (isset($descServico->meta_title) && !empty($descServico->meta_title)) {
			echo $descServico->meta_title;
		} ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo SITE_URL; ?>" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $descServico->foto_principal ?>" />
	<meta property="og:image:width" content="400" />
	<meta property="og:image:height" content="300" />
	<link rel="canonical" href="<?php echo SITE_URL; ?>/servicos/<?php echo $descServico->url_amigavel ?>" />
<?php } ?>

<?php if (basename($_SERVER['SCRIPT_NAME']) == 'desc-exames.php') { ?>
	<title>
		<?php if (isset($descServico->meta_title) && !empty($descServico->meta_title)) {
			echo $descServico->meta_title;
		} ?>
	</title>
	<meta name="description"
		content="<?php if (isset($descServico->meta_description) && !empty($descServico->meta_description)) {
			echo $descServico->meta_description;
		} ?>" />
	<meta name="keywords"
		content="<?php if (isset($descServico->meta_keywords) && !empty($descServico->meta_keywords)) {
			echo $descServico->meta_keywords;
		} ?>">
	<meta name="twitter:card"
		content="<?php if (isset($descServico->meta_title) && !empty($descServico->meta_title)) {
			echo $descServico->meta_title;
		} ?>" />
	<meta name="twitter:site" content="<?php echo SITE_URL; ?>" />
	<meta name="twitter:creator" content="ayzen" />
	<meta property="og:title"
		content="<?php if (isset($descServico->meta_title) && !empty($descServico->meta_title)) {
			echo $descServico->meta_title;
		} ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo SITE_URL; ?>" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image" content="<?php echo SITE_URL; ?>/img/<?php echo $descServico->foto_principal ?>" />
	<meta property="og:image:width" content="400" />
	<meta property="og:image:height" content="300" />
	<link rel="canonical" href="<?php echo SITE_URL; ?>/exames/<?php echo $descServico->url_amigavel ?>" />
<?php } ?>



<meta name="author" content="ayzen">
<link rel="shortcut icon" href="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>">
<link rel="icon" href="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->favicon; ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?php if (isset($infoSistema->link_fonte_titulo) && !empty($infoSistema->link_fonte_titulo)) { ?>
	<link href="<?php echo $infoSistema->link_fonte_titulo; ?>" rel="stylesheet">
<?php } ?>
<?php if (isset($infoSistema->link_fonte_texto_apoio) && !empty($infoSistema->link_fonte_texto_apoio)) { ?>
	<link href="<?php echo $infoSistema->link_fonte_texto_apoio; ?>" rel="stylesheet">
<?php } ?>
<style>
	:root {
		--font-family-titulo:
			<?php echo $infoSistema->font_family_titulo; ?>
		;
		--font-weight-titulo:
			<?php echo $infoSistema->font_weight_titulo; ?>
		;
		--font-family-texto-apoio:
			<?php echo $infoSistema->font_family_texto_apoio; ?>
		;
		--font-weight-texto-apoio:
			<?php echo $infoSistema->font_weight_texto_apoio; ?>
		;
		--cor-primaria:
			<?php echo $infoSistema->cor_primaria; ?>
		;
		--cor-secundaria:
			<?php echo $infoSistema->cor_secundaria; ?>
		;
		--cor-titulo:
			<?php echo $infoSistema->cor_titulo; ?>
		;
		--cor-background:
			<?php echo $infoSistema->cor_background; ?>
		;
		--cor-botao:
			<?php echo $infoSistema->cor_botao; ?>
		;
		--cor-botao-hover:
			<?php echo $infoSistema->cor_botao_hover; ?>
		;
		--cor-menu:
			<?php echo $infoSistema->cor_menu; ?>
		;
	}
</style>