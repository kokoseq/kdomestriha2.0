
<h1 class="text-center">Najděte si svého kadeřníka</h1>

<div class="search-box">
	<div class="row">
			<?php
		$this->renderPartial('/site/searchBox', array(
				'searchForm' => $searchForm,
				'embeded' => false)); 
		?>
	</div>
</div>

<div class='city-catalog'>
	<div class='row'>
			<div class='col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-2 col-xs-2 col-xs-offset-2'>Praha</div>
			<div class='col-md-2 col-sm-2 col-xs-2'>Brno</div>
			<div class='col-md-2 col-sm-2 col-xs-2'>Ostrava</div>
			<div class='col-md-2 col-sm-2 col-xs-2'>Plzeň</div>
			<div class="clearfix visible-md-block"></div>
			<div class='col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-2 col-xs-2 col-xs-offset-2'>Olomouc</div>
			<div class='col-md-2 col-sm-2 col-xs-2'>České Budějovice</div>
			<div class='col-md-2 col-sm-2 col-xs-2'>Liberec</div>
			<div class='col-md-2 col-sm-2 col-xs-2'>Hradec Králové</div>
			<div class="clearfix visible-md-block"></div>
			<div class='col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-2 col-xs-2 col-xs-offset-2'>Zlín</div>
			<div class='col-md-2 col-sm-2 col-xs-2'>Pardubice</div>
			<div class='col-md-2 col-sm-2 col-xs-2'>Jilava</div>
			<div class='col-md-2 col-sm-2 col-xs-2'>Ústí nad Labem</div>
			<div class="clearfix visible-md-block"></div>
	</div>
</div>

<?php 
$this->widget('ViewRecentReviewsWidget');
?>
