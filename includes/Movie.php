<?php 

class Movie {

    public $title;
    public $run_time;
    public $release_date;
    public $actors;
    public $image;
    
    function __construct($arr) {
      $this->title = $arr['title'];
      $this->actors = $arr['actors'];
      $this->run_time = $arr['run_time'];
      $this->release_date = $arr['release_date'];
      $this->image = $arr['image'];
     
    }

    function get_movie_title(){
       return $this->title;
    }

    function get_movie_image(){
      return $this->image;
   }

    function get_movie_run_time(){
        return $this->run_time;
     }

     function get_movie_release_date(){
        return $this->release_date;
     }

     function get_movie_actors($actors){
        $result=array_intersect($this->actors, $actors);
        return $result;
     }

  }

?>
