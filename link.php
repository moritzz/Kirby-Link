<?php 

// =======================
// = Component Registery =
// =======================

$kirby->set('template', 'link', __DIR__ . '/templates/link.php');
$kirby->set('blueprint', 'link', __DIR__ . '/blueprints/link.php');

// ===================
// = Model Registery =
// ===================

require_once(__DIR__ . '/models/LinkPage.php');
$kirby->set('page::model', 'link', 'LinkPage');

