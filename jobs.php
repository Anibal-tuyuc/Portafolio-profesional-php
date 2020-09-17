<?php
require_once ('vendor/autoload.php');

use App\Models\{Job,Project,Printable};
$job1 = new Job('PHP Developer', 'This is an awesome job!!');
$job1->months=32;

$job2 = new Job('Frontend Dev', 'This is an awesome job!!');
$job2->months=16;

$job3 = new Job('DevOps', 'This is an awesome job!!');
$job3->months=19;

$project1 = new Project('Project1', 'description');

$jobs=[
	$job1,
  $job2,
  $job3
];

$projects=[
  $project1
];



  function getDuration($months){
    $years=floor($months/12);
    $extraMonths= $months%12;
    return "$years years $extraMonths months";
  }
  function printElement(Printable $job){
    echo '<li class="work-position">';
    echo '<h5>' . $job->getTitle() . '</h5>';
    echo '<p>' . $job->getDescription() . '</p>';
    echo '<p>' . $job->getDurationAsString() . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>
      <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
      <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
      <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
      </ul>
      </li>';
  }