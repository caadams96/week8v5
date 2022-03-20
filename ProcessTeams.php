<?php
//Declare Namespace
namespace Team;
//Include Classes
include 'BaseballTeam.php';
include 'TeamCache.php';
//start session to handle variable passing
session_start();
//instantiate new TeamCache
$cache = new TeamCache();
//store all the inputs into an array
$inputs = array(
    0 => $_POST['team0'], 1 => $_POST['team1'],
    2 => $_POST['team2'], 3 => $_POST['team3'],
    4 => $_POST['team4'], 5 => $_POST['team5'],
    6 => $_POST['team6'], 7 => $_POST['team7'],
    8 => $_POST['team8'], 9 => $_POST['team9'],
);
//foreach team inside array $inputs
//create new baseball team objects
//store new teams inside the TeamCache Object
foreach($inputs as $teams){
    $temp = BaseballTeam::create($teams);
    $cache->setTeams($temp);
}
//serialize TeamCache Object
$_SESSION['cache'] = serialize($cache);
//Redirect data back to BaseballTeamForm.php
header("location: index.php");
exit();