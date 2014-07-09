
<div class="row">
	<h1 class="text-center">Najděte si svého kadeřníka</h1>
</div>

<div class="search-box">
	<div class="row">
		<?php 
		$form = $this->beginWidget(
				'booster.widgets.TbActiveForm',
				array(
					'id' => 'searchForm',
					'type' => 'inline',
				)
			);
		?>
		
		<?php 
		echo $form->textFieldGroup($searchForm, 'searchText',
				array(
					'labelOptions' => array(
							'label'=>false
							),
					'widgetOptions'=> array(
						'htmlOptions' => array(
							'placeholder' => 'Zadejte adresu, město nebo název kadeřnictví',
							'style' => 'width: 100%;',
							'class' => 'input-lg',
							),
						),
					'groupOptions' => array(
							'class' => 'col-md-6',
						)
					)
				);
		?>

		<div class="col-md-2">
		<?php 
		$this->widget(
				'booster.widgets.TbButton',
				array(
					'buttonType' => 'submit',
					'label' => 'Hledat',
					'htmlOptions' => array(
						'class' => 'btn-block btn-lg'
					))
		);
		?>
		</div>
				
		<?php 
		$this->endWidget();
		?>
	</div>
</div>

<div class='city-catalog'>
	<div class='row'>
			<div class='col-md-2 col-md-offset-2'>Praha</div>
			<div class='col-md-2'>Brno</div>
			<div class='col-md-2'>Ostrava</div>
			<div class='col-md-2'>Plzeň</div>
			<div class="clearfix visible-md-block"></div>
			<div class='col-md-2 col-md-offset-2'>Olomouc</div>
			<div class='col-md-2'>České Budějovice</div>
			<div class='col-md-2'>Liberec</div>
			<div class='col-md-2'>Hradec Králové</div>
			<div class="clearfix visible-md-block"></div>
			<div class='col-md-2 col-md-offset-2'>Zlín</div>
			<div class='col-md-2'>Pardubice</div>
			<div class='col-md-2'>Jilava</div>
			<div class='col-md-2'>Ústí nad Labem</div>
			<div class="clearfix visible-md-block"></div>
	</div>
</div>
