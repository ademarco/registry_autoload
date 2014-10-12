<?php

namespace Drupal\registry_autoload_test\Cache;

interface RCTestInterface {
  public function x();
}

class RCTest {
  public function __construct() {
    print "Hello Render_Cache\n";
  }
}
