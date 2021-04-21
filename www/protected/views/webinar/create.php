<?php
/* @var $this WebinarController */
/* @var $model WebinarAttendees */

$this->breadcrumbs=array(
	'Webinar Attendees'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WebinarAttendees', 'url'=>array('index')),
	array('label'=>'Manage WebinarAttendees', 'url'=>array('admin')),
);

?>

<section>
<p>Get ready for the year's biggest reveal!</p>
<h1 style="font-size: 28px; font-weight: 700;"><?= $title ?></h1>
<hr>

<div class="adz-form-wrap">
  <?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
</section>