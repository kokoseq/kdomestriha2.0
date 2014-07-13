<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo UrlHelper::baseUrl(); ?>/css/main.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="cs" />
</head>

<body>
<div class="header-wrapper">
	<?php 
	$this->widget(
		'booster.widgets.TbNavbar',
		array(
			'fixed' => false,
			'htmlOptions' => array(
				'id' => 'mainmenu'
			),
			'brandUrl' => UrlHelper::baseUrl(),
			'brandOptions' => array(
				'id' => 'logo',
				),
			'items' => array(
				array(
					'class' => 'booster.widgets.TbMenu',
					'type' => 'navbar',
					'htmlOptions' => array(
						'class' => 'pull-right',
					),
					'items' => array(
						array('label'=>'Recenze', 'url'=>array('/site/searchResult')),
						array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
						array('label'=>'Contact', 'url'=>array('/site/contact')),
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					)
				)
			)
		)
	);
	?>
</div>

<div class="container" id="page">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	
	<?php echo $content; ?>

</div><!-- page -->

<div class="footer">
	<div class="container">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div>
</div><!-- footer -->
</body>
</html>
