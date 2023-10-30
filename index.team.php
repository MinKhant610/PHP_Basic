<?php 
class Team{
    private $name;
    protected $teammates = [];

    function __construct($teamName){
        $this->name = $teamName;
    }

    // static method
    static function create($name){
        return new static($name);
    }
    
    function getTeamName(){
        return $this->name;
    }

    function addTeammates($team){
        $this->teammates[] = $team;
    }

    function getTeammates(){
        return $this->teammates;
    }
}

$team1 =Team :: create("ManU");
// echo  $team1->getTeamName();
$team1->addTeammates("Garnarcho");
print_r($team1->getTeammates());

$team2 = Team :: create("Real");
$team2->addTeammates("Jude");
print_r($team2->getTeammates());
?>