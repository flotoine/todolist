<?php
class Task {
    //properties
  public $title;
  public $content;

  //methods
  function set_task($title,$content){
    $this->title = $title;
    $this->content = $content;
  }
  function get_task_title() {
    return $this->title;
  }
  function get_task_content() {
    return $this->content;
  }
}

$first= new Task();
$first->set_task("Promener le chien","Prendre des canisacs");
echo $first->get_task_title();
echo '<br>';
echo $first->get_task_content();
?> 