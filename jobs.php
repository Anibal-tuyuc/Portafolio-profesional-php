<?php
require_once 'vendor/autoload.php';
use App\Models\{Job,Project};
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'curso_php',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$jobs=Job::all();

$projects=Project::all();

  function getDuration($months){
    $years=floor($months/12);
    $extraMonths= $months%12;
    return "$years years $extraMonths months";
  }
  function printElement($jobs){
    echo '<li class="work-position">';
    echo '<h5>' . $jobs->title . '</h5>';
    echo '<p>' . $jobs->description . '</p>';
    //echo '<p>' . $jobs->getDurationAsString() . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>
      <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
      <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
      <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
      </ul>
      </li>';
  }