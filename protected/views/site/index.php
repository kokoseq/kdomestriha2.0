
<div class="row">
	<h1 class="text-center">Najděte si svěho kadeřníka</h1>
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
							'style' => 'width: 350px;',
							),
						),
					'groupOptions' => array(
							'class' => 'col-md-5',
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
						'class' => 'btn-block'
					))
		);
		?>
		</div>
				
		<?php 
		$this->endWidget();
		?>
	</div>
</div>
