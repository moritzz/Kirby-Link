<?php 
  
/**
* Basic Link page model
*/

class LinkPage extends Page {
  
  public function url() {
    return $this->content()->get('url');
  }
  
}