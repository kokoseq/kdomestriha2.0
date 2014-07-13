<?php

// Define input size depending if search box is embeded or not
if($embeded) $size = '';
else $size = 'input-lg';

//Generate search box
$form = $this->beginWidget(
		'booster.widgets.TbActiveForm',
		array(
				'id' => 'searchForm',
				'type' => 'inline',
		)
);

echo $form->textFieldGroup($searchForm, 'searchText',
		array(
				'labelOptions' => array(
						'label'=>false
				),
				'widgetOptions'=> array(
						'htmlOptions' => array(
								'placeholder' => 'Zadejte adresu, město nebo název kadeřnictví',
								'style' => 'width: 100%;',
								'class' => $size,
						),
				),
				'groupOptions' => array(
						'class' => 'col-md-6 col-sm-9',
				)
		)
);
?>

		<div class="col-md-2 col-sm-3">
		<?php 
		$this->widget(
				'booster.widgets.TbButton',
				array(
					'buttonType' => 'submit',
					'label' => 'Hledat',
					'htmlOptions' => array(
						'class' => 'btn-block ' . $size, 
					))
		);
		?>
		</div>
				
		<?php 
		$this->endWidget();
		?>