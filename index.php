<?php
//Declare namespace
namespace Team;
//start session to handle variable passing
session_start();
//include classes
include 'BaseballTeam.php';
include 'TeamCache.php';
//$store inputs in an array
$inputs = array(
    0 => null, 1 => null,
    2 => null, 3 => null,
    4 => null, 5 => null,
    6 => null, 7 => null,
    8 => null, 9 => null,
);
//store team names in an array
$name = array(  'team0', 'team1',
    'team2', 'team3',
    'team4', 'team5',
    'team6', 'team7',
    'team8', 'team9',
);
//make sure the Session['cache'] is set
//if the Session['cache'] is set
//fill out the form with acquired user input
if(isset($_SESSION['cache'])){
    //un-serialize TeamCache Object
    $teams = unserialize($_SESSION['cache']);
    //get count of teams TeamCache is holding
    $count = count($teams->teams);
    //replace array: $inputs elements with TeamNames
    for($i = 0; $i<$count; ++$i){
        $inputs[$i] = $teams->getTeams($i)->getName();
    }
    //destroy session
    session_destroy();
}
?>

<!---**********************************************************-->
<!-- Corey Adams -->
<!DOCTYPE html>
<html lang="en">
<!--HTML DOCUMENT-->
<head>
    <title>Player Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="player_form_style.css">-->
</head>
<body>
<header>
    <div class="banner-wrapper">
        <div class="banner"> <h1> BaseBallTeam </h1> </div>
    </div>
</header>
<div class="back-drop">
    <main>
        <div class="grid-wrapper">
            <!---------------------------------------------------------------->
            <div class="box1">
                <!-FORM-->
                <form action="ProcessTeams.php" method="post">
                    <?php
                    //display 10 form-input divs
                    for($i=0;$i<10;$i++){?><br>
                        <div class="form-input" >
                            <label>Team: </label>
                            <input type='text' name='<?php echo $name[$i]?>' id='name'
                                   value='<?php echo $inputs[$i]?>'>
                        </div><br>
                    <?php }?>
                    <br>
                    <div class="form-input" id="submit-button">
                        <button class="btn" type="submit" value="submit" > Submit </button>
                    </div>

                </form>
            </div>
        </div>
    </main>
</div>
</body>
</html>
