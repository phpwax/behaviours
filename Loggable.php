<?php
namespace Wax\Behaviours;

trait Loggable {

  public $logger = false;
  
  public function log($message, $level=\LOG_INFO) {
    if(is_callable([$this->logger, "log"])) $this->logger->log($message,$level);
  }
  
  public function set_logger($logger) {
    $this->logger = $logger;
  }

}

