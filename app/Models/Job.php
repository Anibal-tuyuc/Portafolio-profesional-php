<?php
namespace App\Models;
require_once ('BaseElement.php');
class Job extends BaseElement{
    public function __contruct($title, $description){
        $newTitle = "Job: $title";
        $this->title = $newTitle;
    }
}