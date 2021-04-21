<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name . " | Home";
?>

<div class="jumbotron text-center">
  <h1>Welcome to the webinar of the century!</h1>
  <p>This is an opportunity of a lifetime.</p>
  <a href="<?= $this->createUrl('webinar/create') ?>" class="btn btn-lg btn-info">JOIN OUR GROWING COMMUNITY!</a>
</div>