<?php 
 class Actor{

    public $name;
    public $birthDate;

    function __construct($arr) {
        $this->name = $arr['name'];
        $this->birthDate = $arr['dob'];
    }

    function get_actor_name(){
        return $this->name;
     }

     function get_actor_birth_date(){
        return $this->birthDate;
     }

    public function get_actor(){
        $actor = [
            "name" => $this->name,
            "dob" => $this->birthDate,
        ];
        return json_encode($actor, JSON_PRETTY_PRINT);
    }

 }
?>
