<?php

namespace Team;

class TeamCache
{
    //instantiate an array
    public array $teams = array();

    //variadic function
    //allows any number of $params
    //foreach $params add team to Objects Array
    function setTeams(BaseballTeam...$params){
            foreach($params as $teams){
                $this->teams[] = $teams;
            }
    }
    //Return BaseBallTeam Object from Array
    function getTeams($i): BaseballTeam{
        return BaseballTeam::create($this->teams[$i]->getName());
    }

}