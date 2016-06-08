<?php 
  
/**
* Basic Blog page model
*/

class LinkPage extends Page {
  
  public function url() {
    return $this->content()->get('url');
  }
  
}