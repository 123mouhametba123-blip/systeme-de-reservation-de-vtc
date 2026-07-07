<?php

// Point d'entrée de l'application

require_once __DIR__ . '/Controller/PassagerController.php';
require_once __DIR__ . '/Controller/ChauffeurController.php';
require_once __DIR__ . '/Controller/CourseController.php';
require_once __DIR__ . '/Controller/PaiementController.php';

$uri = $_SERVER['REQUEST_URI'] ?? '/';
$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

// switch ($uri) { ... }
